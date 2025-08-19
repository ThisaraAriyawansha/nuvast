@include('layouts.header')

<!-- main-content -->
<div class="admin-container">
    <!-- main-content-wrap -->
    <div class="admin-content">
        <div class="admin-header">
            <h3 class="admin-title">Admin Dashboard</h3>
            <div class="last-updated">
                Last updated: {{ now()->format('M j, Y g:i A') }}
            </div>
        </div>

        <!-- Debug Section for Troubleshooting -->
        <div class="data-card hidden">
            <h4 class="data-title">Debug Information</h4>
            <pre>{{ json_encode($debugData, JSON_PRETTY_PRINT) }}</pre>
        </div>

        <!-- Stats Grid Container -->
        <div class="stats-grid">
            <!-- Total Revenue Card -->
            <div class="stat-card">
                <div class="stat-icon bg-light">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Total Revenue</div>
                    <h4 class="stat-value">Rs. {{ number_format($totalRevenue, 2) }}</h4>
                </div>
            </div>

            <!-- Today's Revenue -->
            <div class="stat-card">
                <div class="stat-icon bg-light">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Today's Revenue</div>
                    <h4 class="stat-value">Rs. {{ number_format($todayRevenue, 2) }}</h4>
                </div>
            </div>

            <!-- Last Month's Revenue -->
            <div class="stat-card">
                <div class="stat-icon bg-light">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Last Month's Revenue</div>
                    <h4 class="stat-value">Rs. {{ number_format($lastMonthRevenue, 2) }}</h4>
                </div>
            </div>

            <!-- Average Order Value -->
            <div class="stat-card">
                <div class="stat-icon bg-light">
                    <i class="fas fa-handshake"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Average Order Value</div>
                    <h4 class="stat-value">Rs. {{ number_format($averageOrderValue, 2) }}</h4>
                </div>
            </div>

            <!-- Repeat Customers -->
            <div class="stat-card">
                <div class="stat-icon bg-dark">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Repeat Customers</div>
                    <h4 class="stat-value">{{ number_format($repeatCustomerCount) }}</h4>
                </div>
            </div>

            <!-- Total Products -->
            <div class="stat-card">
                <div class="stat-icon bg-light">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Total Products</div>
                    <h4 class="stat-value">{{ number_format($productCount) }}</h4>
                </div>
            </div>

            <!-- Total Customers -->
            <div class="stat-card">
                <div class="stat-icon bg-light">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Total Customers</div>
                    <h4 class="stat-value">{{ number_format($customerCount) }}</h4>
                </div>
            </div>

            <!-- Total Orders -->
            <div class="stat-card">
                <div class="stat-icon bg-dark">
                    <i class="fas fa-credit-card"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Total Orders</div>
                    <h4 class="stat-value">{{ number_format($paymentCount) }}</h4>
                </div>
            </div>

            <!-- Product Features -->
            <div class="stat-card">
                <div class="stat-icon bg-dark">
                    <i class="fas fa-cogs"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Product Features</div>
                    <h4 class="stat-value">{{ number_format($productFeatureCount) }}</h4>
                </div>
            </div>
        </div>

<!-- Charts Row -->
<div class="charts-grid">
    <!-- Revenue Forecast Chart -->
    <div class="data-card chart-card">
        <h4 class="data-title">Revenue Trend & Three-Month Forecast</h4>
        <canvas id="revenueForecastChart" height="150"></canvas>
    </div>

    <!-- Daily Orders Chart -->
    <div class="data-card chart-card">
        <h4 class="data-title">Daily Orders (Last 7 Days)</h4>
        <canvas id="dailyOrdersChart" height="150"></canvas>
    </div>

    <!-- Customer Growth Chart -->
    <div class="data-card chart-card">
        <h4 class="data-title">Customer Growth (Last 6 Months)</h4>
        <canvas id="customerGrowthChart" height="150"></canvas>
    </div>

    <!-- Payment Status Pie Chart -->
    <div class="data-card chart-card">
        <h4 class="data-title">Payment Status Distribution</h4>
        <canvas id="paymentStatusChart" height="150"></canvas>
    </div>
