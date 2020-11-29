<?php
error_reporting(0);
session_start();


 
  

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><title>Treneyan IT Sol</title></title>
        <link rel="stylesheet" href="bootstrap-4.4.1-dist/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap-4.4.1-dist/bootstrap-theme.min.css">
       <script src="bootstrap-4.4.1-dist/jquery.min.js"></script>
        <script src="bootstrap-4.4.1-dist/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/admform.css"></link>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
       <!--autosearch--> 
       
       <script type="text/javascript" src="jquery/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="jquery/jquery-ui-1.8.2.custom.min.js"></script> 
       <link href="css/css.css" rel="stylesheet" type="text/css" />


    </head>
                     
            <div class="container-fluid" id="dmid">    
                <div class="row">
                <font style="color:white; font-family: Verdana;  font-size:20px;">
                <p align="justify"><?php echo "Welcome  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Treneyan Admin </b>"?></p> </font>
                  </div>
                 </div>    
             </div>
          
             <div class="container">
                    <ul class="nav nav-tabs">
                        <li><a href="index.php">User Panel</a></li>
                        <li class="active"><a href="insert.php">Add User</a></li>
                        <li><a href="users.php">Registered Users</a></li>
                        <li><a href="adrreports.php">ADR Complaints</a></li>
                        <li><a href="contactreports.php">Contact Reports</a></li>
                        <li><a href="http://localhost/password-recovery/login.php">Reset Password</a></li>
                        <li><a  href="logout.php">Logout</a></li>
                        </ul>
                    <div class="tab-content">
                       <div id="viewapp" class="tab-pane fade in active">
                         
                          
                           <?php
