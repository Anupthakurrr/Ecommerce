<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Order</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="st.css"> 
    <script src="jquery-3.7.1.min.js"></script>
    <script src="jquery.validate.js"></script>
    <style>
        .form {
            margin: 20px auto;
            padding: 25px;
            max-width: 400px;
            background: rgba(249, 233, 233, 0.45);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(9px);
            -webkit-backdrop-filter: blur(9px);
            border: 1px solid rgba(249, 233, 233, 0.26);
        }
        .error {
            color: red;
        }
        .c1 {
            border: 2px solid red;
        }
        .c2 {
            border: 2px solid rgb(19, 230, 100);
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
    <a href="user.php">View Users</a>
    <a href="view_orders.php">Orders</a>
    <!-- <a href="profile.php">Profile</a> -->
    <a href="logout.php">Logout</a>
</nav>

<?php
include('dbconnection.php');

$id = $_GET['order_number'] ?? "";
$query = "SELECT * FROM orders WHERE order_number = '$id'";
$row = mysqli_query($con, $query);
$data = mysqli_fetch_array($row);
?>

<div class="form container-fluid">
    <h2>Update Order</h2>
    <form action="" method="post" id="form1">
        <input type="hidden" name="id" value="<?php echo $data['order_number']; ?>">
        <!-- <label for="order_number" class="form-label">Order Number</label>
        <input type="text" name="order_number" id="order_number" class="form-control" value="<?php echo $data['order_number']; ?>"><br><br>
         -->
        <label for="customer_name" class="form-label">Customer Name</label>
        <input type="text" name="customer_name" id="customer_name" class="form-control" value="<?php echo $data['customer_name']; ?>"><br><br>
        
        <label for="product_name" class="form-label">Product Name</label>
        <input type="text" name="product_name" id="product_name" class="form-control" value="<?php echo $data['product_name']; ?>"><br><br>

        <label for="quantity" class="form-label">Quantity</label>
        <input type="number" name="quantity" id="quantity" class="form-control" value="<?php echo $data['quantity']; ?>"><br><br>
        
        <label for="order_date" class="form-label">Order Date</label>
        <input type="date" name="order_date" id="order_date" class="form-control" value="<?php echo $data['order_date']; ?>"><br><br>

        <label for="status" class="form-label">Status</label>
        <select name="status" id="status" class="form-control">
            <option value="">Select Status</option>
            <option value="Shipped" <?php echo ($data['status'] == 'Shipped') ? 'selected' : ''; ?>>Shipped</option>
            <option value="Delivered" <?php echo ($data['status'] == 'Delivered') ? 'selected' : ''; ?>>Delivered</option>
            <option value="Pending" <?php echo ($data['status'] == 'Pending') ? 'selected' : ''; ?>>Pending</option>
            <option value="Cancelled" <?php echo ($data['status'] == 'Cancelled') ? 'selected' : ''; ?>>Cancelled</option>
        </select><br><br>
        
        <input type="submit" value="UPDATE" name="updateBtn" class="btn-block btn btn-danger">
    </form>
</div>

<?php
if(isset($_POST['updateBtn'])) {
    $order_number = $_POST['order_number'];
    $customer_name = $_POST['customer_name'];
    $product_name = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    $order_date = $_POST['order_date'];
    $status = $_POST['status'];
    
    $query = "UPDATE orders SET order_number = '$order_number', customer_name = '$customer_name', product_name = '$product_name', quantity = '$quantity', order_date = '$order_date', status = '$status' WHERE order_number = '$id'";
    // ...
        $run = mysqli_query($con, $query);
    
    if($run) {
        echo "<script>alert('Order data updated!!!')</script>";
    } else {
        echo "<script>alert('Failed to update order data!!!')</script>";
    }
}
?>

<script>
$(document).ready(function() {
    $('#form1').validate({
        rules: {
            customer_name: {
                required: true,
                minlength: 3,
                // Define a custom rule to disallow digits
                noDigits: true
            },
            product_name: {
                required: true,
                minlength: 3,
                // Define a custom rule to disallow digits
                noDigits: true
            },
            quantity: {
                required: true,
                digits: true
            },
            order_date: {
                required: true
            },
            status: {
                required: true
            }
        },
        messages: {
            customer_name: {
                required: "Customer Name is mandatory",
                minlength: "At least enter 3 characters"
            },
            product_name: {
                required: "Product Name is mandatory",
                minlength: "At least enter 3 characters"
            },
            quantity: {
                required: "Quantity is mandatory",
                digits: "Enter digits only"
            },
            order_date: {
                required: "Order Date is mandatory"
            },
            status: {
                required: "Status is mandatory. Please select one option."
            }
        }
    });

    // Add a custom validation method to disallow digits
    $.validator.addMethod("noDigits", function(value, element) {
        return !/\d/.test(value);
    }, "Digits are not allowed");
});
</script>

</body>
</html>
