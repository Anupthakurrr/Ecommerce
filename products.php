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
            // Extend jQuery Validate with a custom method for letters only
            $.validator.addMethod("lettersonly", function(value, element) {
                return this.optional(element) || /^[a-zA-Z\s]*$/.test(value);
            }, "Only letters are allowed");

            // Initialize jQuery Validate for form validation
            $('#form1').validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 3,
                        lettersonly: true // Apply letters only rule to name field
                    },
                    price: {
                        required: true,
                        digits: true
                    },
                    detail: {
                        required: true,
                        minlength: 3,
                        maxlength: 50,
                        lettersonly: true // Apply letters only rule to detail field
                    }
                },
                messages: {
                   name: {
                        required: "Name is mandatory",
                        minlength: "At least enter 3 characters"
                    },
                    price: {
                        required: "Price is mandatory",
                        digits: "Only enter digits"
                    },
                    detail: {
                        required: "Detail is mandatory",
                        minlength: "At least enter 3 characters",
                        maxlength: "Enter words less than 50"
                    }
                }
            });
        });
    </script>

    <style>
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
            /* Fixed the border width unit */
        }

      .c2 {
            border: 2px solid rgb(19, 230, 100);
            /* Fixed the border width unit */
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
        <h1>Insert Product</h1>
        <form id="form1" action="insert.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="name" class="form-label">Product Name</label>
                <input type="text" name="name" id="name" class="form-control" required><br><br>
            </div>
            <div>
                <label for="price" class="form-label">Product Price</label>
                <input type="number" name="price" id="price" class="form-control" required><br><br>
            </div>
            <div>
                <label for="detail" class="form-label">Product Detail</label>
                <input type="text" name="detail" id="detail" class="form-control" required><br><br>
            </div>
            <input type="submit" value="INSERT" name="submitBtn" class="btn btn-info btn-block">
        </form>
    </div>
</body>

</html>