<?php
include 'dbconnection.php';

// Initialize variables
$admin_id = '';
$adminname = '';
$email = '';
$password = '';
$profile_picture = '';
$gender = '';
$date_of_birth = '';
$address = '';
$city = '';
$country = '';
$postal_code = '';
$phone_number = '';
$registration_date = '';
$title = '';
$linkedin_profile = '';
$summary = '';

// Fetch admin profile data from the database
$sql = "SELECT * FROM admin WHERE admin_id = 1"; // Change 1 to the actual admin ID
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $admin_id = $row['admin_id'];
    $adminname = $row['adminname'];
    $email = $row['email'];
    $password = $row['password'];
    $profile_picture = $row['profile_picture'];
    $gender = $row['gender'];
    $date_of_birth = $row['date_of_birth'];
    $address = $row['address'];
    $city = $row['city'];
    $country = $row['country'];
    $postal_code = $row['postal_code'];
    $phone_number = $row['phone_number'];
    $registration_date = $row['registration_date'];
    $title = $row['title'];
    $linkedin_profile = $row['linkedin_profile'];
    $summary = $row['summary'];
}

// Handle form submission for profile picture upload
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["profile_image"])) {
    // Handle file upload
    $profile_image = $_FILES["profile_image"];
    // Process the uploaded image - save it, update database, etc.
}

// Handle form submission for profile information update
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_profile"])) {
    // Handle form submission for updating profile information
    // Collect form data and update the database
}

// Handle form submission for deleting the admin profile
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_profile"])) {
    // Handle deletion of admin profile (write appropriate SQL query and execute it)
    // Redirect to login page or any other appropriate action after deletion
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Profile</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Your custom CSS -->
    <link rel="stylesheet" href="st.css">
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
    <a href="profile.php">Profile</a>
    <a href="logout.php">Logout</a>
</nav>

<div class="container">
    <header>
        <h1>Admin Panel Profile</h1>
    </header>
    <section class="profile">
        <div class="profile-image">
            <img src="<?php echo $profile_picture; ?>" alt="Profile Image" id="profile-image" class="img-thumbnail">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                <input type="file" accept="image/*" name="profile_image" id="profile-image-upload">
                <input type="submit" value="Upload Image" name="submit" class="btn btn-primary mt-2">
            </form>
        </div>
        <div class="profile-details">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label for="adminname">Admin Name:</label>
                    <input type="text" class="form-control" id="adminname" name="adminname" value="<?php echo $adminname; ?>">
                </div>
                <!-- Add more fields for other admin information -->

                <input type="submit" name="update_profile" value="Update Profile" class="btn btn-primary">
            </form>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input type="hidden" name="delete_profile" value="1"> <!-- Hidden input for deletion confirmation -->
                <input type="submit" value="Delete Profile" class="btn btn-danger mt-3">
            </form>
        </div>
    </section>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>