
<!-- start HTML codes -->
<!DOCTYPE html>
<html lang="en">
  <!-- links  -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register form</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link href="{{ asset('fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminlte.min.css') }}" rel="stylesheet">
  </head>
  <!-- start body codes -->
  <body class="hold-transition register-page">
    <!-- register codes -->
    <div class="register-box">
      <!-- logo -->
      <div class="register-logo">
        <a href="#"><b>Sign </b>in</a>
      </div>
      <!-- start card body -->
      <div class="card">
        <div class="card-body register-card-body">
          <p class="login-box-msg">Register your information
            <span class="fas fa-address-card text-primary text-lg"></span>
          </p>
          <!-- start form -->
          <form  method='POST' enctype="multipart/form-data">
            <!-- name input -->
            <div class="input-group mb-3">
              <input type="text" name="namee" class="form-control " id="exampleInputPassword1" placeholder="Full name">
              <div class="input-group-append">
                <!-- user icon -->
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
              <!-- error -->
              <span class='text-danger'></span>
            </div>
            <!-- Last name input -->
            <div class="input-group mb-3">
              <input type="text" name="last_name"   class="form-control"   id="exampleInputPassword1" placeholder="Enter your Last Name">
              <div class="input-group-append">
                <!-- user icon -->
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
                <!-- error -->
                <span class='text-danger'></span>
              </div>
            </div>
            <!-- Phone input -->
            <div class="input-group mb-3">
              <input type="text" name="phone" minlenght="10" class="form-control" placeholder="Phone">
              <div class="input-group-append">
                <!-- phone icon -->
                <div class="input-group-text">
                  <span class="fas fa-phone"></span>
                </div>
              </div>
              <!-- error -->
              <span class='text-danger'></span>
            </div>
            <!-- email input -->
            <div class="input-group mb-3">
              <input  type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="mkmkk@gmail.com">
              <div class="input-group-append">
                <!-- email icon -->
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
              <!-- error -->
              <span class='text-danger'></span>
            </div>
            <!-- password input -->
            <div class="input-group mb-3">
              <input type="password" name="password"  class="form-control" id="exampleInputPassword1"  placeholder="password by Numbers and letters">
              <div class="input-group-append">
                <!-- password icon -->
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
              <!-- error -->
              <span class='text-danger'></span>
            </div>
            <!-- Address input -->
            <div class="input-group mb-3">
              <input type="text" name="address" class="form-control" placeholder="Your address">
              <div class="input-group-append">
                <!-- address icon -->
                <div class="input-group-text">
                  <span class="fas fa-home"></span>
                </div>
              </div>
              <!-- error -->
              <span class='text-danger'></span>
            </div>
            <!-- Photo input -->
            <div class="input-group mb-3">
              <input type="file" name="photo"  class="form-control" id="exampleInputEmail1" placeholder="Insert your Photo">
              <div class="input-group-append">
                <!-- img icon -->
                <div class="input-group-text">
                  <span class="fas fa-image"></span>
                </div>
              </div>
              <!-- errors -->
              <span class='text-danger'></span>
              <span class='text-danger'></span>
            </div>
            <!-- card user input -->
            <div class="input-group mb-3">
              <input type="text" name="card_user" class="form-control" placeholder="Your Card Address">
              <div class="input-group-append">
                <!-- address icon -->
                <div class="input-group-text">
                  <span class="fas fa-ad"></span>
                </div>
              </div>
              <!-- error -->
              <span class='text-danger'></span>
            </div>
            <!-- register button -->
            <div class="row">
              <div class="col-12">
                <button type="submit" name='sub_btn' class="btn btn-primary btn-block">Register</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
   <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
  </body>
</html>
