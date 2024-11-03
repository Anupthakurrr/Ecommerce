<?php
    include('dbconnection.php');

    // Check if delete action is requested
    if(isset($_GET['action']) && $_GET['action'] == 'delete') {
        // Check if id is provided and not empty
        if(isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id'];
            
            // Delete the user record
            $query = "DELETE FROM registration_user WHERE id = '$id'";
            $result = mysqli_query($con, $query);
            
            if($result) {
                echo "<script>alert('User data deleted successfully');</script>";
            } else {
                echo "<script>alert('Failed to delete user data');</script>";
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
        .insert-btn { /* Added insert-btn class */
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
            background-color: #0080ff;
            border-color: #007bff;
        }

        /* Button Icons */
        .edit-btn i,
        .delete-btn i,
        .insert-btn i { /* Added insert-btn class */
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
        <a href="user.php">Users</a> <!-- Corrected link -->
        <a href="view_orders.php">Orders</a>
        <!-- <a href="profile.php">Profile</a> -->
        <a href="logout.php">Logout</a>
    </nav>

    <?php
    include('dbconnection.php');
    $query = "SELECT * FROM registration_user";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        ?>
        <table border="2px" align="center">
            <tr>
                <th colspan="7">USER TABLE</th> <!-- Increased colspan by 1 for the new action -->
            </tr>
            <tr>
                <th>USER_ID</th>
                <th>FULLNAME</th>
                <th>EMAIL</th>
                <th>GENDER</th>
                <th>MOBILE</th>
                <th>ACTION</th>
            </tr>
            <?php
            while ($data = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>" . $data['id'] . "</td>
                        <td>" . $data['fullname'] . "</td>
                        <td>" . $data['email'] . "</td>
                        <td>" . $data['gender'] . "</td>
                        <td>" . $data['mobile'] . "</td>
                        <td class='button-col'>
                            <a href='user_update.php?id=" . $data['id'] . "' class='edit-btn' title='Edit'><i class='bi bi-pencil'></i>EDIT</a>
                            <a href='user.php?action=delete&id=" . $data['id'] . "' onclick='return confirmation()' class='delete-btn' title='Delete'><i class='bi bi-trash'></i>DELETE</a>
                            <a href='insert_user.php' class='insert-btn' title='Insert'><i class='bi bi-plus'></i>INSERT</a> <!-- Insert button -->
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
