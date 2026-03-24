<?php include ("db_con.php"); ?>


<style>
.container {
    width: 400px;
    margin: 50px auto;
    padding: 20px;
    background: #b94e4e;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(5, 211, 22, 0.88);
}
input {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
}
button {
    padding: 10px;
    background: black;
    color: white;
    border: none;
    cursor: pointer;
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
    $deletequery = "DELETE FROM employees WHERE id='$id'";
    if ($connection->query($deletequery) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $connection->error;
    }
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
    <button onclick="history.back()">Go Back</button>
            </div>';
        }
    } else {
        echo "0 results";
    }
}


/* echo '<br><br><a href="form.php">Go Back</a>';
 */mysqli_close($connection);
?>