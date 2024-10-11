<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in into MedArmis</title>

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
    <!--*****************************************************  Header  ****************************************************** -->
    <header class="main_header_sec">
        <div class="container d-flex align-items-center justify-content-between">
            <nav class="navbar navbar-expand-lg pt-4 pb-3 main_navbar_sec ">
                <a class="navbar-brand" href="login.php">
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
                    <form class="form-inline my-2 my-lg-0">
                        <button class="btn login_btn">
                            <a href="signup.php">
                                <i class="fa-solid fa-user mr-2"></i>SIGN UP</a>
                        </button>
                    </form>
                </div>
            </nav>
        </div>
    </header>
    <!--******************************************************  section 1  ****************************************************** -->
    <section class="pt-3">
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <form method="post" class="form-signin">
						<div class="account-logo">
                            <a href="index-2.html"><img src="assets/img/logo-dark.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" autofocus="" class="form-control" name="username" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="pwd" required>
                        </div>
                        <span style="color:red;"><?php if(!empty($msg)){ echo $msg; } ?></span>
                        <br>
                        <div class="form-group text-center">
                            <button type="submit" name="login" class="btn btn-primary account-btn">Login</button>
                        </div>
                        
                    </form>
                </div>
			</div>
        </div>
    </div>
    </section>
    <!--div class="main_contact_box">
                        <h5>Sign Up</h5>
                        <p>&nbsp;&nbsp;&nbsp;We appreciate your input and strive to continuously improve our platform to better serve our users.</p>
                        <div class="row">
                            <div class="col-xl-6 col-lg-12 col-md-6">
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="First Name" placeholder="First Name">
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-6">
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Last Name" placeholder="Last Name">
                            </div>
                            <div class="col-xl-12">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
                            </div>
                            <div class="col-xl-12">
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Phone Number" placeholder="Phone Number">
                            </div>
                            <div class="col-xl-12">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Enter Message"> </textarea>
                            </div>
                            <div class="col-xl-12">
                                <div class="bttonn_know">
                                    <button class="btn btn_know w-100">
                                        Submit <i class="fa-solid fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div-->
    <!--******************************************************  section 5  ****************************************************** -->
    <div class="btm_img_sec mt-5">
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-10 col-md-10 btm_footer_text text-center">
                        <img src="images/logo.png" class="img-fluid mb-4" alt="image">
                        <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has
                            been the industry standard dummy text ever since the, Lorem Ipsum is simply dummy text of
                            the printing and type setting industry.</p>
                        <div class="input_sec">
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter your Email">
                            <button class="btn btn_subscribe">
                                Subscribe <i class="fa-solid fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>