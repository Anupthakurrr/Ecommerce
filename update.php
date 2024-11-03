<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="st.css"> 
    <script src="jquery-3.7.1.min.js"></script>
    <script src="jquery.validate.js"></script>
    <script>  
$(document).ready(function() {
    $('#form1').validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
                lettersOnly: true
            },
            price: {
                required: true,
                digits: true
            },
            detail: {
                required: true,
                minlength: 3,
                lettersOnly: true
            }
        },
        messages: {
            name: {
                required: "Product Name is mandatory",
                minlength: "At least enter 3 characters"
            },
            price: {
                required: "Price is mandatory",
                digits: "Only enter digits"
            },
            detail: {
                required: "Product Detail is mandatory",
                minlength: "At least enter 3 characters"
            }
        }
    });

    // Add custom validation method for letters only
    $.validator.addMethod("lettersOnly", function(value, element) {
        return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
    }, "Only letters are allowed");
});
</script>


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
        h2{
            text-align: center;
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
        <!-- <a href="profile.php">Profile</a> -->
        <a href="logout.php">Logout</a>
    </nav>
    
    <?php
    include('dbconnection.php');
    $id=$_GET['id']??"";//null coalescing operator introduced in php 7 because when the data update then it becomes null from search
    $query = "select * from buy where product_id = '$id' ";
    $row = mysqli_query($con,$query);
    $data = mysqli_fetch_array($row);
    ?>
    
    <div class="form container-fluid">
        <h2>Update Product</h2>
        <form action="update.php" method="post" id="form1">
            <input type="hidden" name="id" value="<?php echo $data[0]; ?>">
            <label for="name"  class="form-label">Product Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo $data[1]; ?>"><br><br>
            
            <label for="price"  class="form-label">Product Price</label>
            <input type="text" name="price" id="price" class="form-control" value="<?php echo $data[3]; ?>"><br><br>
            
            <label for="detail"  class="form-label">Product Detail:</label>
            <input type="text" name="detail" id="detail" class="form-control" value="<?php echo $data[2]; ?>"><br><br>
            
            <input type="submit" value="UPDATE" name="updateBtn" class="btn-block btn btn-danger">
        </form>
    </div>
    
    <?php
    if(isset($_POST['updateBtn']))
    {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $detail=$_POST['detail'];
        $price=$_POST['price'];
        $query = "update buy set product_name = '$name',product_detail = '$detail',product_price = '$price' where product_id = '$id'";
        $run = mysqli_query($con,$query);
        if($run)
        {
            echo "<script>alert('Data updated!!!')</script>";
            echo "<script>window.location.href = 'view.php';</script>";
        }
        else
        {
            echo "<font color='Red'>Data Not updated!!!</font>";
        }
    }
    ?>
</body>
</html>
