<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>Jayam Web Solutions</title>
    <meta name="title" content="" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <!-- Remix Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <!-- bootstrap icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- Custom Styles -->
    <!-- <link rel="stylesheet" href="https://cms.jayamwebsolutions.com/assets/css/styles.css" /> -->
    <link rel="stylesheet" href="css/styles.css" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png" />

    <!-- Bootstrap JS (Including Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Google reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <div class="nav__data">
                <a href="#" class="nav__logo">
                    <img src="images/logo.png" alt="" srcset="" />
                </a>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__toggle-menu" style="margin-left: 100px"></i>
                    <i class="ri-close-line nav__toggle-close" style="margin-left: 100px"></i>
                </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li>
                        <a href="#" class="nav__link">Home</a>
                    </li>
                    <li>
                        <a href="#" class="nav__link">About</a>
                    </li>

                    <!--=============== DROPDOWN 1 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            Services <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <span class="dropdown__title">ECommerce Website</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="ecommerce-website-development.php" class="dropdown__link">Full
                                                Featured eCommerce Web
                                                development</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Simple eCommerce Web development</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Magento Development</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">WooCommerce Development</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <span class="dropdown__title">Email Hosting</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Business email hosting</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Enterprise email hosting</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Gsuite</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <span class="dropdown__title">Digital Marketing</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">SEO, SEM</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">SMO, SMM</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Link Building services</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Content Marketing</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <span class="dropdown__title">Mobile App Development</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Android app development</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">iOS App Development</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <span class="dropdown__title">Web Design & Development</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Web Design/ Re-Design</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Web Development</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Web Applications</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">CMS Web Development</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Web Maintenance</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Web Maintenance</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">UI/UX Design</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Landing Page design</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <span class="dropdown__title">Web Hosting</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Shared Hosting</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Cloud Hosting</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Dedicated Hosting</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">VPS Hosting</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <span class="dropdown__title">Brand Identity </span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Logo design</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Brochure design</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Flyer Design</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <span class="dropdown__title">Domain Registration</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">New Domain Name Registration</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Domain Transfer</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!--=============== DROPDOWN 2 ===============-->

                    <li>
                        <a href="#" class="nav__link">Portfolio</a>
                    </li>

                    <li>
                        <a href="#" class="nav__link">Career</a>
                    </li>
                    <li>
                        <a href="#" class="nav__link">Blog</a>
                    </li>
                    <li>
                        <a href="#" class="nav__link contact-us">Contact us</a>
                    </li>
                    <div class="d-flex justify-content-end">
                        <div class="twobuttons">
                            <a href="tel:9677876445" class="d-flex justify-content-center align-items-center">
                                <i class="fas fa-phone"></i> +91 96778 76445
                            </a>
                            <a href="#" class=" btn-1 d-flex justify-content-center align-items-center">Get a Quote</a>
                        </div>
                    </div>
                </ul>
            </div>
        </nav>
    </header>