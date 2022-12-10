 <?php date_default_timezone_set("Africa/lagos"); ?>
 <header class="header" data-page="home">
            <div class="container d-flex flex-wrap justify-content-between align-items-center">
                <div class="logo header_logo">
                    <a class="d-inline-flex align-items-center" href="index.php">
                        <span class="logo_picture">
                            <img src="img/Kidscosmos.png" alt="Kidscosmos Logo" />
                        </span>
                        <span class="text">
                            <span class="brand">Kidscosmos</span>
                            <span class="text_secondary">INT</span>
                        </span>
                    </a>
                </div>
                <button
                    class="header_trigger"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#headerMenu"
                    aria-controls="headerMenu"
                >
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
                <nav class="header_nav collapse" id="headerMenu">
                    <ul class="header_nav-list">
                        <li class="header_nav-list_item">
                            <a class="nav-item" href="index.php">Home</a>
                        </li>
                        
                        <li class="header_nav-list_item dropdown">
                            <a
                                class="nav-link nav-item dropdown-toggle d-inline-flex align-items-center"
                                href="#"
                                data-bs-toggle="collapse"
                                data-bs-target="#coursesMenu"
                                data-trigger="dropdown"
                                aria-expanded="false"
                                aria-controls="coursesMenu"
                                data-page="courses"
                            >
                                Categories
                                <i class="icon-angle-down icon"></i>
                            </a>
                            <div class="dropdown-menu collapse" id="coursesMenu">
                                <ul class="dropdown-list">
                                    <li class="list-item">
                                       <?php echo cat_menu(); ?>
                                    </li>
                                </ul>
                            </div>
                            <li class="header_nav-list_item">
                            <a class="nav-item" href="about.php">About Us</a>
                        </li>
                            <li class="header_nav-list_item">
                            <a class="nav-item" href="contact.php">Contact Us</a>
                        </li>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>