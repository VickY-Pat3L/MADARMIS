<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceed to pay</title>

    <head>
        <link rel="icon" type="image/png" href="images/logo.png" />
    </head>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/jpg" src="images/favicon.png" href="index.php">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@100;200;300;400;500;600;700&family=Barlow:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300;1,400&family=Gorditas:wght@400;700&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;1,100;1,200;1,300;1,400;1,500;1,600&family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;1,200;1,300;1,400;1,600;1,700&family=Oswald:wght@200;300;400;500;600;700&family=Poppins:ital,wght@0,600;0,800;0,900;1,500;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- css links -->
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="css/font.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head>

<body class="main_body_bg">
    <!--******************************************************  Header  ****************************************************** -->
    <header class="main_header_sec">
        <div class="container d-flex align-items-center justify-content-between">
            <nav class="navbar navbar-expand-lg pt-4 pb-3 main_navbar_sec ">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" class="img-fluid" alt="image">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                    aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php"> Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="Medication Corner.php">Medication Corner</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="Medicine.php">Medicine</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="aboutus.php">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="contactus.php">Contact us</a>
                        </li>
                    </ul>
                    <button class="btn cart-button"></button>
                </div>
            </nav>
            <form class="form-inline my-2 my-lg-0">

                <button class="btn login_btn">
                    <a href="login.php">
                        <i class="fa-solid fa-user mr-2"></i> LOGIN / SIGN UP</a>
                </button>
            </form>
        </div>
    </header>
    <!--------------footer------------------>
    <footer>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="linked_icons">
                        <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://in.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="linked_pages">
                        <a href="index.php">Home</a>
                        <a href="Medication Corner.php">Medication Corner</a>
                    </div>
                    <div class="linked_pages mt-3">
                        <a href="Medicine.php">Medicine</a>
                        <a href="aboutus.php">About us</a>
                        <a href="contactus.php">Contact Us</a>
                    </div>
                    <div class="linked_pages mt-3">
                        <a href="privacy-policy.php">Privacy Policy</a>
                        <a href="terms-conditions.php">Terms & Conditions</a>
                    </div>
                </div>
            </div>
            <div class="row py-3 justify-content-center">
                <div class="copy_right_Sec">
                    <p>@ 2024 Medarmis. All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <!-- js links -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!--midddal_sec_main  -->
    <script>
        var midddal_sec_main = $('.midddal_sec_main');
        midddal_sec_main.owlCarousel({
            center: true,
            items: 1,
            loop: true,
            margin: 10,
            dots: false,
            nav: true,
            // navText: ["<img src='image/left_btn.png' class='left-arrow'>",
            //         "<img src='image/right_btn.png' class='right-arrow'>"],      
            navText: ['<i class="fa-solid fa-arrow-left-long navButton"></i>',
                '<i class="fa-solid fa-arrow-right-long navButton"></i>'],
            onDragged: activeSlide,
            onInitialized: activeSlide,
            responsive: {
                600: {
                    items: 3
                }
            }
        });
        function activeSlide() {
            $(".midddal_sec_main").find('.active_slide').removeClass('active_slide');
            $curr = $(".midddal_sec_main").find(".owl-item.active.center").addClass('active_slide');
            $curr.prev('.owl-item.active');
            $curr.next('.owl-item.active');
        }
        // Active slide with nav bar
        $('.fa-solid.navButton').click(function () {
            setTimeout(activeSlideSet, 60);
        });
        function activeSlideSet() {
            var activeSlide = $(".midddal_sec_main").find('.active_slide');
            activeSlide.removeClass('active');
            activeSlide.removeClass('center');
            activeSlide.removeClass('active_slide');
            $(".midddal_sec_main").find(".owl-item.active.center").addClass('active_slide');
        }
        // ./ Active slide with nav bar
    </script>
</body>

</html>