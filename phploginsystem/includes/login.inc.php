<?php 

if(isset($_POST["submit"]))

{
    // Grabbing the data
    $uid = $_POST["uid"];
    $uid = $_POST["pwd"];
   
    
    // Instantiate SignupCintr class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login = new LoginContr($uid, $uid, $pwd);
    // Running error handlers and user signup
    $login->loginUser();
    
    //Going to back to front page
    header("location: ../index.php?error=none");


}