<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
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
    <a href="user.php">Users</a>
    <a href="view_orders.php">Orders</a>
    <a href="profile.php">Profile</a>
    <a href="logout.php">Logout</a>
</nav>

<?php
include('dbconnection.php');

$id = $_GET['id'] ?? "";
$query = "SELECT * FROM registration_user WHERE id = '$id'";
$row = mysqli_query($con, $query);
$data = mysqli_fetch_array($row);
?>

<div class="form container-fluid">
    <h2>Update User</h2>
    <form action="" method="post" id="form1">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <label for="fullname" class="form-label">Full Name</label>
        <input type="text" name="fullname" id="fullname" class="form-control" value="<?php echo $data['fullname']; ?>"><br><br>
        
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="<?php echo $data['email']; ?>"><br><br>
        
        <label for="gender" class="form-label">Gender</label>
        <select name="gender" id="gender" class="form-control">
            <option value="">Select Gender</option>
            <option value="Male" <?php echo ($data['gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
            <option value="Female" <?php echo ($data['gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
            <option value="Other" <?php echo ($data['gender'] == 'Other') ? 'selected' : ''; ?>>Other</option>
        </select><br><br>

        <label for="mobile" class="form-label">Mobile</label>
        <input type="text" name="mobile" id="mobile" class="form-control" value="<?php echo $data['mobile']; ?>"><br><br>
        
        <input type="submit" value="UPDATE" name="updateBtn" class="btn-block btn btn-danger">
    </form>
</div>

<?php
if(isset($_POST['updateBtn'])) {
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    
    $query = "UPDATE registration_user SET fullname = '$fullname', email = '$email', gender = '$gender', mobile = '$mobile' WHERE id = '$id'";
    $run = mysqli_query($con, $query);
    
    if($run) {
        echo "<script>alert('Data updated!!!')</script>";
    } else {
        echo "<script>alert('Data Not updated!!!')</script>";
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
                minlength: "At least enter 3 characters",
                noDigits: "Digits are not allowed"
            },
            product_name: {
                required: "Product Name is mandatory",
                minlength: "At least enter 3 characters",
                noDigits: "Digits are not allowed"
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
        return this.optional(element) || !/\d/.test(value);
    }, "Digits are not allowed");
});
</script>
</body>
</html>