</div>
        <!-- Data Tables Row -->
        <div class="data-grid">
            <!-- Top Products -->
            <div class="data-card">
                <h4 class="data-title">Top Selling Products</h4>
                @if($topProducts && $topProducts->count() > 0)
                    @foreach($topProducts as $product)
                    <div class="data-item">
                        <div class="data-main">{{ Str::limit($product->name, 30) }}</div>
                        <div class="data-badge">
                            {{ $product->total_sold }} sold
                        </div>
                    </div>
                    @endforeach
                @else
                    <p class="data-empty">No sales data available</p>
                @endif
            </div>

            <!-- AI-Powered Inventory Forecast (Next 3 Months) -->
            <div class="data-card">
                <h4 class="data-title">AI-Powered Inventory Forecast (Next 3 Months)</h4>
                @if($forecastedProducts && count($forecastedProducts) > 0)
                    @foreach($forecastedProducts as $product)
                    <div class="data-item">
                        <div class="data-main">{{ Str::limit($product->name, 30) }}</div>
                        <div class="data-badge">
                            {{ implode(', ', $product->forecasts) }} units
                        </div>
                    </div>
                    @endforeach
                @else
                    <p class="data-empty">No forecast data available</p>
                @endif
            </div>

            <!-- Top Customers -->
            <div class="data-card">
                <h4 class="data-title">Top Customers</h4>
                @if($topCustomers && $topCustomers->count() > 0)
                    @foreach($topCustomers as $customer)
                    <div class="data-item">
                        <div class="data-main">{{ Str::limit($customer->name, 30) }}</div>
                        <div class="data-badge">
                            Rs. {{ number_format($customer->total_spent, 2) }}
                        </div>
                    </div>
                    @endforeach
                @else
                    <p class="data-empty">No customer data available</p>
                @endif
            </div>

            <!-- AI-Powered Customer Spending Forecast (Next 3 Months) -->
            <div class="data-card">
                <h4 class="data-title">AI-Powered Customer Spending Forecast (Next 3 Months)</h4>
                @if($forecastedCustomers && count($forecastedCustomers) > 0)
                    @foreach($forecastedCustomers as $customer)
                    <div class="data-item">
                        <div class="data-main">{{ Str::limit($customer->name, 30) }}</div>
                        <div class="data-badge">
                            Rs. {{ implode(', ', array_map(fn($f) => number_format($f, 2), $customer->forecasts)) }}
                        </div>
                    </div>
                    @endforeach
                @else
                    <p class="data-empty">No forecast data available</p>
                @endif
            </div>

            <!-- Recent Orders -->
            <div class="data-card">
                <h4 class="data-title">Recent Orders</h4>
                @if($recentOrders && $recentOrders->count() > 0)
                    @foreach($recentOrders as $order)
                    <div class="data-item">
                        <div class="data-main">
                            {{ $order->customer->fname ?? 'N/A' }} {{ $order->customer->lname ?? '' }}
                        </div>
                        <div class="data-sub">
                            Rs. {{ number_format($order->total ?? 0, 2) }}
                        </div>
                        <div class="data-time">
                            {{ $order->created_at->diffForHumans() }}
                        </div>
                    </div>
                    @endforeach
                @else
                    <p class="data-empty">No recent orders</p>
                @endif
            </div>

            <!-- Suspicious Orders (Risk Detection) -->
            <div class="data-card">
                <h4 class="data-title">Suspicious Orders (Risk Detection)</h4>
                @if($suspiciousOrders && $suspiciousOrders->count() > 0)
                    @foreach($suspiciousOrders as $order)
                    <div class="data-item">
                        <div class="data-main">
                            {{ $order->customer->fname ?? 'N/A' }} {{ $order->customer->lname ?? '' }}
                        </div>
                        <div class="data-sub">
                            Rs. {{ number_format($order->total ?? 0, 2) }}
                        </div>
                        <div class="data-time">
                            {{ $order->created_at->diffForHumans() }}
                        </div>
                    </div>
                    @endforeach
                @else
                    <p class="data-empty">No suspicious orders detected</p>
                @endif
            </div>

            <!-- Recent Customers -->
            <div class="data-card">
                <h4 class="data-title">New Customers</h4>
                @if($recentCustomers && $recentCustomers->count() > 0)
                    @foreach($recentCustomers as $customer)
                    <div class="data-item">
                        <div class="data-avatar">
                            {{ strtoupper(substr($customer->fname ?? 'U', 0, 1)) }}
                        </div>
                        <div>
                            <div class="data-main">
                                {{ $customer->fname ?? 'N/A' }} {{ $customer->lname ?? '' }}
                            </div>
                            <div class="data-time">
                                {{ $customer->created_at->diffForHumans() }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <p class="data-empty">No new customers</p>
                @endif
            </div>
        </div>
    </div>
</div>

<style>
/* Base Styles */
:root {
    --white: #ffffff;
    --black: #000000;
    --gray-50: #f9fafb;
    --gray-100: #f3f4f6;
    --gray-200: #e5e7eb;
    --gray-300: #d1d5db;
    --gray-400: #9ca3af;
    --gray-500: #6b7280;
    --gray-600: #4b5563;
    --gray-700: #374151;
    --gray-800: #1f2937;
    --gray-900: #111827;
}

body {
    background-color: var(--white);
    color: var(--gray-900);
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    margin: 0;
    padding: 0;
    line-height: 1.5;
}

/* Layout Styles */
.admin-container {
    min-height: calc(100vh - 120px);
}

.admin-content {
    max-width: 1400px;
    margin: 0 auto;
}

.admin-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
    flex-wrap: wrap;
    gap: 1rem;
}

