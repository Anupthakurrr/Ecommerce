<?php
include('dbconnection.php');

// Check if delete action is requested
if(isset($_GET['action']) && $_GET['action'] == 'delete') {
    // Check if id is provided and not empty
    if(isset($_GET['order_number']) && !empty($_GET['order_number'])) {
        $id = $_GET['order_number'];
        // Delete the order record
        $query = "DELETE FROM orders WHERE order_number = '$id'";
        $result = mysqli_query($con, $query);
        
        if($result) {
            echo "<script>alert('Order data deleted successfully');</script>";
        } else {
            echo "<script>alert('Failed to delete order data');</script>";
        }
    } else {
        echo "<script>alert('Invalid request');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Admin Panel</title>
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="st.css">
    <style>
        table {
            width: 78%;
            margin: 20px auto;
            border-collapse: separate;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
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
        }

        /* Edit Button Styles */
        .edit-btn {
            color: #ffffff;
            background-color: #5cb85c;
            border-color: #4cae4c;
        }

        /* Delete Button Styles */
        .delete-btn {
            color: #ffffff;
            background-color: #d9534f;
            border-color: #d43f3a;
        }

        /* Insert Button Styles */
        .insert-btn {
            color: #ffffff;
            background-color: #337ab7;
            border-color: #2e6da4;
        }

        /* Button Icons */
        .edit-btn i,
        .delete-btn i,
        .insert-btn i {
            margin-right: 5px;
        }

        .search-form {
            max-width: 400px;
            margin-left: 170px;
            margin-top: 20px;
            display: flex;
            flex-direction: column;
        }

        .search-form .form-group {
            margin-bottom: 10px;
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
    $query = "SELECT * FROM orders";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        ?>
        <table border="2px" align="center">
            <tr>
                <th colspan="7">ORDER TABLE</th>
            </tr>
            <tr>
                <th>ORDER_NUMBER</th>
                <th>CUSTOMER_NAME</th>
                <th>PRODUCT_NAME</th>
                <th>QUANTITY</th>
                <th>ORDER_DATE</th>
                <th>STATUS</th>
                <th>ACTION</th>
            </tr>
            <?php
            while ($data = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>" . $data['order_number'] . "</td>
                        <td>" . $data['customer_name'] . "</td>
                        <td>" . $data['product_name'] . "</td>
                        <td>" . $data['quantity'] . "</td>
                        <td>" . $data['order_date'] . "</td>
                        <td>" . $data['status'] . "</td>
                        <td class='button-col'>
                            <a href='order_update.php?order_number=" . $data['order_number'] . "' class='edit-btn' title='Edit'><i class='bi bi-pencil'></i>EDIT</a>
                            <a href='view_orders.php?action=delete&order_number=" . $data['order_number'] . "' onclick='return confirmation()' class='delete-btn' title='Delete'><i class='bi bi-trash'></i>DELETE</a>
                            <a href='insert_order.php?action=insert' class='insert-btn' title='Insert Order'><i class='bi bi-plus'></i>INSERT</a>
                        </td>
                    </tr>";
            }
            ?>
        </table>
    <?php
    } else {
        echo "<p style='text-align:center; margin-top: 20px;'>No Rows found!!</p>";
    }
    ?>

    <script>
        function confirmation() {
            return confirm('Are you sure to delete data ??');
        }
    </script>
   
</body>

</html>
