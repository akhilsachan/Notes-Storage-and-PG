<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/vault.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/3a6c5aa7b1.js" crossorigin="anonymous"></script>
  <title>Storage</title>
</head>

<body>
  <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
    <ul class="nav flex-column text-white w-100 sidebar_text">
      <p class="nav-link h3 sidebar_heading my-2">
        NOTES STORAGE
      </p>
      <a href="">
        <li href="#" class="nav-link">
          <i class="fas fa-home"></i>
          <span class="mx-2">Home</span>
        </li>
      </a>
      <a href="" data-bs-target="#get_password" data-bs-toggle="modal">
        <li href="#" class="nav-link">
          <i class="fas fa-key"></i>
          <span class="mx-2">Get Password</span>
        </li>
      </a>
      <a href="" data-bs-target="#vault_add_note" data-bs-toggle="modal">
        <li href="#" class="nav-link">
          <i class="fas fa-plus"></i>
          <span class="mx-2">Add New Note</span>
        </li>
      </a>
      <a href="" data-bs-target="#vault_todo" data-bs-toggle="modal">
        <li href="#" class="nav-link">
          <i class="fas fa-tasks"></i>
          <span class="mx-2">Todo List</span>
        </li>
      </a>
      <a href="" data-bs-target="#vault_profile" data-bs-toggle="modal">
        <li href="#" class="nav-link">
          <i class="fas fa-user-tie"></i>
          <span class="mx-2">My Profile</span>
        </li>
      </a>
      <a href="" data-bs-target="#vault_sidebar_logout" data-bs-toggle="modal">
        <li href="#" class="nav-link">
          <i class="fas fa-sign-out-alt"></i>
          <span class="mx-2">Logout</span>
        </li>
      </a>
    </ul>

    <span href="#" class="nav-link h4 w-100 mb-4">
      <a href="https://www.linkedin.com/in/akhil-sachan-07/" target="_blank"><i class="icon1 mx-2 fab fa-linkedin-in"></i></a>
      <a href="https://www.instagram.com/akhilsacs/" target="_blank"><i class="icon2 mx-2 fab fa-instagram"></i></a>
      <a href="https://www.linkedin.com/in/akhil-sachan-07/" target="_blank"><i class="icon3 mx-2 fab fa-twitter"></i></a>
      <a href="https://www.linkedin.com/in/akhil-sachan-07/" target="_blank"><i class="icon4 mx-2 far fa-address-card"></i></a>
    </span>
  </div>

  <!-- Content Area -->
  <div class="my-container active-cont">
    <!-- Top Nav. header -->
    <nav class="navbar top-navbar navbar-light header">
      <a class="btn border-5" id="menu-btn"><i class="menu_hambar fas fa-bars"></i></a>
      <button type="button" data-bs-target="#vault_sidebar_logout" data-bs-toggle="modal" class="mx-2 logoutbtn btn btn-danger">LOGOUT</button>
    </nav>