
          
    <?php
session_start();
?>

<div class="container py-2">

<div class="row justify-content-center">

<div class="col-lg-6">

<div class="card shadow-lg border-0 rounded-4">

<div class="card-header bg-dark text-white text-center py-3">
<h3 class="mb-0 text-warning">
<i class="fa fa-user-plus me-2 text-warning"></i>
Create Account
</h3>
</div>

<div class="card-body p-4">

<form action="reg_pro.php" method="post" onsubmit="return validateForm()">

<div class="form-floating mb-3">
<input type="text" class="form-control" name="name" placeholder="Your Name" required>
<label>Your Name</label>
</div>

<div class="form-floating mb-3">
<input type="email" class="form-control" name="email" placeholder="Your Email" required>
<label>Email Address</label>
</div>

<div class="form-floating mb-3">
<input type="text" class="form-control" id="contact" name="phone" placeholder="Phone Number" required>
<label>Phone Number</label>
<small id="contactError" class="text-danger"></small>
</div>

<div class="form-floating mb-4">
<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
<label>Password</label>
</div>

<div class="form-floating mb-4">
    <input type="password" class="form-control" id="confirmPassword" name="confirm_password" placeholder="Confirm Password" required>
    <label>Confirm Password</label>
    <small id="passwordError" class="text-danger"></small>
</div>

<button class="btn btn-warning w-100 py-3" type="submit">
<i class="fa fa-user-plus me-2"></i> Register
</button>

</form>

</div>

</div>

</div>

</div>

</div>