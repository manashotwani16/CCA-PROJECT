<?php
if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    
    
    $conn = mysqli_connect('localhost', 'username', 'password', 'database_name');
    
    $sql = "INSERT INTO tablethree(Name, number, Message)
VALUES ("$name","$number","$message");
    if(!$conn){
        die('Error: Could not connect to the database.');
    }
    
    
    $sql = "INSERT INTO menu (food_name, price, description) VALUES ('$food_name', '$price', '$description')";
    
    if(mysqli_query($conn, $sql)){
        echo 'The menu item has been added successfully.';
    } else{
        echo 'Error: Could not add the menu item. Please try again later.';
    }
    
   
    mysqli_close($conn);
}
?>
