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
               <!-- <button class="btn cart-button"></button>
                <form class="form-inline my-2 my-lg-0">
                    <button class="btn login_btn">
                        <a href="signup.php">
                            <i class="fa-solid fa-user mr-2"></i>SIGN UP</a>
                    </button> -->
                </form>
            </div>
        </nav>
    </div>
</header>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .title {
            font-size: 60px;
            font-weight: bold;
            margin-bottom: 20px;
            color: brown;
            text-align: center;
        }

        .subtitle {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .content {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .warning {
            color: red;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .dosage {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .dosage-title {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .dosage-description {
            margin-bottom: 20px;
        }

        .note {
            font-style: italic;
            margin-bottom: 20px;
        }
    </style>
    </head>

    <body>
        <div class="container">
            <h1 class="title">Atenolol</h1>
            <h2 class="subtitle">Uses</h2>
            <p class="content">Atenolol is used with or without other medications to treat high blood pressure
                (hypertension). Lowering high blood pressure helps prevent strokes, heart attacks, and kidney problems.
                This medication is also used to treat chest pain (angina) and to improve survival after a heart attack.
            </p>
            <h2 class="subtitle">Warning</h2>
            <p class="warning">Apple juice and orange juice may prevent your body from fully absorbing atenolol. It is
                best to avoid drinking apple/orange juice within 4 hours of taking atenolol, unless your doctor or
                pharmacist tells you otherwise.</p>
            <h2 class="subtitle">Dosage</h2>
            <div class="dosage">
                <p class="dosage-title">Take this medication by mouth with or without food as directed by your doctor,
                    usually 1 to 2 times daily.</p>
                <p class="dosage-description">The dosage is based on your medical condition and response to treatment.
                </p>
                <p class="dosage-description">Use this medication regularly in order to get the most benefit from it. To
                    help you remember, take it at the same time(s) each day. Keep taking this medication even if you
                    feel well. Most people with high blood pressure do not feel sick.</p>
                <p class="dosage-description">If this product is used for chest pain, it must be taken regularly to be
                    effective. It should not be used to treat chest pain when it occurs. Use other medications (such as
                    nitroglycerin placed under the tongue) to relieve chest pain as directed by your doctor.</p>
                <p class="dosage-description">It may take 1 to 2 weeks before you get the full benefit of this
                    medication. Tell your doctor if your condition does not improve or if it worsens (for example, if
                    your blood pressure readings remain high or increase, if your chest pain occurs more often).</p>
            </div>

            <h2 class="subtitle">Side Effects</h2>
            <div class="side-effects">
                <p class="side-effects-title">Common Side Effects</p>
                <p class="side-effects-description">Dizziness, lightheadedness, tiredness, and nausea may occur. If any
                    of these effects last or get worse, tell your doctor or pharmacist promptly.</p>
                <p class="side-effects-description">To reduce the risk of dizziness and lightheadedness, get up slowly
                    when rising from a sitting or lying position.</p>
                <p class="side-effects-description">This drug may reduce blood flow to your hands and feet, causing them
                    to feel cold. Smoking may worsen this effect. Dress warmly and avoid tobacco use.</p>
                <p class="side-effects-title">Serious Side Effects</p>
                <p class="side-effects-description">Remember that this medication has been prescribed because your
                    doctor has judged that the benefit to you is greater than the risk of side effects. Many people
                    using this medication do not have serious side effects.</p>
                <p class="side-effects-description">Tell your doctor right away if you have any serious side effects,
                    including: new or worsening symptoms of heart failure (such as shortness of breath, swelling
                    ankles/feet, unusual tiredness, unusual/sudden weight gain), very slow heartbeat, fainting, blue
                    fingers/toes, mental/mood changes (such as confusion, mood swings, depression).</p>
                <p class="side-effects-title">Allergic Reaction</p>
                <p class="side-effects-description">A very serious allergic reaction to this drug is rare. However, get
                    medical help right away if you notice any of the following symptoms of a serious allergic reaction:
                    rash, itching/swelling (especially of the face/tongue/throat), severe dizziness, trouble breathing.
                </p>
            </div>
        </div>
    </body>

</html>