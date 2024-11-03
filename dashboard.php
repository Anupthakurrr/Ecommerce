<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Admin Panel</title>

    <!-- Include Chart.js -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="st.css">


    <style>
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #2c3e50; /* Darker background color for the admin panel */
            color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        .container:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            transform: scale(1.02);
        }

        .dashboard-section {
            margin-top: 20px;
            padding: 20px;
            background-color: #34495e;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .chart-container {
            max-width: 600px;
            margin: 20px 0;
        }

        .dashboard-section ul {
            list-style-type: none;
            padding: 0;
        }

        .dashboard-section li {
            padding: 10px;
            margin: 5px 0;
            background-color: #47525E;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.1);
        }

        /* Responsive adjustments */
        @media only screen and (max-width: 768px) {
            .container {
                padding: 10px;
            }
            .dashboard-section {
                padding: 10px;
                margin-top: 10px;
            }
            .chart-container {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
<header class="py-3">
     <img src="mainlogo.png" alt="" srcset="" height="90px">

    </header>

    <nav>
        <a href="dashboard.php">Dashboard</a>
        <a href="products.php">Products</a>
        <a href="view.php">View</a>
        <a href="user.php">Users</a>
        <a href="view_orders.php">Orders</a>
        <!-- <a href="profile.php">profile</a> -->
        <a href="logout.php">Logout</a>
    </nav>

    <div class="container">
        <!-- Your content goes here -->
        <h2>Welcome to the Admin Panel</h2>

        <div class="dashboard-section">
            <h3>Sales Overview</h3>
            <ul>
                <li>Total Revenue: $150,000</li>
                <li>Number of Orders: 500</li>
                <li>Average Order Value: $300</li>
            </ul>
        </div>

        <div class="dashboard-section">
            <h3>Product Performance</h3>
            <ul>
                <li>Top Selling Products: Product A, Product B</li>
                <li>Low-Stock Products: Product C, Product D</li>
                <li>Product Categories: Electronics, Clothing, Books</li>
            </ul>
        </div>

        <div class="dashboard-section">
            <h3>Customer Insights</h3>
            <ul>
                <li>New Customers: 150</li>
                <li>Returning Customers: 350</li>
                <li>Customer Lifetime Value (CLV): $500</li>
            </ul>
        </div>

        <div class="dashboard-section">
            <h3>Order Status</h3>
            <ul>
                <li>Pending Orders: 20</li>
                <li>Completed Orders: 480</li>
            </ul>
        </div>

        <div class="dashboard-section">
            <h3>Sales Trends</h3>
            <div class="chart-container">
                <!-- Chart.js Line Chart for Monthly Sales -->
                <canvas id="monthlySalesChart"></canvas>
                <script>
                    // Sample data for demonstration
                    var ctx = document.getElementById('monthlySalesChart').getContext('2d');
                    var monthlySalesChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                            datasets: [{
                                label: 'Monthly Sales',
                                data: [10000, 12000, 9000, 11000, 13000, 10000],
                                borderColor: '#3498db',
                                borderWidth: 2,
                                fill: false
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                </script>
            </div>
        </div>
    </div>

    <!-- ... (Footer and closing tags remain unchanged) ... -->
</body>
</html>
