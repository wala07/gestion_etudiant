
<?php
include("../services/auth/auth.php");
/*
if(islogin()==false){
   
    header("Location: ../index.php");
    
}*/
loginact("../index.php");
if(islogin()){
session_start();
   
    if($_SESSION["type"]==0){
        header("Location:  enseignant/home.php");
    }
    else{
        header("Location: secretariat/home.php");
    }
    session_write_close();
}
?>

