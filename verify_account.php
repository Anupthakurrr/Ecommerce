<?php
include_once("dbconnection.php"); // Assuming you have a script to establish database connection

if(isset($_GET['em']) && isset($_GET['token'])) {
    $email = $_GET['em'];
    $token = $_GET['token'];

    // Query to check if the email and token combination exists in the database
    $query = "SELECT * FROM registration_user WHERE email = '$email' AND token = '$token'";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0) {
        // If a match is found, update the user's account to mark it as verified
        $update_query = "UPDATE registration_user SET verified = 1 WHERE email = '$email'";
        mysqli_query($con, $update_query);

        echo "Your account has been successfully verified. You can now log in.";
    } else {
        echo "Invalid verification link. Please make sure you entered the correct link.";
    }
} else {
    echo "Invalid verification request.";
}
?>
