<?php
session_start(); 
$email = $_POST['email'];
$password = $_POST['Password'];

$conn=mysqli_connect("localhost:3305","root","");
mysqli_select_db("Mydbname",$conn);

$sql = "INSERT INTO tableone(email,password)
VALUES ('$email','$password')";


if(isset($_POST['submit'])) {
     if($email == 'admin' && $password == 'password') {
        $_SESSION['email'] = $email;
        echo  'data saved ';
        exit;
    } 
    else {
        echo 'Invalid username or password.';
    }
}
conn

?>