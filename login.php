<!DOCTYPE html>
<html lang="en">
    


<?php
session_start();
?>

<head>
    <?php include("view/template/header.php"); ?>

</head>

<body>
  <div class="container-xxl py-3 bg-dark hero-header mb-3">
                <div class="container text-center my-3 pt-5 pb-2">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Login</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Login</li>
                        </ol>
                    </nav>
                </div>
            </div>
      
<div class="container py-3">

<div class="row justify-content-center">

<div class="col-lg-5">

<div class="card shadow-lg border-0 rounded-4">

<div class="card-header bg-white text-center py-3">
<h3 class="mb-0">
<i class="fa fa-sign-in-alt text-warning me-2"></i>
User Login
</h3>
</div>


<?php
if (isset($_SESSION['error'])) {
    echo '<div class="alert alert-danger text-center">'
         . $_SESSION['error'] .
         '</div>';
    unset($_SESSION['error']); // remove after showing
}
?>


<div class="card-body p-4">

<form action="log_pro.php" method="post">

<div class="form-floating mb-3">
<input type="email" class="form-control" name="email" placeholder="Email" required>
<label>Email Address</label>
</div>

<div class="form-floating mb-4">
<input type="password" class="form-control" name="password" placeholder="Password" required>
<label>Password</label>
</div>

<button class="btn btn-warning w-100 py-3" type="submit">
<i class="fa fa-sign-in-alt me-2"></i>
Login
</button>

</form>

<p class="text-center mt-3">
Don't have an account?
<a href="register.php" class="text-warning">Register</a>
</p>

</div>

</div>

</div>

</div>

</div>
        
    <?php include ("view/template/footer.php"); ?>

    </body>
</html>