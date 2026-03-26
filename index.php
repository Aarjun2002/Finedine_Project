<!DOCTYPE html>
<html lang="en">
    
<head>
    <?php include("view/template/header.php"); ?>

</head>
<body>

        <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                            <a href="register.php" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Register</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="asset/img/hero.png" alt="z">
                        </div>
                    </div>
                </div>
            </div>
        </div>


       <?php include ("view/pages/index/service.php"); ?>


       <?php include ("view/pages/index/about.php"); ?>


       <?php include ("view/pages/index/menu.php"); ?>

     
       <?php include ("view/pages/index/team.php"); ?>
       

       <?php include ("view/pages/index/testimonial.php"); ?>   

       
       <?php include ("view/template/footer.php"); ?>


       </body>
</html>