
    <meta charset="utf-8">
    <title>FineDine - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="asset/lib/animate/animate.min.css" rel="stylesheet">
    <link href="asset/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="asset/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">



    <!-- Customized Bootstrap Stylesheet -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="asset/css/style.css" rel="stylesheet">

    <?php
$current_page = basename($_SERVER['PHP_SELF']);
?>


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Fine Dine</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link <?php if($current_page=='index.php') echo 'active'; ?>">Home</a>
                        <a href="about.php" class="nav-item nav-link <?php if($current_page=='about.php') echo 'active'; ?>">About</a>
                        <a href="service.php" class="nav-item nav-link <?php if($current_page=='service.php') echo 'active'; ?>">Service</a>
                        <a href="menu.php" class="nav-item nav-link <?php if($current_page=='menu.php') echo 'active'; ?>">Menu</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="Register.php" class="dropdown-item <?php if($current_page=='Register.php') echo 'active'; ?>">Register</a>
                                <a href="team.php" class="dropdown-item <?php if($current_page=='team.php') echo 'active'; ?>">Our Team</a>
                                <a href="testimonial.php" class="dropdown-item <?php if($current_page=='testimonial.php') echo 'active'; ?>">Testimonial</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link <?php if($current_page=='contact.php') echo 'active'; ?>">Contact</a>
                    </div>
                    <a href="register.php" class="btn btn-primary py-2 px-4">Register</a>
                </div>
            </nav>

        </div>
        <!-- Navbar & Hero End -->
        
