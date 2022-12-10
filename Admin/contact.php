<?php include("inc/function.php"); 
session_start();
include "inc/db.php";
if (isset($_SESSION['admin'])) {?>
<html>
<!doctype html>
<html lang="en" dir="ltr">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $_SESSION["username"]; ?> | Edit Contact | KDS</title>
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="dist/css/style.css" rel="stylesheet">
    <link href="dist/css/pages/dashboard1.css" rel="stylesheet">
</head>

<body>
<body>
    <div class="main-wrapper" id="main-wrapper">
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Kdscosmos</p>
            </div>
        </div>
        <?php include("inc/nav.php") ?>
  <?php include("inc/sidenav.php") ?>
        <div class="page-wrapper">
            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Home Page Management</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="index.php" class="breadcrumb">Home</a>
                        <a href="homepg.php" class="breadcrumb">Home Page Mangement</a>
                    </div>
                </div>
            </div>
<div class="container-fluid">
<h3>Contact Us</h3>
     <p>Hi, There, You would have to Edit all of them to edit it.</p>
     <?php contact(); ?>
        
</div>
<?php 
}else header("Location:login.php");
?>
       <?php include("inc/set.php"); ?>
        <div class="chat-windows "></div>
    </div>
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
    <script src="assets/extra-libs/Datatables/datatables.min.js"></script>
    <script src="dist/js/pages/datatable/datatable-basic.init.js"></script>
</body>

</html>
    

