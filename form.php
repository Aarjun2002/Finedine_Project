<!DOCTYPE html>
<html lang="en">
    
<head>
    <?php include("view/template/header.php"); ?>



</head>
<body>


<div class="container-xxl py-5 bg-dark hero-header mb-4">
                <div class="container text-center my-2 pt-3 pb-2">
                    <h1 class="display-2 text-white mb-2 animated slideInDown">Contact</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>


<div class="container py-2">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="custom-card">

                <h3 class="form-title">Employee Form</h3>

                <form action="form_op.php" method="post" >

                    <div class="row g-3">

                        <div class="col-md-6">
                            <label>ID</label>
                            <input type="number" name="id" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label>Age</label>
                            <input type="number" name="age" class="form-control" min="10" max="30">
                        </div>

                        <div class="col-md-6">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" id="contact" name="phone" maxlength="10">
                            <small id="contactError" class="text-danger"></small>
                        </div>
                        <div class="col-12">
                            <label>Email</label>
                            <input type="email" id="email" name="email" class="form-control">
                            <small id="emailError"></small>
                        </div>

                    </div>

                    <div class="btn-group-custom mt-4">
                        <button type="submit" id="insert" name="insert" class="btn-custom insert" onclick="return validateEmail(), checkContact()">Insert</button>
                        <button type="submit" id="update" name="update" class="btn-custom update" onclick="return validateEmail(), checkContact()">Update</button>
                        <button type="submit" id="delete" name="delete" class="btn-custom delete">Delete</button>
                        <button type="submit" id="display" name="display" class="btn-custom display">Display</button>
                     </div>

                </form>

            </div>

        </div>
    </div>
</div>

    <?php include ("view/template/footer.php"); ?>
    

        </body>
</html>
