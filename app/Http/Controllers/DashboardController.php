<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductFeature;
use App\Models\ProductImage;
use App\Models\Customer;
use App\Models\Payment;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function indexadmin()
    {
        try {
            // Basic counts
            $productCount = Product::count();
            $productFeatureCount = ProductFeature::count();
            $productImageCount = ProductImage::count();
            $customerCount = Customer::count();
            $paymentCount = Payment::count();

            // Revenue analytics with explicit null checks
            $totalRevenue = Payment::whereNotNull('total')->sum('total') ?? 0;
            $todayRevenue = Payment::whereNotNull('total')
                ->whereDate('created_at', today())
                ->sum('total') ?? 0;
            $lastMonthRevenue = Payment::whereNotNull('total')
                ->whereMonth('created_at', Carbon::now()->subMonth()->month)
                ->whereYear('created_at', Carbon::now()->subMonth()->year)
                ->sum('total') ?? 0;
            $averageOrderValue = $paymentCount > 0 ? $totalRevenue / $paymentCount : 0;

            // Calculate repeat customers with fallback
            $repeatCustomerCount = 0;
            try {
                $repeatCustomerCount = Customer::has('payments', '>', 1)->count();
            } catch (\Exception $e) {
                Log::error('Repeat Customer Count Error: ' . $e->getMessage());
                // Fallback query using raw SQL
                $repeatCustomerCount = DB::table('payments')
                    ->select('customer_id')
                    ->groupBy('customer_id')
                    ->havingRaw('COUNT(*) > 1')
                    ->count();
            }

            // Log revenue data for debugging
            Log::info('Revenue Data', [
                'totalRevenue' => $totalRevenue,
                'todayRevenue' => $todayRevenue,
                'lastMonthRevenue' => $lastMonthRevenue,
                'averageOrderValue' => $averageOrderValue,
                'paymentCount' => $paymentCount,
                'repeatCustomerCount' => $repeatCustomerCount
            ]);

            // Monthly revenue chart data (last 12 months)
            $monthlyRevenueData = [];
            for ($i = 11; $i >= 0; $i--) {
                $month = Carbon::now()->subMonths($i);
                $revenue = Payment::whereNotNull('total')
                    ->whereMonth('created_at', $month->month)
                    ->whereYear('created_at', $month->year)
                    ->sum('total') ?? 0;
                
                $monthlyRevenueData[] = [
                    'month' => $month->format('M Y'),
                    'revenue' => (float) $revenue
                ];
            }

            // AI-powered three-month revenue forecast using simple exponential smoothing
            $revenues = array_column($monthlyRevenueData, 'revenue');
            $threeMonthForecast = [];
            
            if (count($revenues) >= 1) {
                $alpha = 0.3; // Smoothing factor
                $forecast = $revenues[0];
                for ($i = 1; $i < count($revenues); $i++) {
                    $forecast = $alpha * $revenues[$i] + (1 - $alpha) * $forecast;
                }
                for ($i = 1; $i <= 3; $i++) {
                    $forecast = $alpha * end($revenues) + (1 - $alpha) * $forecast;
                    $threeMonthForecast[] = [
                        'month' => Carbon::now()->addMonths($i)->format('M Y'),
                        'revenue' => round($forecast > 0 ? $forecast : 0, 2)
                    ];
                }
            } else {
                for ($i = 1; $i <= 3; $i++) {
                    $threeMonthForecast[] = [
                        'month' => Carbon::now()->addMonths($i)->format('M Y'),
                        'revenue' => 0
                    ];
                }
            }

            // Log forecast data for debugging
            Log::info('Revenue Forecast', ['threeMonthForecast' => $threeMonthForecast]);

            // Daily orders for last 7 days
            $dailyOrdersData = [];
            for ($i = 6; $i >= 0; $i--) {
                $date = Carbon::now()->subDays($i);
                $orders = Payment::whereDate('created_at', $date->toDateString())->count();
                $dailyOrdersData[] = [
                    'date' => $date->format('M j'),
                    'orders' => $orders
                ];
            }

            // Top selling products
            $topProducts = collect();
            if (DB::getSchemaBuilder()->hasTable('orders')) {
                try {
                    $topProducts = DB::table('orders')
                        ->join('products', 'orders.product_id', '=', 'products.id')
                        ->select('products.id', 'products.name', DB::raw('SUM(orders.qty) as total_sold'))
                        ->groupBy('products.id', 'products.name')
                        ->orderByDesc('total_sold')
                        ->limit(5)
                        ->get();
                } catch (\Exception $e) {
                    Log::error('Top Products Error: ' . $e->getMessage());
                    $topProducts = collect();
                }
            }

            // AI-Powered Inventory Forecasting
            $forecastedProducts = [];
            foreach ($topProducts as $product) {
                $monthlySales = [];
                for ($i = 5; $i >= 0; $i--) {
                    $month = Carbon::now()->subMonths($i);
                    $sales = Order::where('product_id', $product->id)
                        ->whereMonth('created_at', $month->month)
                        ->whereYear('created_at', $month->year)
                        ->sum('qty') ?? 0;
                    $monthlySales[] = (float) $sales;
                }

                $forecasts = [];
                if (count($monthlySales) >= 1) {
                    $alpha = 0.3;
                    $forecast = $monthlySales[0];
                    for ($j = 1; $j < count($monthlySales); $j++) {
                        $forecast = $alpha * $monthlySales[$j] + (1 - $alpha) * $forecast;
                    }
                    for ($k = 1; $k <= 3; $k++) {
                        $forecast = $alpha * end($monthlySales) + (1 - $alpha) * $forecast;
                        $forecasts[] = round($forecast > 0 ? $forecast : 0);
                    }
                } else {
                    $forecasts = [0, 0, 0];
                }

                $forecastedProducts[] = (object) [
                    'name' => $product->name,
                    'forecasts' => $forecasts
                ];
            }

            // Top customers by spending
            $topCustomers = collect();
            try {
                $topCustomers = DB::table('payments')
                    ->join('customers', 'payments.customer_id', '=', 'customers.id')
                    ->select('customers.id', DB::raw("CONCAT(customers.fname, ' ', COALESCE(customers.lname, '')) as name"), DB::raw('SUM(payments.total) as total_spent'))
                    ->whereNotNull('payments.total')
                    ->groupBy('customers.id', 'customers.fname', 'customers.lname')
                    ->orderByDesc('total_spent')
                    ->limit(5)
                    ->get();
            } catch (\Exception $e) {
                Log::error('Top Customers Error: ' . $e->getMessage());
                $topCustomers = collect();
            }

            // AI-Powered Customer Spending Forecast
            $forecastedCustomers = [];
            foreach ($topCustomers as $customer) {
                $monthlySpending = [];
                for ($i = 5; $i >= 0; $i--) {
                    $month = Carbon::now()->subMonths($i);
                    $spending = Payment::where('customer_id', $customer->id)
                        ->whereNotNull('total')
                        ->whereMonth('created_at', $month->month)
                        ->whereYear('created_at', $month->year)
                        ->sum('total') ?? 0;
                    $monthlySpending[] = (float) $spending;
                }

                $forecasts = [];
                if (count($monthlySpending) >= 1) {
                    $alpha = 0.3;
                    $forecast = $monthlySpending[0];
                    for ($j = 1; $j < count($monthlySpending); $j++) {
                        $forecast = $alpha * $monthlySpending[$j] + (1 - $alpha) * $forecast;
                    }
                    for ($k = 1; $k <= 3; $k++) {
                        $forecast = $alpha * end($monthlySpending) + (1 - $alpha) * $forecast;
                        $forecasts[] = round($forecast > 0 ? $forecast : 0, 2);
                    }
                } else {
                    $forecasts = [0, 0, 0];
                }

                $forecastedCustomers[] = (object) [
                    'name' => $customer->name,
                    'forecasts' => $forecasts
                ];
            }

            // Risk Detection: Flag suspicious orders
            $suspiciousOrders = collect();
            $averageTotal = Payment::whereNotNull('total')->avg('total') ?? 0;
            $suspiciousThreshold = $averageTotal * 3;
            $newCustomerThreshold = Carbon::now()->subDays(7);

            try {
                $suspiciousOrders = Payment::with('customer')
                    ->where(function ($q) use ($suspiciousThreshold, $newCustomerThreshold) {
                        $q->where('total', '>', $suspiciousThreshold)
                          ->orWhere(function ($q) use ($suspiciousThreshold, $newCustomerThreshold) {
                              $q->where('total', '>', $suspiciousThreshold / 3)
                                ->whereHas('customer', function ($q) use ($newCustomerThreshold) {
                                    $q->where('created_at', '>', $newCustomerThreshold);
                                });
                          });
                    })
                    ->orderBy('created_at', 'desc')
                    ->limit(5)
                    ->get();
            } catch (\Exception $e) {
                Log::error('Suspicious Orders Error: ' . $e->getMessage());
                $suspiciousOrders = collect();
            }

            // Recent orders
            $recentOrders = collect();
            try {
                $recentOrders = Payment::with(['customer'])
                    ->orderBy('created_at', 'desc')
                    ->limit(5)
                    ->get();
            } catch (\Exception $e) {
                Log::error('Recent Orders Error: ' . $e->getMessage());
                $recentOrders = Payment::orderBy('created_at', 'desc')->limit(5)->get();
            }

            // Payment status distribution
            $paymentStatusData = collect([
                (object)['status' => 'Completed', 'count' => $paymentCount],
                (object)['status' => 'Pending', 'count' => 0],
                (object)['status' => 'Failed', 'count' => 0]
            ]);

            if (DB::getSchemaBuilder()->hasTable('payment_statuses')) {
                try {
                    $paymentStatusData = Payment::select('payment_statuses.status_name as status', DB::raw('COUNT(payments.id) as count'))
                        ->leftJoin('payment_statuses', 'payments.payment_status_id', '=', 'payment_statuses.id')
                        ->whereNotNull('payments.payment_status_id')
                        ->groupBy('payment_statuses.status_name')
                        ->get();
                    
                    // Log the raw payment status data
                    Log::info('Payment Status Data', [
                        'paymentStatusData' => $paymentStatusData->toArray(),
                        'paymentStatusCount' => $paymentStatusData->count()
                    ]);

                    // If no data, revert to fallback
                    if ($paymentStatusData->isEmpty()) {
                        $paymentStatusData = collect([
                            (object)['status' => 'Completed', 'count' => $paymentCount],
                            (object)['status' => 'Pending', 'count' => 0],
                            (object)['status' => 'Failed', 'count' => 0]
                        ]);
                        Log::warning('Payment Status Data Empty, Using Fallback');
                    }
                } catch (\Exception $e) {
                    Log::error('Payment Status Error: ' . $e->getMessage());
                }
            } else {
                Log::warning('Payment Statuses Table Missing, Using Fallback');
            }

            // Customer growth (last 6 months)
            $customerGrowthData = [];
            for ($i = 5; $i >= 0; $i--) {
                $month = Carbon::now()->subMonths($i);
                $customers = Customer::whereMonth('created_at', $month->month)
                    ->whereYear('created_at', $month->year)
                    ->count();
                
                $customerGrowthData[] = [
                    'month' => $month->format('M Y'),
                    'customers' => $customers
                ];
            }

            // Recent customers
            $recentCustomers = Customer::orderBy('created_at', 'desc')
                ->limit(5)
                ->get();

            // Debug data for troubleshooting
            $debugData = [
                'hasPaymentsTable' => DB::getSchemaBuilder()->hasTable('payments'),
                'hasOrdersTable' => DB::getSchemaBuilder()->hasTable('orders'),
                'hasCustomersTable' => DB::getSchemaBuilder()->hasTable('customers'),
                'hasPaymentStatusesTable' => DB::getSchemaBuilder()->hasTable('payment_statuses'),
                'paymentColumns' => DB::getSchemaBuilder()->hasTable('payments') ? DB::getSchemaBuilder()->getColumnListing('payments') : [],
                'paymentStatusColumns' => DB::getSchemaBuilder()->hasTable('payment_statuses') ? DB::getSchemaBuilder()->getColumnListing('payment_statuses') : [],
                'monthlyRevenueData' => $monthlyRevenueData,
                'threeMonthForecast' => $threeMonthForecast,
                'repeatCustomerCount' => $repeatCustomerCount,
                'paymentStatusData' => $paymentStatusData->toArray()
            ];

            return view('admin.dashboard', compact(
                'productCount', 
                'productFeatureCount', 
                'productImageCount', 
                'customerCount', 
                'paymentCount',
                'totalRevenue',
                'todayRevenue',
                'lastMonthRevenue',
                'averageOrderValue',
                'repeatCustomerCount',
                'monthlyRevenueData',
                'threeMonthForecast',
                'dailyOrdersData',
                'topProducts',
                'forecastedProducts',
                'topCustomers',
                'forecastedCustomers',
                'recentOrders',
                'paymentStatusData',
                'customerGrowthData',
                'recentCustomers',
                'suspiciousOrders',
                'debugData'
            ));

        } catch (\Exception $e) {
            Log::error('DashboardController Critical Error: ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
            return view('admin.dashboard', [
                'productCount' => 0,
                'productFeatureCount' => 0,
                'productImageCount' => 0,
                'customerCount' => 0,
                'paymentCount' => 0,
                'totalRevenue' => 0,
                'todayRevenue' => 0,
                'lastMonthRevenue' => 0,
                'averageOrderValue' => 0,
                'repeatCustomerCount' => 0,
                'monthlyRevenueData' => [],
                'threeMonthForecast' => [],
                'dailyOrdersData' => [],
                'topProducts' => collect(),
                'forecastedProducts' => [],
                'topCustomers' => collect(),
                'forecastedCustomers' => [],
                'recentOrders' => collect(),
                'paymentStatusData' => collect([
                    (object)['status' => 'Completed', 'count' => 0],
                    (object)['status' => 'Pending', 'count' => 0],
                    (object)['status' => 'Failed', 'count' => 0]
                ]),
                'customerGrowthData' => [],
                'recentCustomers' => collect(),
                'suspiciousOrders' => collect(),
                'debugData' => ['error' => $e->getMessage()]
            ]);
        }
    }
}