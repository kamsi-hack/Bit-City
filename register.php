<?php
include("config.php");

if(isset($_POST['register'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (fullname,email,password)
            VALUES ('$fullname','$email','$password')";

    if($conn->query($sql)){
        header("Location: index.php?registered=1");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
