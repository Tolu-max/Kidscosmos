<?php 
    function cat_menu(){
        include("inc/db.php");
        $get_cat=$con->prepare("select * from cat");
        $get_cat->setFetchMode(PDO:: FETCH_ASSOC);
        $get_cat->execute();
        while($row=$get_cat->fetch()):
            echo"
            <a class='dropdown-item nav-item'>".$row['cat_name']."</a><br />
          
        ";
     endwhile;
    }
    function footer_ln(){
        include("inc/db.php");
        $get_cat=$con->prepare("select * from footer_links");
        $get_cat->setFetchMode(PDO:: FETCH_ASSOC);
        $get_cat->execute();
        while($row=$get_cat->fetch()):
            echo"
            <div class='footer_block col-sm-6 col-lg-auto' data-order='2'>
                        <ul class='footer_block-nav'>
                            <li class='footer_block-nav_item'>
                                <a class='link' href='".$row['footer_href']."'>".$row['footer_links']."</a>
                            </li>
                            <li class='footer_block-nav_item'>
                                <a class='link' href='".$row['footer_href1']."'>".$row['footer_links1']."</a>
                            </li>
                        </ul>
                    </div>
          
        ";
     endwhile;
    }
    function medium_stuffs(){
        include("inc/db.php");
        $get_cat=$con->prepare("select * from features");
        $get_cat->setFetchMode(PDO:: FETCH_ASSOC);
        $get_cat->execute();
        while($row=$get_cat->fetch()):
            echo"
            <div class='features'>
            <div class='container'>
                <ul class='features_list d-md-flex flex-wrap'>
                    <li class='features_list-item col-md-4' data-order='1' data-aos='fade-up'>
                        <div class='card'>
                            <div class='content'>
                                <div class='card_media'>
                                    <i class='icon-user-graduate-solid icon'></i>
                                </div>
                                <div class='card_main'>
                                    <h5 class='card_main-title'>".$row['card_main_title']."</h5>
                                    <p class='card_main-text'>
                                    ".$row['card_main_text']."
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class= 'features_list-item col-md-4' data-order='2' data-aos='fade-up'>
                    <div class='card'>
                        <div class='content'>
                            <div class='card_media'>
                                <i class='icon-globe-solid icon'></i>
                            </div>
                            <div class='card_main'>
                                <h5 class='card_main-title'>".$row['card_main_title1']."</h5>
                                <p class='card_main-text'>
                                   ".$row['card_main_text1']."
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                    <li class= 'features_list-item col-md-4' data-order='3' data-aos='fade-up'>
                    <div class='card'>
                        <div class='content'>
                            <div class='card_media'>
                                <i class='icon-globe-solid icon'></i>
                            </div>
                            <div class='card_main'>
                                <h5 class='card_main-title'>".$row['card_main_title2']."</h5>
                                <p class='card_main-text'>
                                ".$row['card_main_text2']."
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                    <li class= 'features_list-item col-md-4' data-order='4' data-aos='fade-up'>
                    <div class='card'>
                        <div class='content'>
                            <div class='card_media'>
                                <i class='icon-globe-solid icon'></i>
                            </div>
                            <div class='card_main'>
                                <h5 class='card_main-title'>".$row['card_main_title3']."</h5>
                                <p class='card_main-text'>
                                ".$row['card_main_text3']."
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                    <li class= 'features_list-item col-md-4' data-order='5' data-aos='fade-up'>
                    <div class='card'>
                        <div class='content'>
                            <div class='card_media'>
                                <i class='icon-globe-solid icon'></i>
                            </div>
                            <div class='card_main'>
                                <h5 class='card_main-title'>".$row['card_main_title4']."</h5>
                                <p class='card_main-text'>
                                ".$row['card_main_text4']."
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                    <li class= 'features_list-item col-md-4' data-order='6' data-aos='fade-up'>
                    <div class='card'>
                        <div class='content'>
                            <div class='card_media'>
                                <i class='icon-globe-solid icon'></i>
                            </div>
                            <div class='card_main'>
                                <h5 class='card_main-title'>".$row['card_main_title5']."</h5>
                                <p class='card_main-text'>
                                ".$row['card_main_text5']."
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                </ul>
            </div>
        </div>
          
        ";
     endwhile;
    }
    function todo(){
        include("inc/db.php");
        $get_cat=$con->prepare("select * from todo");
        $get_cat->setFetchMode(PDO:: FETCH_ASSOC);
        $get_cat->execute();
        while($row=$get_cat->fetch()):
            echo"
            <section class='about'>
            <div class='container'>
                <div class='about_deco'>
                    <lottie-player
                        src='lottie/wave.json'
                        background='transparent'
                        speed='1'
                        style='width: 100%; height: 100%'
                        loop
                        autoplay
                    ></lottie-player>
                </div>
                <div class='about_main'>
                    <div class='content'>
                        <h2 class='about_main-header' data-aos='fade-in'>".$row['about_header']."</h2>
                        <ul class='about_main-list'>
                            <li class='about_main-list_item' data-aos='fade-up'>
                                <i class='icon-check icon'></i>
                                <div class='content'>
                                    <h5 class='title'>".$row['title']."</h5>
                                    <p class='text'>".$row['text']."</p>
                                </div>
                            </li>
                            <li class='about_main-list_item' data-aos='fade-up' data-aos-delay='50'>
                                <i class='icon-check icon'></i>
                                <div class='content'>
                                    <h5 class='title'>".$row['title2']."</h5>
                                    <p class='text'>".$row['text2']."</p>
                                </div>
                            </li>
                            <li class='about_main-list_item' data-aos='fade-up' data-aos-delay='100'>
                                <i class='icon-check icon'></i>
                                <div class='content'>
                                    <h5 class='title'>
                                        ".$row['title3']."
                                    </h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class='about_review' data-aos='zoom-in'>
                    <div class='about_review-wrapper'>
                        <div class='media'>
                            <picture>
                                <source data-srcset='img/placeholder.jpg' srcset='img/placeholder.jpg' />
                                <img class='lazy' data-src='img/placeholder.jpg' src='img/placeholder.jpg' alt='media' />
                            </picture>
                        </div>
                        <div class='main'>
                            <h5 class='main_name'>".$row['cst_txt_name']."</h5>
                            <ul class='rating d-flex align-items-center'>
                                <li class='rating_star'>
                                    <i class='icon-star icon'></i>
                                </li>
                                <li class='rating_star'>
                                    <i class='icon-star icon'></i>
                                </li>
                                <li class='rating_star'>
                                    <i class='icon-star icon'></i>
                                </li>
                                <li class='rating_star'>
                                    <i class='icon-star icon'></i>
                                </li>
                                <li class='rating_star'>
                                    <i class='icon-star icon'></i>
                                </li>
                            </ul>
                            <q class='main_review quote'>
                                “".$row['cst_txt']."”
                            </q>
                        </div>
                    </div>
                </div>
            </div>
        </section>
          
        ";
     endwhile;
    }
    function home_cat(){
        include("inc/db.php");
        $get_cat=$con->prepare("select * from cat");
        $get_cat->setFetchMode(PDO:: FETCH_ASSOC);
        $get_cat->execute();
        while($row=$get_cat->fetch()):
            echo"";
        endwhile;
    }
    function header_links(){
        include("inc/db.php");
        $get_link=$con->prepare("select * from contact");
        $get_link->setFetchMode(PDO:: FETCH_ASSOC);
        $get_link->execute();
        $row=$get_link->fetch();

        echo"
        <li class='promobar_socials-item'>
        <a class='link' href='https://www.facebook.com/".$row['fb']."' target='_blank' rel='noopener noreferrer'>
            <i class='icon-facebook'></i>
        </a>
    </li>
    <li class='promobar_socials-item'>
        <a class='link' href='https://www.twitter.com/".$row['tw']."' target='_blank' rel='noopener noreferrer'>
            <i class='icon-twitter'></i>
        </a>
    </li>
    <li class='promobar_socials-item'>
        <a class='link' href='https://www.instagram.com/".$row['ig']."' target='_blank' rel='noopener noreferrer'>
            <i class='icon-instagram'></i>
        </a>
    </li>";
    }
    function footer_links(){
        include("inc/db.php");
        $get_link=$con->prepare("select * from contact");
        $get_link->setFetchMode(PDO:: FETCH_ASSOC);
        $get_link->execute();
        $row=$get_link->fetch();

        echo"
        <ul class='footer_block-socials d-flex align-items-center'>
                            <li class='footer_block-socials_item'>
                                <a class='link' href='https://www.facebook.com/".$row['fb']."' target='_blank' rel='noopener noreferrer'>
                                    <i class='icon-facebook'></i>
                                </a>
                            </li>
                            <li class='footer_block-socials_item'>
                                <a class='link' href='https://www.twitter.com/".$row['tw']."' target='_blank' rel='noopener noreferrer'>
                                    <i class='icon-twitter'></i>
                                </a>
                            </li>
                            <li class='footer_block-socials_item'>
                                <a class='link' href='https://www.instagram.com/".$row['ig']."' target='_blank' rel='noopener noreferrer'>
                                    <i class='icon-instagram'></i>
                                </a>
                            </li>
                        </ul>
        ";
    }
    function footer_contact(){
        include("inc/db.php");
        $get_link=$con->prepare("select * from contact");
        $get_link->setFetchMode(PDO:: FETCH_ASSOC);
        $get_link->execute();
        $row=$get_link->fetch();

        echo"
        <div class='wrapper d-flex flex-column'>
                            <a class='link link--contacts text text--sm d-inline-flex align-items-center' href='mailto:".$row['email']."'>
                                <i class='icon-envelope icon'></i>
                                ".$row['email']."
                            </a>
                            <a class='link link--contacts text text--sm d-inline-flex align-items-center' href='tel:".$row['phn']."'>
                                <i class='icon-phone-solid icon'></i>
                                ".$row['phn']."
                            </a>
                        </div>
        ";
    }
    function footer_text(){
        include("inc/db.php");
        $get_link=$con->prepare("select * from contact");
        $get_link->setFetchMode(PDO:: FETCH_ASSOC);
        $get_link->execute();
        $row=$get_link->fetch();

        echo"
        <p class='footer_block-text'>
        ".$row['Text_footer']."
        </p>
        ";
    }
    function mainpage(){
        include("inc/db.php");
        $get_link=$con->prepare("select * from mainpage");
        $get_link->setFetchMode(PDO:: FETCH_ASSOC);
        $get_link->execute();
        $row=$get_link->fetch();

        echo"
        <h1 class='hero_content-header' data-aos='fade-up'>".$row['Text_large']."</h1>
        ";
    }
    function mainpage_text_color(){
        include("inc/db.php");
        $get_link=$con->prepare("select * from mainpage");
        $get_link->setFetchMode(PDO:: FETCH_ASSOC);
        $get_link->execute();
        $row=$get_link->fetch();

        echo"
        <p class='text' data-aos='fade-left'>".$row['Text_color']."</p>
        ";
    }
    function mainpage_text_info(){
        include("inc/db.php");
        $get_link=$con->prepare("select * from mainpage");
        $get_link->setFetchMode(PDO:: FETCH_ASSOC);
        $get_link->execute();
        $row=$get_link->fetch();

        echo"
        <p class='hero_content-text' data-aos='fade-up' data-aos-delay='50'>
        ".$row['Text_info']."
                        </p>
        ";
    }
    function about_txt(){
        include("inc/db.php");
        $get_link=$con->prepare("select * from about");
        $get_link->setFetchMode(PDO:: FETCH_ASSOC);
        $get_link->execute();
        $row=$get_link->fetch();

        echo"
        <p class='page_main-text'>
        ".$row['about_text']."         
        </p>
        ";
    }
    function contact_txt(){
        include("inc/db.php");
        $get_link=$con->prepare("select * from contact_txt");
        $get_link->setFetchMode(PDO:: FETCH_ASSOC);
        $get_link->execute();
        $row=$get_link->fetch();

        echo"
        <p class='page_main-text'>
        ".$row['contact_txt']."         
        </p>
        ";
    }
    function add(){
        include("inc/db.php");
        $get_link=$con->prepare("select * from contact");
        $get_link->setFetchMode(PDO:: FETCH_ASSOC);
        $get_link->execute();
        $row=$get_link->fetch();

        echo"
        <span class='content_text text'>".$row['add1']."</span>
        ";
    }
    function phn(){
        include("inc/db.php");
        $get_link=$con->prepare("select * from contact");
        $get_link->setFetchMode(PDO:: FETCH_ASSOC);
        $get_link->execute();
        $row=$get_link->fetch();

        echo"
        <a class='content_link text' href='tel:".$row['phn']."'>".$row['phn']."</a>
        ";
    }
    function email(){
        include("inc/db.php");
        $get_link=$con->prepare("select * from contact");
        $get_link->setFetchMode(PDO:: FETCH_ASSOC);
        $get_link->execute();
        $row=$get_link->fetch();

        echo"
        <a class='content_link text' href='".$row['email']."'>".$row['email']."</a>
        ";
    }
?>