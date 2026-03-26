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
                   <h1 class="display-3 text-white mb-1 animated slideInDown">My Profile</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>

<!-- <div class="container mt-5">
 -->
<div class="row">
<div class="container py-5">

<div class="row g-4 p-2">

<!-- PROFILE CARD -->
<div class="col-lg-4">

<div class="card border-0 shadow-lg rounded-4 overflow-hidden">

<div class="bg-dark text-center p-4">

<i class="fa fa-user-circle fa-4x text-warning mb-3"></i>

<h4 class="text-white mb-0">
<?php echo $_SESSION['name']; ?>
</h4>

<p class="text-light small mb-0">Customer</p>

</div>


<div class="card-body">

<div class="mb-3">
<label class="fw-bold text-dark">Email</label>
<p class="text-muted mb-0">
<i class="fa fa-envelope text-warning me-2"></i>
<?php echo $_SESSION['email']; ?>
</p>
</div>

<hr>

<div class="mb-3">
<label class="fw-bold text-dark">Phone</label>
<p class="text-muted mb-0">
<i class="fa fa-phone text-warning me-2"></i>
<?php echo $_SESSION['phone']; ?>
</p>
</div>

<hr>

<a href="logout.php" class="btn btn-danger w-100 mt-3">
<i class="fa fa-sign-out-alt me-2"></i> Logout
</a>

</div>

</div>

</div>


<!-- Register SECTION -->
<div class="col-lg-8">

<div class="card border-0 shadow-lg rounded-4 p-4">

<h3 class="mb-4 fw-bold">

<i class="fa fa-calendar-check text-warning me-2"></i>
Book Your Table

</h3>

<?php include 'view/pages/index/reservation.php'; ?>

</div>

</div>

</div>

</div>
    <?php include ("view/template/footer.php"); ?>
</body>
</html>