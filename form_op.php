<?php include ("db_con.php"); ?>


<style>
body {
    background: #0f172a;
    font-family: Arial, sans-serif;
}

.container {
    width: 420px;
    margin: 80px auto;
    background: #ffffff;
    padding: 30px;
    border-radius: 15px;
    color: white;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

label {
    display: block;
    margin-top: 12px;
    font-weight: bold;
    color: #ffa200;
}

input {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: none;
    border-radius: 8px;
    background: #242424;
    color: white;
}

input[readonly] {
    background: #0d0f0c;
}

.btn {
    margin-top: 20px;
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 8px;
    background: linear-gradient(45deg, #f59e0b, #ef4444);
    color: white;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

.btn:hover {
    opacity: 0.5;
}   
</style>

<?php

    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $id = $_POST['id'];


if(isset($_POST['insert'])) {
    

    $insertquery= "INSERT INTO employees (name, age, phone, email) VALUES ('$name', '$age', '$phone', '$email')";
    if ($connection->query($insertquery) === TRUE) {





    
        echo "New record created successfully";
    } else {
        echo "Error: " . $insertquery . "<br>" . $connection->error;
    }
} 
else if(isset($_POST["update"])) {
        $updatequery= "UPDATE employees SET name='$name', age='$age', phone='$phone', email='$email' WHERE id='$id'";

        if ($connection->query($updatequery) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $connection->error;
        }
    }
else if(isset($_POST["delete"])) {

     if (empty($id)) {
        echo "Please enter ID to delete";
    } else {
    $deletequery = "DELETE FROM employees WHERE id='$id'";
    if ($connection->query($deletequery) === TRUE) {
        echo "Record deleted successfully";
    } else {    
        echo "Error deleting record: " . $connection->error;
    }}
}

else if(isset($_POST["display"])) {
    $selectquery = "SELECT * FROM employees WHERE id='$id'";
    $result = $connection->query($selectquery);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            
        echo '<div class="container">
    <label>ID</label>
    <input type="text" value="'.$row["id"].'" readonly>

    <label>Name</label>
    <input type="text" value="'.$row["name"].'">

    <label>Age</label>
    <input type="text" value="'.$row["age"].'">

    <label>Phone</label>
    <input type="text" value="'.$row["phone"].'">

    <label>Email</label>
    <input type="text" value="'.$row["email"].'">

    <br>
    <button class="btn" onclick="history.back()">Go Back</button>
            </div>';
        }
    } else {
        echo "0 results";
    }
}


/* echo '<br><br><a href="form.php">Go Back</a>';
 */mysqli_close($connection);
?>