.admin-title {
    font-size: 1.75rem;
    font-weight: 700;
    margin: 0;
    color: #3b5d50;
    font-family: 'Inter', sans-serif;
    font-weight: 500;
    letter-spacing: 1px;
}

.last-updated {
    background: var(--white);
    padding: 0.5rem 1rem;
    border-radius: 0.5rem;
    border: 1px solid var(--gray-200);
    font-size: 1.3rem;
    color: var(--gray-600);
}

/* Stats Grid */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.25rem;
    margin-bottom: 2rem;
}

.stat-card {
    background: var(--white);
    border-radius: 0.75rem;
    padding: 1.5rem;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    border: 1px solid var(--gray-200);
    display: flex;
    align-items: center;
    gap: 1rem;
    transition: transform 0.2s, box-shadow 0.2s;
}

.stat-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.stat-icon {
    width: 3rem;
    height: 3rem;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.stat-icon.bg-light {
    background: #3b5d50;
    color: #3b5d50;
}

.stat-icon.bg-dark {
    background: #3b5d50;
    color: var(--white);
}

.stat-icon i {
    font-size: 1.25rem;
}

.stat-content {
    flex: 1;
}

.stat-label {
    font-size: 1.5rem;
    color: var(--gray-600);
    margin-bottom: 0.25rem;
}

.stat-value {
    font-size: 1.5rem;
    font-weight: 700;
    margin: 0;
    color: #3b5d50;
}

/* Data Grid */
.data-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.data-card {
    background: var(--white);
    border-radius: 0.75rem;
    padding: 1.5rem;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    border: 1px solid var(--gray-200);
}

.data-title {
    font-size: 1.9rem;
    font-weight: 600;
    margin-bottom: 1.25rem;
    color: #3b5d50;
    font-family: 'Inter', sans-serif;
    font-weight: 400;
    letter-spacing: 1px;
}

.data-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.75rem 0;
    border-bottom: 1px solid var(--gray-100);
}

.data-item:last-child {
    border-bottom: none;
}

.data-main {
    font-size: 1.5rem;
    color: var(--gray-900);
    font-weight: 500;
}

.data-sub {
    font-size: 1.3rem;
    color: var(--gray-600);
}

.data-time {
    font-size: 1.3rem;
    color: var(--gray-500);
}

.data-badge {
    background: #3b5d50;
    color: var(--white);
    padding: 0.25rem 0.75rem;
    border-radius: 9999px;
    font-size: 1rem;
    font-weight: 600;
}

.data-empty {
    text-align: center;
    color: var(--gray-400);
    font-style: italic;
    padding: 1rem 0;
}

.data-avatar {
    width: 3rem;
    height: 3rem;
    background: #3b5d50;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-weight: 600;
    font-size: 1.9rem;
    flex-shrink: 0;
    margin-right: 0.75rem;
}

pre {
    background: var(--gray-100);
    padding: 1rem;
    border-radius: 0.5rem;
    font-size: 0.9rem;
    overflow-x: auto;
}

/* Responsive Adjustments */
@media (max-width: 1024px) {
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .stats-grid {
        grid-template-columns: 1fr;
    }
    
    .data-grid {
        grid-template-columns: 1fr;
    }
    
    .admin-header {
        flex-direction: column;
        align-items: flex-start;
    }
}

@media (max-width: 480px) {
    .admin-container {
        padding: 0.75rem;
    }
    
    .stat-card {
        flex-direction: column;
        text-align: center;
    }
    
    .stat-icon {
        margin-bottom: 0.75rem;
    }
}


