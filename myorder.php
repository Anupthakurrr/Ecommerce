<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ecommerce web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/font-awesome.min.css">
    <style>
        .cart{
            position: relative;
            margin-left: 20px;
            margin-top: 25px;
        }
        .dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
    text-align: center; /* Center-align text */
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown-content a {
    color: black;
    padding: 8px 0;
    display: block;
}

.dropdown-content a:hover {
    background-color: #ddd;
}
.cart-icon {
    font-size: 60px; /* Adjust size as needed */
    position: absolute;
    top: 20;
    right: 35px; /* Adjust as needed */
    cursor: pointer;
}
/* CSS for profile picture */
.profile-pic {
    width: 40px; /* Adjust size as needed */
    height: 40px; /* Adjust size as needed */
    border-radius: 50%;
    margin-top: 15px; /* Adjust vertical position */
    margin-right: 20px; /* Adjust horizontal position */
    cursor: pointer;
}


table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 2px solid #333; /* Darker border */
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5; /* Hover effect */
        }
        .action-buttons button {
            margin-right: 5px;
        }    </style>
</head>
<body>
    <div class="header">
    <div class="container">
    <div class="Navbar">
        <div class="logo">
        <img src="mainlogo.png" width="150px" height="80px">
        </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="userhome.php">Home</a></li>
                    <li><a href="productprocess.php">Products</a></li>
                    <li><a href="productabout.php">About</a></li>
                    <li><a href="productcontact.php">Contact</a></li>
                </ul>
                <div class="dropdown">
                        <img src="profile-default-png.png" alt=""  width="40px" height="40px">
                        <!-- <button >Dropdown</button> -->
                            <div class="dropdown-content">
                                <a href="my-profile.php">My Profile</a>
                                <a href="myorder.php">My Orders</a>
                                <a href="logout.php">logout</a>
                            </div>
                    </div>
            </nav>
            <div class="cart-icon cart">
                <ion-icon name="cart-outline"></ion-icon>
            </div>
        </div>
        
    </div>
</div>
<div class="container">
        <h2>My Orders</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Date</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dummy data -->
                <tr>
                    <td>1</td>
                    <td>2024-03-24</td>
                    <td>$50.00</td>
                    <td>Processing</td>
                    <td class="action-buttons">
                        <button class="btn btn-primary">View Details</button>
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2024-03-23</td>
                    <td>$65.00</td>
                    <td>Shipped</td>
                    <td class="action-buttons">
                        <button class="btn btn-primary">View Details</button>
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>2024-03-22</td>
                    <td>$40.00</td>
                    <td>Delivered</td>
                    <td class="action-buttons">
                        <button class="btn btn-primary">View Details</button>
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>2024-03-21</td>
                    <td>$80.00</td>
                    <td>Processing</td>
                    <td class="action-buttons">
                        <button class="btn btn-primary">View Details</button>
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>2024-03-20</td>
                    <td>$55.00</td>
                    <td>Cancelled</td>
                    <td class="action-buttons">
                        <button class="btn btn-primary">View Details</button>
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div></body>
</html>
