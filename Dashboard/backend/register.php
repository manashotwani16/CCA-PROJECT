<?php
if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $Password = $_POST['Password'];
    $Type = $_POST['Type'];
    
    
    
    
    $conn = mysqli_connect('localhost', 'username', 'password', 'database');
    
    $sql = "INSERT INTO tabletwo(Name, Phone, Email, Subject, Message)
VALUES ("$email","$password");
    if(!$conn){
        die('Error: Could not connect to the database.');
    }
    
    
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";
    if(mysqli_query($conn, $sql)){
        echo 'Your account has been created successfully.';
    } else{
        echo 'Sorry, an error occurred while creating your account.';
    }
    
    
    mysqli_close($conn);
}
?>
