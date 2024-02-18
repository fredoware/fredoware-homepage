<?php
session_start();
include_once($ROOT_DIR . "config/database.php");
include_once($ROOT_DIR . "config/Models.php");
;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Menu Book</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=$ROOT_DIR;?>mb-templates/source/img/favicon.png" rel="icon">
  <link href="<?=$ROOT_DIR;?>mb-templates/source/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=$ROOT_DIR;?>mb-templates/source/bootstrap.min.css" rel="stylesheet">
  <link href="<?=$ROOT_DIR;?>mb-templates/source/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=$ROOT_DIR;?>mb-templates/source/aos.css" rel="stylesheet">
  <link href="<?=$ROOT_DIR;?>mb-templates/source/glightbox.min.css" rel="stylesheet">
  <link href="<?=$ROOT_DIR;?>mb-templates/source/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=$ROOT_DIR;?>mb-templates/source/main.css" rel="stylesheet">
  <link href="<?=$ROOT_DIR;?>mb-templates/custom.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Updated: Jan 30 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
