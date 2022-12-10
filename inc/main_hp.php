<main>
<div class="underlay"></div>
            <section class="hero">
                <div class="container d-lg-flex align-items-center">
                    <div class="hero_content">
                        <?php echo mainpage(); ?>
                        <div class="hero_content-rating d-flex flex-column flex-sm-row align-items-center">
                           <?php echo mainpage_text_color(); ?>
                            <div class="wrapper" data-aos="fade-left" data-aos-delay="50">
                                <ul class="rating d-flex align-items-center">
                                    <li class="rating_star">
                                        <i class="icon-star icon"></i>
                                    </li>
                                    <li class="rating_star">
                                        <i class="icon-star icon"></i>
                                    </li>
                                    <li class="rating_star">
                                        <i class="icon-star icon"></i>
                                    </li>
                                    <li class="rating_star">
                                        <i class="icon-star icon"></i>
                                    </li>
                                    <li class="rating_star">
                                        <i class="icon-star icon"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p class="hero_content-text" data-aos="fade-up" data-aos-delay="50">
                            <?php echo mainpage_text_info(); ?>
                        </p>
                    </div>
                    <div class="hero_media col-lg-6">
                        <lottie-player
                            src="img/d.jpg"
                            background="img/d.jpg"
                            speed="1"
                            style="width: 100%; height: 100%"
                        ></lottie-player>
                    </div>
                </div>
            </section>
</main>