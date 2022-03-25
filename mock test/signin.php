<?php 

    session_start();
    include("include/connection.php");
    include("include/header.php");

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
   
  <section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="image/logo.png" class="mt-1 mb-5 pb-1" style="width: 185px;" alt="logo">
                </div>

                <form method="POST">
                  <p>Please login to your account</p>

                  <div class="form-outline mb-4">
                    <input type="text" class="form-control" name="username" placeholder="Username"/>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" name="password" class="form-control" placeholder="Password"/>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary mx-3 px-5" type="submit" name="sign_in">Sign in</button>
                    <a class="text-muted" href="forgot.php">Forgot password?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <a href="signup.php" type="button" class="btn btn-outline-danger">Sign Up</a>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center bg-dark">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
  
</body>
</html>


<?php 

    if(isset($_POST['sign_in'])){
        
        $username = mysqli_real_escape_string($con,$_POST['username']);
        
        $pass = mysqli_real_escape_string($con,$_POST['password']);
        
        $get_user = "SELECT * FROM `user` WHERE username='$username' and password='$pass'";
        
        $run_user = mysqli_query($con,$get_user);

        $count = mysqli_num_rows($run_user);
        
        if($count>0)
        {
            
            $_SESSION['USER']=$username;
            
            echo "<script type='text/javascript'> alert('login successfully'); 
                        window.location.href='dashboard.php';
                  </script>";
                
            
        }
        else
        {
            
            echo "<script>alert('Username or Password is Wrong !')</script>";
            
        }
        
        
    }

?>