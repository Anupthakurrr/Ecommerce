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
    .delete-btn {
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

    /* Button Icons */
    .edit-btn i,
    .delete-btn i {
        margin-right: 5px;
    }
    .search-form {
        max-width: 400px;
        margin-left: 170px;
        margin-top: 20px;
        /* text-align: center; */
        display: flex;
        flex-direction: column;
    }

    .search-form .form-group {
        margin-bottom: 10px;
    }

    /* .search-form .btn-group {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    } */

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

    <?php
    include('dbconnection.php');
    $query = "select * from buy";
    if(isset($_GET['searchbtn']))
    {
        $query = "select * from buy where product_id =".$_GET['search'];
    }
    $rows = mysqli_query($con, $query);
    $totalRows = mysqli_num_rows($rows);

    if ($totalRows != 0) {
    ?>
   <div class="search-form">
        <form action="" method="get">
            <div class="form-group">
                <input type="number" id="search" class="form-control" name="search" placeholder="Search By Id" required>
            </div>
            <button type="submit" class="btn btn-primary" name="searchbtn">Search</button>
            <a href="view.php" class="btn btn-danger">Reset</a>
        </form>
    </div> <table border="2px" align="center">
        <tr>
            <th colspan="6">PRODUCT TABLE</th>
        </tr>
        <tr>
            <th>PRODUCT_ID</th>
            <th>PRODUCT_NAME</th>
            <th>PRODUCT_DETAIL</th>
            <th>PRODUCT_PRICE</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        <?php
            while ($data = mysqli_fetch_assoc($rows)) {
                echo "<tr>
                <td>" . $data['product_id'] . "</td>
                <td>" . $data['product_name'] . "</td>
                <td>" . $data['product_detail'] . "</td>
                <td>" . $data['product_price'] . "</td>
                <td class='button-col'><a href='update.php?id=$data[product_id]' class='edit-btn' title='Edit'><i class='bi bi-pencil'></i>EDIT</a></td>
                <td class='button-col'><a href='delete.php?id=$data[product_id]' onclick='return confirmation()'class='delete-btn' title='Delete'><i class='bi bi-trash'></i>DELETE</a></td>
               
                </tr>";
            }
            ?>
    </table>
    <?php
    } else {
        echo "<p style='text-align:center; margin-top: 20px;'>No Rows found!!</p>";
    }
    ?>
    </table>
    <script>
    function confirmation() {
        return confirm('Are you sure to delete data ??');
    }
    </script>
</body>

</html>