/* Charts Grid */
.charts-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.chart-card {
    background: var(--white);
    border-radius: 0.75rem;
    padding: 1.5rem;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    border: 1px solid var(--gray-200);
    max-height: 300px; /* Constrain chart card height */
}

.chart-card canvas {
    max-height: 150px !important; /* Ensure canvas respects reduced height */
    width: 100% !important; /* Maintain full width */
}

/* Desktop Layout (Two Charts per Row) */
@media (min-width: 1024px) {
    .charts-grid {
        grid-template-columns: repeat(2, 1fr); /* Two columns for charts */
    }
}

/* Responsive Adjustments for Smaller Screens */
@media (max-width: 1023px) {
    .charts-grid {
        grid-template-columns: 1fr; /* Stack charts vertically on smaller screens */
    }
}
</style>

<!-- Chart.js Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    try {
        // Revenue Forecast Chart
        const revenueCtx = document.getElementById('revenueForecastChart').getContext('2d');
        const monthlyRevenueData = @json($monthlyRevenueData);
        const threeMonthForecast = @json($threeMonthForecast);
        
        const revenueLabels = monthlyRevenueData.map(item => item.month);
        const revenues = monthlyRevenueData.map(item => item.revenue);
        
        threeMonthForecast.forEach(forecast => {
            revenueLabels.push(forecast.month);
            revenues.push(forecast.revenue);
        });

        new Chart(revenueCtx, {
            type: 'line',
            data: {
                labels: revenueLabels,
                datasets: [{
                    label: 'Revenue (Rs.)',
                    data: revenues,
                    borderColor: '#3b5d50',
                    backgroundColor: 'rgba(59, 93, 80, 0.2)',
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: revenues.map((_, index) => index >= monthlyRevenueData.length ? '#ff4444' : '#3b5d50'),
                    pointBorderColor: revenues.map((_, index) => index >= monthlyRevenueData.length ? '#ff4444' : '#3b5d50'),
                    pointRadius: revenues.map((_, index) => index >= monthlyRevenueData.length ? 6 : 4),
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                let label = context.dataset.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                if (context.parsed.y !== null) {
                                    label += 'Rs. ' + context.parsed.y.toFixed(2);
                                }
                                if (context.dataIndex >= monthlyRevenueData.length) {
                                    label += ' (Forecast)';
                                }
                                return label;
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Revenue (Rs.)'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Month'
                        }
                    }
                }
            }
        });

        // Daily Orders Chart
        const dailyOrdersData = @json($dailyOrdersData);
        const dailyLabels = dailyOrdersData.map(item => item.date);
        const dailyOrders = dailyOrdersData.map(item => item.orders);

        new Chart(document.getElementById('dailyOrdersChart').getContext('2d'), {
            type: 'line',
            data: {
                labels: dailyLabels,
                datasets: [{
                    label: 'Orders',
                    data: dailyOrders,
                    borderColor: '#3b5d50',
                    backgroundColor: 'rgba(59, 93, 80, 0.2)',
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Number of Orders'
                        }
                    }
                }
            }
        });

        // Customer Growth Chart
        const customerGrowthData = @json($customerGrowthData);
        const growthLabels = customerGrowthData.map(item => item.month);
        const growthCustomers = customerGrowthData.map(item => item.customers);

        new Chart(document.getElementById('customerGrowthChart').getContext('2d'), {
            type: 'bar',
            data: {
                labels: growthLabels,
                datasets: [{
                    label: 'New Customers',
                    data: growthCustomers,
                    backgroundColor: '#3b5d50'
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Number of Customers'
                        }
                    }
                }
            }
        });

        // Payment Status Pie Chart
        const paymentStatusData = @json($paymentStatusData);
        const statusLabels = paymentStatusData.map(item => item.status);
        const statusCounts = paymentStatusData.map(item => item.count);
        const statusColors = ['#3b5d50', '#ffc107', '#ff4444'];

        new Chart(document.getElementById('paymentStatusChart').getContext('2d'), {
            type: 'pie',
            data: {
                labels: statusLabels,
                datasets: [{
                    data: statusCounts,
                    backgroundColor: statusColors
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    }
                }
            }
        });
    } catch (e) {
        console.error('Chart Rendering Error:', e);
    }
});
</script>

@include('layouts.footer')