<?php
session_start();
include "inc/db.php";
if (isset($_SESSION['teacher'])) {   ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>  <?php echo $_SESSION['teacher']; ?>  | KDS </title>
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="dist/css/style.css" rel="stylesheet">
    <!-- This page CSS -->
    <link href="dist/css/pages/dashboard1.css" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper" id="main-wrapper">
    <?php include("inc/nav.php") ?> 
    
    <?php include("inc/sidenav.php"); ?>
        <div class="page-wrapper">
            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Dashboard</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Dashboard</a>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
        </div>
        <?php include("inc/set.php"); ?>
        <div class="chat-windows "></div>
    </div>
    
                                                                           

    <?php }else{
	header("Location: ../Admin/login.php");
} ?>
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="dist/js/materialize.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="dist/js/app.js"></script>
    <script src="dist/js/app.init.light-sidebar.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/custom.min.js"></script>
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>