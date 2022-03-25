<?php 

    session_start();
    include("../include/connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mock Test Admin Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/custom.css" rel="stylesheet">
</head>
<body>
   <section>
       <div class="container ">
                <div class="card w-50 mx-auto rounded-5 mt-5 text-black" style="background-color: #eee;">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="../image/logo.png" class="mt-1 mb-5 pb-1" alt="logo">
                        </div>
                        <div class="text-danger font-weight-bold text-uppercase">
                        </div>
                        <form method="POST">
                          <p>Please login to your account</p>

                          <div class="form-outline mb-4">
                            <input type="text" class="form-control" name="username" placeholder="Username" required />
                          </div>

                          <div class="form-outline mb-4">
                            <input type="password" id="form2Example22" class="form-control" name="password" placeholder="Password" required />
                          </div>

                          <div class="text-center pt-1 pb-1">
                            <button type="submit" class="btn btn-lg btn-primary btn-block" name="admin_login">
                                Sign In
                            </button>
                          </div>
                          <div class="text-center pt-1 mb-5 pb-1">
                            <a class="text-muted" href="forgot.php">Forgot password?</a>
                          </div>
                        </form>
                    </div>
                </div>
            
       </div>
   </section>
  
</body>
</html>


<?php 

    if(isset($_POST['admin_login']))
    {
        
        $admin_username = mysqli_real_escape_string($con,$_POST['username']);
        
        $admin_pass = mysqli_real_escape_string($con,$_POST['password']);
        
        $get_admin = "SELECT * FROM `admin` WHERE username='$admin_username' and password='$admin_pass'";
        
        $run_admin = mysqli_query($con,$get_admin);

        $count = mysqli_num_rows($run_admin);
        
        if($count>0)
        {
            
            $_SESSION['ADMIN']=$admin_username;
            
            echo "<script type='text/javascript'> alert('login successfully'); 
                        window.location.href='dashboard.php';
                  </script>";
                
            
        }
        else
        {
            
            echo "<script>alert('Email or Password is Wrong !')</script>";
            
        }

    }

?>