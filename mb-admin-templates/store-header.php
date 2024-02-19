<?php
session_start();
include_once($ROOT_DIR . "config/database.php");
include_once($ROOT_DIR . "config/Models.php");
$role = $_SESSION["user_session"]["role"];
$storeId = $_GET["Id"];
$store = store()->get("Id=$storeId");
?>

<html lang="en">
  <head>
  	<title><?=$store->name?>'s Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="../mb-admin-templates/style.css">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
<div class="row" style="height: 100%">


  <div class="col-3">

    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark nav-right">
    <h5 class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4"><?=$store->name?></span>
    </h5>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li>
        <a href="dashboard.php" class="nav-link text-white">
          <svg class="bi" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Dashboard
        </a>
      </li>

      <?php if ($role=="Admin"): ?>
      <li class="nav-item">
        <a href="user.php?role=Admin" class="nav-link text-white" aria-current="page">
          <svg class="" width="16" height="16"><use xlink:href="#home"></use></svg>
          Category
        </a>
      </li>
      <?php endif; ?>


      <li>
        <a href="store.php" class="nav-link text-white">
          <svg class="bi" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Menu
        </a>
      </li>

      <li>
        <a href="store-qr.php?Id=<?=$storeId?>" class="nav-link text-white">
          <svg class="bi" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          QR Code
        </a>
      </li>



    </ul>
    <hr>
            <div class="log-out">
            <a href="log-in.php" class="d-flex align-items-center text-white text-center text-decoration-none">

              <strong>LOG OUT</strong>
            </a>


  </div>
</div>
</div>
<div class="col-9">
