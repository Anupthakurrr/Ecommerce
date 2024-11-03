<?php
include('dbconnection.php');

if (isset($_POST['submitBtn'])) {
    // Handle form submission
    $customer_name = $_POST['customer_name'];
    $product_name = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    $order_date = $_POST['order_date'];
    $status = $_POST['status'];

    // Insert data into orders table
    $query = "INSERT INTO orders (customer_name, product_name, quantity, order_date, status) 
              VALUES ('$customer_name', '$product_name', '$quantity', '$order_date', '$status')";
    $run = mysqli_query($con, $query);

    if ($run) {
        echo "<script>alert('Order data inserted successfully.'); window.location.href = 'view_orders.php'; </script>";
    } else {
        echo "<script>alert('Error inserting order data.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Admin Panel - Insert Order</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="st.css">
    <script src="jquery-3.7.1.min.js"></script>
    <script src="jquery.validate.js"></script>
    <script>
        $(document).ready(function() {
            // Extend jQuery Validate with a custom method for letters only
            $.validator.addMethod("lettersonly", function(value, element) {
                return this.optional(element) || /^[a-zA-Z\s]*$/.test(value);
            }, "Only letters are allowed");

            // Initialize jQuery Validate for form validation
            $('#orderForm').validate({
                rules: {
                    customer_name: {
                        required: true,
                        minlength: 3,
                        lettersonly: true // Apply letters only rule to customer_name field
                    },
                    product_name: {
                        required: true,
                        minlength: 3,
                        lettersonly: true // Apply letters only rule to customer_name field
                   
                    },
                    quantity: {
                        required: true,
                        digits: true
                    },
                    order_date: {
                        required: true,
                    },
                    status: {
                        required: true
                    }
                },
                messages: {
                    customer_name: {
                        required: "Customer name is mandatory",
                        minlength: "At least enter 3 characters"
                    },
                    product_name: {
                        required: "Product name is mandatory",
                        minlength: "At least enter 3 characters"

                    },
                    quantity: {
                        required: "Quantity is mandatory",
                        digits: "Only enter digits"
                    },
                    order_date: {
                        required: "Order date is mandatory",
                    },
                    status: {
                        required: "Status is mandatory"
                    }
                }
            });
        });
    </script>

    <style>
        /* Retain existing styles */
        .form {
            margin: 20px auto;
            margin-top: 40px;
            padding: 25px;
            max-width: 400px;
            background: rgba(249, 233, 233, 0.45);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(9px);
            -webkit-backdrop-filter: blur(9px);
            border: 1px solid rgba(249, 233, 233, 0.26);
        }

        h1 {
            text-align: center;
        }

        .error {
            color: red;
        }

        /* Adjustments for order table */
        table {
            width: 78%;
            margin: 20px auto;
            border-collapse: separate;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            background: rgba(249, 233, 233, 0.45);
            border-radius: 16px;
        }

        th,
        td {
            padding: 15px;
            text-align: center;
            border: 1px solid #00bfff;
        }

        th {
            background-color: #0080ff;
            color: aqua;
        }

        tr:nth-child(even) {
            background-color: #00bfff;
        }

        tr:hover {
            background-color: black;
        }

        .button-col {
            display: flex;
            justify-content: space-around;
        }

        .edit-btn,
        .delete-btn,
        .insert-btn {
            display: inline-block;
            padding: 6px 12px;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
            margin-right: 5px;
            color: #ffffff;
        }

        /* Edit Button Styles */
        .edit-btn {
            background-color: #5cb85c;
            border-color: #4cae4c;
        }

        /* Delete Button Styles */
        .delete-btn {
            background-color: #d9534f;
            border-color: #d43f3a;
        }

        /* Insert Button Styles */
        .insert-btn {
            background-color: #0080ff;
            border-color: #007bff;
        }

        /* Button Icons */
        .edit-btn i,
        .delete-btn i,
        .insert-btn i {
            margin-right: 5px;
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
        <a href="profile.php">profile</a>
        <a href="logout.php">Logout</a>
    </nav>

    <div class="form">
        <h1>Insert Order</h1>
        <form id="orderForm" action="" method="post">
            <div>
                <label for="customer_name" class="form-label">Customer Name</label>
                <input type="text" name="customer_name" id="customer_name" class="form-control" required><br><br>
            </div>
            <div>
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" name="product_name" id="product_name" class="form-control" required><br><br>
            </div>
            <div>
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" name="quantity" id="quantity" class="form-control" required><br><br>
            </div>
            <div>
                <label for="order_date" class="form-label">Order Date</label>
                <input type="date" name="order_date" id="order_date" class="form-control" required><br><br>
            </div>
            <div>
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="">Select Status</option>
                    <option value="Pending">Pending</option>
                    <option value="Processing">Processing</option>
                    <option value="Completed">Completed</option>
                </select><br><br>
            </div>
            <input type="submit" value="INSERT" name="submitBtn" class="btn btn-info btn-block">
        </form>
    </div>

    <?php
    // Your PHP code for displaying order table goes here
    ?>

    <script>
        function confirmation() {
            return confirm('Are you sure to delete data ??');
        }
    </script>
</body>

</html>
