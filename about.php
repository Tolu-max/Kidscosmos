<html>
    <head>
        <?php include("inc/meta.php"); ?>
    </head>
    <body>
        <?php 
        include("inc/Upheadbar.php");
        include("inc/header.php");
        ?>
        <header class="page">
            <div class="page_breadcrumbs">
                <div class="container">
                    <ul class="page_breadcrumbs-list d-flex flex-wrap align-items-center">
                        <li class="list-item">
                            <a href="index.php" class="link">Home</a>
                        </li>

                        <li class="list-item">About</li>
                    </ul>
                </div>
            </div>

            <div class="page_main">
                <div class="underlay"></div>
                <div class="container">
                    <div class="content-wrapper">
                        <h1 class="page_main-header">About</h1>
                        <?php echo about_txt(); ?>
                    </div>
                </div>
            </div>
        </header>
        <?php echo medium_stuffs(); ?>
        <?php
        include("inc/footer.php");
        ?>
        


    </body>
</html>