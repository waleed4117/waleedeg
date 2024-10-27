<?php

$firstName =      $_POST['firstName'];
$lastName =       $_POST['lastName'];
$email =          $_POST['email'];

if (isset($_POST['submit'])) {
 
    $firstName =      mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName =       mysqli_real_escape_string($conn, $_POST['lastName']);
    $email =          mysqli_real_escape_string($conn, $_POST['email']);


    $sql = "INSERT INTO users(firstName, lastName, email)
            VALUES ('$firstName', '$lastName', '$email')";
    
    if(empty($firstName)){
        echo 'Please Write Your First Name';
    }elseif(empty($lastName)){
        echo 'Please Write Your Last Name';
    }elseif(empty($email)){
        echo 'Please Write Your Email';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'Please Write Your Correct Email';
    }else{
        if(mysqli_query($conn, $sql)){
            header('Location: ' .  $_SERVER['PHP_SELF']);
        }else{
            echo 'Error:' . mysqli_error($conn); 
        }
    }
}