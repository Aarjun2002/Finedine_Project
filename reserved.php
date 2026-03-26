<!DOCTYPE html>
<html lang="en">
    

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $time = $_POST["time"];
/*     $ampm = $_POST["AMPM"];
 */    $people = $_POST["people"];
    $contact = $_POST["phone"];
    $message = $_POST["message"];
}

?>

<head>
    <?php include("view/template/header.php"); ?>

</head>
<body>



<!-- <div class="container-fluid page-header mb-2 position-relative overlay-bottom"> -->
    <div class="d-flex flex-column align-items-center justify-content-center pt-2">
        <h1 class="display-4 text-white mb-3 mt-2" >Confirmation</h1><!-- 
        <div class="d-inline-flex mb-2">
            <p class="m-0 text-white"><a class="text-white" href="index.php">Home</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Confirmation</p>
        </div> -->
    </div>
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-lg border-0">
                <div class="card-header bg-success text-white text-center">
                    <h3 class="mb-0 text-white">✔ Reservation Confirmed</h3>
                </div>

                <div class="card-body">

                    <p class="text-center">Thank you, <strong><?php echo $name; ?></strong>! Your reservation has been confirmed.</p>

                   <div class="ticket shadow-lg">

    <div class="ticket-header text-center">
        <h4>🍽 FineDine Restaurant</h4>
        <small>Reservation Ticket</small>
    </div>

    <hr class="ticket-divider">

    <div class="ticket-body">

        <p><strong>Name:</strong> <?php echo $name; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Date:</strong> <?php echo $date; ?></p>
        <p><strong>Time:</strong> <?php echo $time; ?></p>
        <p><strong>No. of People:</strong> <?php echo $people; ?></p>
        <p><strong>Contact:</strong> <?php echo $contact; ?></p>

        <?php if(!empty($message)){ ?>
        <p><strong>Special Request:</strong> <?php echo $message; ?></p>
        <?php } ?>

    </div>

    <hr class="ticket-divider">

    <div class="ticket-footer text-center">
        <p> Please show this confirmation when you arrive.</p>
        <p class="text-muted">Thank you for choosing FineDine!</p>
    </div>

</div>

                    <div class=" row text-center mt-3">
                        <div class="col-md">
                        <a href="profile.php" class="btn btn-primary w-100">Back to Profile</a>
                        </div>
                        <div class="col-md">
                        <a href="logout.php" class="btn btn-danger w-100 ">
<i class="fa fa-sign-out-alt me-2"></i> Logout
</a>  
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


<?php include ("view/template/footer.php"); ?>

</body>
</html>