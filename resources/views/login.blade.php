
<!-- start HTML codes -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- links of design -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminlte.min.css') }}" rel="stylesheet">
  </head>
  <!-- start body -->
  <body class="hold-transition login-page">
    <!-- start login codes -->
    <div class="login-box">
      <!-- start card header -->
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="#" class="h1"><b>Login</b>Form</a>
        </div>
        <!-- start card body -->
        <div class="card-body">
          <p class="login-box-msg">Enter your Email With password</p>
          <!-- start form -->
          <form  method="POST">
            <!-- Email input -->
            <div class="input-group mb-3">
              <input type="email" name="email" class="form-control" placeholder="Email">
              <!-- errors of email -->
              <span class='text-danger'></span>
              <br>
              <!-- error if info be false -->
              <span class='text-danger'></span>
              <!-- email icon -->
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <!-- password input -->
            <div class="input-group mb-3">
              <input type="password" name="password" class="form-control" placeholder="Password">
              <!-- errors of password -->
              <span class='text-danger'></span>
              <span class='text-danger'></span>
              <!-- lock icon -->
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <!-- button for sending info -->
            <div class="text-center mb-3">
              <button type="submit" name="sab_btn" class="btn btn-danger ">Login</button>
              <a href="sign_in.php" class="btn btn-primary">Sign in</a>
              <br>
              <a href="forgot_password.php">I forgot my password</a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- java codes -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
  </body>
</html>
