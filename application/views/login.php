<!doctype html>
<html lang="en">
<head>
  <title>Login 03</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="assets/css/stylex.css">

</head>
<body>
  <section class="ftco-section">
    <div class="container">
      <div class="w3-panel w3-blue w3-display-container">
        <?php echo $this->session->flashdata('msg');?>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
          <h2 class="heading-section text-danger">MY-ATKULL</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
          <div class="login-wrap p-4 p-md-5">
            <div class="d-flex">
              <div class="w-100">
                <h3 class="mb-4">Sign In</h3>
              </div>
            </div>
            <form method="POST" action="<?php echo site_url('login/autentikasi');?>" class="login-form">
              <div class="form-group">
                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                <input type="email" name="email" class="form-control rounded-left" placeholder="Username" required>
              </div>
              <div class="form-group">
                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                <input name="pass" type="password" class="form-control rounded-left" placeholder="Password" required>
              </div>
              <div class="form-group d-flex align-items-center">
                <div class="w-100">
                  <label class="checkbox-wrap checkbox-primary mb-0">Save Password
                    <input type="checkbox" checked>
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="w-100 d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary rounded submit">Login</button>
                </div>
              </div>
              <div class="form-group mt-4">
                <div class="w-100 text-center">
                  <p class="mb-1">Don't have an account? <a href="#">Sign Up</a></p>
                  <p><a href="#">Forgot Password</a></p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>
