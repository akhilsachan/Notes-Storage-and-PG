<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/pg_home_page.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/3a6c5aa7b1.js" crossorigin="anonymous"></script>
  <title>Password Generator</title>
</head>

<body>
  <!-- navbar_html -->
  <nav class="navbar navbar-expand-lg navbar-dark nav_padding" id="top_nav_color">
    <div class="container-fluid">
      <a class="navbar-brand" href="pg_home_page.html" id="nav_password_generator">
        <img src="Logo/pg_logo.png" alt="text" id="nav_img" class="d-inline-block align-text-top">
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
            <a class="nav-link active" aria-current="page" href="#" data-bs-target="#login" data-bs-toggle="modal">Notes Storage</a>
          </li>
          <li class="nav-item nav_items">
            <a class="nav-link active nav_items" aria-current="page" href="PORTFOLIO LINK">About Me</a>
          </li>
          <li class="nav-item">
            <a href="#" data-bs-target="#login" data-bs-toggle="modal"><button type="button"
                class="btn btn-warning yellow_button" id="loginbtn1">LOGIN</button></a>
            <a href="#" data-bs-target="#login" data-bs-toggle="modal"><button type="button"
                class="btn btn-warning yellow_button" id="signupbtn1">SIGN UP</button></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- navbar_html -->