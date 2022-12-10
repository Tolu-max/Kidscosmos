<footer class="footer">
            <div class="container">
                <div class="footer_wrapper d-sm-flex flex-wrap flex-lg-nowrap justify-content-lg-between">
                    <div class="footer_block col-sm-6 col-lg-auto" data-order="1">
                        <div class="logo logo--footer">
                            <a class="d-inline-flex align-items-center" href="index.html">
                                <span class="logo_picture">
                                    <img src="svg/logo.svg" alt="Edison" />
                                </span>
                                <span class="text">
                                    <span class="brand">Kidscosmos</span>
                                    <span class="text_secondary">INT</span>
                                </span>
                            </a>
                        </div>
                       <?php echo footer_text(); ?>
                        <?php echo footer_links(); ?>
                        <?php echo footer_contact(); ?>
                    </div>
                    <?php echo footer_ln(); ?>
                    <div class="footer_block col-sm-6 col-lg-auto m-sm-0" data-order="3">
                        <h5 class="footer_block-header">Popular Courses:</h5>
                        <ul class="footer_block-list">
                            <li class="footer_block-list_item d-flex align-items-baseline">
                                <span class="marker"></span>
                                <a class="link" href="course.html">Data Science Fundamentals CS with Python and SQL</a>
                            </li>
                            <li class="footer_block-list_item d-flex align-items-baseline">
                                <span class="marker"></span>
                                <a class="link" href="course.html">AWS Certified Developer - Associate 2020</a>
                            </li>
                            <li class="footer_block-list_item d-flex align-items-baseline">
                                <span class="marker"></span>
                                <a class="link" href="course.html">How to Draw From Beginner to Master</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer_secondary">
                <div class="container d-flex flex-column flex-sm-row align-items-center justify-content-sm-between">
                    <a class="footer_secondary-scroll" id="scrollToTop" href="#">
                        <i class="icon-angle-up icon"></i>
                    </a>
                    <p class="footer_secondary-copyright">Copyright @ <span id="currentYear"></span> Kidscosmos</p>
                </div>
            </div>
        </footer>
<!-- Footer -->