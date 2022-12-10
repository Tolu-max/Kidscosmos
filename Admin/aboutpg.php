<?php include("inc/function.php"); 
session_start();
if($_SESSION["username"]) {
?>
<html>
<!doctype html>
<html lang="en" dir="ltr">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $_SESSION["username"]; ?> |About Us | KDS</title>
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
            <?php include("inc/nav.php"); ?>
        <?php include("inc/sidenav.php"); ?>
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
        <?php echo about();
        ?>
        
        <?php
}else header("Location:login.php");
?>
</div>
       <?php include("inc/set.php"); ?>
        <div class="chat-windows "></div>
    </div>
        <?php include("inc/metajs.php"); ?>
</body>

</html>