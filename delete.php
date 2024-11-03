<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('dbconnection.php');
    $id=$_GET['id']??"";//null coalescing operator introduced in php 7 because when the data update then it becomes null from search
    $query = "delete from buy where product_id = '$id'";
    $row = mysqli_query($con,$query);
    if ($row) {
      echo "<script>alert('Data deleted')
      window.location.href = 'view.php';
      </script>";
    }
    else
    {
        echo "<script>Data not deleted</script>";
    }
    ?>
</body>
</html>