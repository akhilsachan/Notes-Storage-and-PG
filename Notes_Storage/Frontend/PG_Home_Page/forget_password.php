<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/pg_home_page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3a6c5aa7b1.js" crossorigin="anonymous"></script>
    <title>Forget Password</title>
</head>

<body>
    <!-- navbar_html -->
  <nav class="navbar navbar-expand-lg navbar-dark nav_padding" id="top_nav_color">
    <div class="container-fluid">
      <a class="navbar-brand" href="pg_home_page.html" id="nav_password_generator">
        <img src="../../Logo/pg_logo.png" alt="text" id="nav_img" class="d-inline-block align-text-top">
        <span class="nav_password">Password Generator</span>
      </a>
      <button class="navbar-toggler btn .navbar-toggle .icon-bar" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon .navbar-toggle .icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse nav_vault" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav_item nav_items switchToggle">
            <input type="checkbox" id="switch">
            <label for="switch">Dark Mode</label>
          </li>
          <li class="nav-item nav_items">
            <a class="nav-link active" aria-current="page" href="#">Vault</a>
          </li>
          <li class="nav-item nav_items">
            <a class="nav-link active nav_items" aria-current="page" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a href="../../pg_page.php" data-bs-target="#login" data-bs-toggle="modal"><button type="button"
                class="btn btn-warning yellow_button" id="loginbtn1">LOGIN</button></a>
            <a href="../../pg_page.php" data-bs-target="#login" data-bs-toggle="modal"><button type="button"
                class="btn btn-warning yellow_button" id="signupbtn1">SIGN UP</button></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Navbar HTML -->

    <!-- Forget Password  -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-sm-4 col-md-4 p-4"></div>
            <div class="col-lg-4 col-sm-4 col-md-4 p-4 forget_password">
                <h3 class="text-center"><i class="fas fa-unlock-alt lock_icon"></i></h3>
                <h2 class="text-center">Forgot Password</h2>
                <p class="text-center">You can reset your password here.</p>
                <div class="panel-body">
                    <form id="register-form" role="form" autocomplete="off" class="form" method="post">
                        <div class="form-group">
                            <div class="input-group">
                                <input id="forget_e-mail" name="email" placeholder="Enter Your Email"
                                    class="form-control" type="email">
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password"
                                type="submit" id="reset_password">
                        </div>
                        <input type="hidden" class="hide" name="token" id="token" value="">
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-4 p-4"></div>
            </div>
        </div>

        <!-- Forget Password  -->

        

</body>

</html>