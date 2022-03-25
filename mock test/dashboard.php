<?php 
	session_start ();
    include('include/connection.php');
    if(!isset($_SESSION['USER']))
    {
        echo "<script>window.open('index.php','_self')</script>";
    }
    else
    {
    	
    	$username=$_SESSION['USER'];
		
		include("include/header_login.php");
?>

<div class="container my-2">
	<h3 class="text-center">Welcome , <?php echo $username; ?></h3>
</div>
<?php
include("include/footer.php");
}
?>