<?php
    session_start();
    include ('database/data.php');
    if(isset($_SESSION['uname'])){
         
    }else{
        header("location: admin.php");
    }
?>