<?php
include('dbconnection.php');

if (isset($_POST['submitBtn'])) {
    $name = $_POST['name'];
    $detail = $_POST['detail'];
    $price = $_POST['price'];

    // Insert data into database
    $query = "INSERT INTO buy (product_image, product_name, product_detail, product_price) VALUES ('$destfile','$name', '$detail', $price)";
    $run = mysqli_query($con, $query);

    if ($run) {
        echo "<script>alert('Data inserted successfully.'); window.location.href = 'view.php'; </script>";
    } else {
        echo "<script>alert('Error inserting data.');</script>";
    }
} else {
    echo "<script>alert('Error uploading image file.');</script>";
}
?>