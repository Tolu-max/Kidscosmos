
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

                        <li class="list-item">Contact Us</li>
                    </ul>
                </div>
            </div>

            <div class="page_main">
                <div class="underlay"></div>
                <div class="container">
                    <div class="content-wrapper">
                        <h1 class="page_main-header">Contact Us</h1>
                        <?php echo contact_txt(); ?>
                    </div>

                    <ul class="page_main-list d-sm-flex flex-wrap justify-content-center">
                        <li class="page_main-list_item" data-aos="fade-up">
                            <div class="wrapper">
                                <div class="content d-flex justify-content-sm-center">
                                    <i class="icon-map-marker-alt-solid icon"></i>
                                    <div class="block">
                                        <?php echo add(); ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="page_main-list_item" data-aos="fade-up" data-aos-delay="50">
                            <div class="wrapper">
                                <div class="content d-flex justify-content-sm-center">
                                    <i class="icon-phone-solid icon"></i>
                                    <div class="block d-flex flex-column">
                                        <?php echo phn(); ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="page_main-list_item" data-aos="fade-up" data-aos-delay="100">
                            <div class="wrapper">
                                <div class="content d-flex justify-content-sm-center">
                                    <i class="icon-envelope icon"></i>
                                    <div class="block d-flex flex-column">
                                       <?php echo email(); ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <main class="contacts">
            <section class="contacts_form">
                <div class="container">
                    <div class="contacts_form-header">
                        <h2 class="contacts_form-header_title">Our experts will help you</h2>

                        <p class="contacts_form-header_text text">
                            If you have questions about the format or do not know what to choose, leave your request: we will be happy to
                            answer all your questions.
                        </p>
                    </div>
                    <iframe src="https://us14.list-manage.com/contact-form?u=6703ce340596154b2f913ddb8&form_id=1e2745da9524fd7e1d8a1dbdac836706" title="Mailchimp"></iframe>
                </div>
            </section>
        </main>
        <?php
        include("inc/footer.php");
        ?>
        


    </body>
</html>