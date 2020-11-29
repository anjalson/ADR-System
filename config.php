<?php
    
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'nelson');
    
    
    $link = mysqli_connect('localhost', 'root', '', 'nelson');
    
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    //log user out if logout button clicked
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['user']);
        header("location:login.php");
        exit;
    }
?>