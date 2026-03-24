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
        