<?php
    $connection = new mysqli('localhost','root','','api');
    if($connection->error){
        die('500');
    }
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $connection->query("INSERT INTO `users`(`name`,`surname`,`age`) VALUES ('$name','$surname',$age)");
    die('200');
?>