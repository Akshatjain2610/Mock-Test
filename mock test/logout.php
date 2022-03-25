<?php
session_start();
unset($_SESSION['USER']);
echo "<script type='text/javascript'> alert('Logout successfully'); 
      window.location.href='index.php';
      </script>";
distroy();
?>