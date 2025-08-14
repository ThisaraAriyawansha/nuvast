<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
    <style>
        /* Resetting Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f7f8fa;
            color: #4a4a4a;
            line-height: 1.6;
        }

        /* Container for email content */
        .email-container {
            width: 100%;
            max-width: 620px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }

        /* Header Section */
        .email-header {
            background-color: #3b5d50; /* Dark Blue */
            color: white;
            padding: 40px 20px;
            text-align: center;
        }

        .email-header h1 {
            font-size: 26px;
            font-weight: 700;
        }

        /* Body Section */
        .email-body {
            padding: 30px 20px;
        }

        .email-body p {
            font-size: 16px;
            color: #6c757d;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .email-body .highlight {
            font-weight: bold;
            color: #3b5d50;
        }

        .cta-button {
            display: inline-block;
            padding: 12px 30px;
            font-size: 16px;
            color: white;
            background-color: #3b5d50;
            text-decoration: none;
            border-radius: 4px;
            text-align: center;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #1c342bff;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f1f1f1;
            color: #3b5d50;
            font-weight: bold;
        }

        td {
            background-color: #f9f9f9;
        }

        .total-amount {
            font-size: 18px;
            font-weight: 600;
            color: #3b5d50;
            text-align: right;
            margin-top: 20px;
        }

        /* Additional Info Section */
        .additional-info {
            background-color: #f9f9f9;
            padding: 20px;
            border-left: 4px solid #3b5d50;
            margin-top: 30px;
        }

        .additional-info h3 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #3b5d50;
        }

        .additional-info p {
            font-size: 14px;
            color: #555;
            margin-bottom: 15px;
        }

        /* Footer Section */
        .email-footer {
            background-color: #f4f4f9;
            padding: 20px;
            text-align: center;
            color: #999;
            font-size: 14px;
        }

        /* Responsive Design */
        @media only screen and (max-width: 600px) {
            .email-header h1 {
                font-size: 22px;
            }

            .email-body p {
                font-size: 14px;
            }

            .cta-button {
                padding: 10px 25px;
                font-size: 14px;
            }

            .additional-info h3 {
                font-size: 16px;
            }

            .additional-info p {
                font-size: 12px;
            }

            /* Table responsive */
            table {
                font-size: 14px;
            }

            th, td {
                padding: 10px;
            }

            .total-amount {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

<div class="email-container">
    <!-- Header Section -->
    <div class="email-header">
        <h1>Order Confirmation</h1>
    </div>

    <!-- Body Section -->
    <div class="email-body">
        <p>Dear {{ $customer->fname }} {{ $customer->lname }},</p>
        <p>Thank you for your order with <strong>NUVAST Furnitures</strong>. Here are the details of your recent purchase:</p>
        
        <!-- Order Details Table -->
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orderDetails as $item)
                    <tr>
                        <td>{{ $item['product_name'] }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>Rs.{{ number_format($item['price'], 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <p class="total-amount"><strong>Total Amount:</strong> Rs.{{ number_format($totalAmount, 2) }}</p>

        <p>We are excited to deliver your furniture and hope it transforms your space beautifully!</p>
        <p>If you have any questions or need assistance, feel free to <a href="mailto:nuvastfurnitures@gmail.com" style="color: #000000; text-decoration: none;">contact our support team</a> anytime.</p>

        <!-- Call to Action Button -->
        <a href="https://nuvastfurnitures.com/" class="cta-button" 
           style="display:inline-block; padding: 10px 20px; background-color:#3b5d50; color:white; text-decoration:none; border-radius:5px; margin-top:10px;">
           Visit Our Website
        </a>
    </div>

    <!-- Additional Info Section -->
    <div class="additional-info">
        <h3>Next Steps</h3>
        <p><strong>Order Processing:</strong> Your order is being prepared with care. You will receive a shipping update soon.</p>
        <p><strong>Explore Our Collection:</strong> Browse our latest sofas, beds, tables, and storage solutions at <a href="https://nuvastfurnitures.com/" style="color: #3b5d50; text-decoration: none;">NUVAST Furnitures</a>.</p>
        <p><strong>Need Help?</strong> Our dedicated support team is available for any questions. <a href="mailto:nuvastfurnitures@gmail.com" style="color: #3b5d50; text-decoration: none;">Contact Support</a></p>
    </div>

    <!-- Footer Section -->
    <div class="email-footer">
        <p>&copy; 2025 All Rights Reserved | NUVAST Furnitures</p>
    </div>
</div>


</body>
</html>
