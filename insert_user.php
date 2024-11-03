<?php
include('dbconnection.php');

if (isset($_POST['submitBtn'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];

    // Insert data into user table
    $query = "INSERT INTO registration_user (fullname, email, gender, mobile) VALUES ('$fullname', '$email', '$gender', '$mobile')";
    $run = mysqli_query($con, $query);

    if ($run) {
        echo "<script>alert('User data inserted successfully.'); window.location.href = 'user.php'; </script>";
    } else {
        echo "<script>alert('Error inserting user data.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Admin Panel</title>
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
            $('#form1').validate({
                rules: {
                    fullname: {
                        required: true,
                        minlength: 3,
                        lettersonly: true // Apply letters only rule to fullname field
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    gender: {
                        required: true
                    },
                    mobile: {
                        required: true,
                        digits: true
                    }
                },
                messages: {
                    fullname: {
                        required: "Fullname is mandatory",
                        minlength: "At least enter 3 characters"
                    },
                    email: {
                        required: "Email is mandatory",
                        email: "Enter a valid email address"
                    },
                    gender: {
                        required: "Gender is mandatory"
                    },
                    mobile: {
                        required: "Mobile is mandatory",
                        digits: "Only enter digits"
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

        .c1 {
            border: 2px solid red;
        }

        .c2 {
            border: 2px solid rgb(19, 230, 100);
        }

        /* Adjustments for user table */
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
        <!-- <a href="profile.php">profile</a> -->
        <a href="logout.php">Logout</a>
    </nav>

    <div class="form">
        <h1>Insert User</h1>
        <form id="form1" action="insert_user.php" method="post">
            <div>
                <label for="fullname" class="form-label">Customer Name</label>
                <input type="text" name="fullname" id="fullname" class="form-control" required><br><br>
            </div>
            <div>
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required><br><br>
            </div>
            <div>
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select><br><br>
            </div>
            <div>
                <label for="mobile" class="form-label">Mobile</label>
                <input type="tel" name="mobile" id="mobile" class="form-control" required><br><br>
            </div>
            <input type="submit" value="INSERT" name="submitBtn" class="btn btn-info btn-block">
        </form>
    </div>

    <?php
    // Your PHP code for displaying user table goes here
    ?>

    <script>
        function confirmation() {
            return confirm('Are you sure to delete data ??');
        }
    </script>
</body>

</html>
