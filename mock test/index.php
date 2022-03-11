<!DOCTYPE html>
<html lang="en">

<head>
  <title>Mock Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
</head>

<body>

  <div class="">
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="javascript:void(0)">Mock Test</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="  collapse navbar-collapse mx-5  " id="mynavbar">
          <ul class="navbar-nav me-auto ">
            <li class="nav-item ">
              <a class="nav-link px-5 fw-bold" href="javascript:void(0)">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link px-5 fw-bold" href="javascript:void(0)">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-5 fw-bold" href="javascript:void(0)">Contact</a>
            </li>
          </ul>
          <form class="d-flex">
            <button class="btn btn-warning px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#signin" type="button">Sign in</button>
            <button class="btn btn-dark mx-2 px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#signup" type="button">Sign up</button>
          </form>
        </div>
      </div>
    </nav>

      <!-- Sign-In Modal start-->
      <div class="modal fade" id="signin" tabindex="-1" aria-labelledby="signin" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="signin">Sign In</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <fieldset class="form-group">
                  <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                          First radio
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                          Second radio
                        </label>
                      </div>
                      <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                        <label class="form-check-label" for="gridRadios3">
                          Third disabled radio
                        </label>
                      </div>
                    </div>
                  </div>
                </fieldset>
                <div class="form-group row">
                  <div class="col-sm-2">Checkbox</div>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Example checkbox
                      </label>
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Sign in</button>
              </div>
            </div>
            </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Sign-In Modal end-->

      <!-- Sign-In Modal start-->
      <div class="modal fade" id="signup" tabindex="-1" aria-labelledby="signup" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="signup">Sign Up</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Sign Up</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Sign-Up Modal end-->


    <div class="container-fluid img">
      
        <img width="100%" src="images/img2.jpg" alt="Gate Mock Test">
      
      <h3>Gate Exams Details</h3>
      <p>You can also include forms inside the navigation bar.</p>
    </div>
  </div>
  
</body>

</html>