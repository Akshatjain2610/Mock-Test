<?php 
    session_start ();
    include('../include/connection.php');
    if(!isset($_SESSION['ADMIN']))
    {
        echo "<script>window.open('index.php','_self')</script>";
    }
    else{

?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mock Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
</head>
<body>

</body>
<?php } ?>