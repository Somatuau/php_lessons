<?php 

if(isset($_POST["submit"]))

{
    // Grabbing the data
    $uid = $_POST["uid"];
    $uid = $_POST["pwd"];
    $uid = $_POST["pwdrepeat"];
    $uid = $_POST["email"];
    
    // Instantiate SignupCintr class
    include "../classes/signup.classes.php";
    include "../classes/signup.contr.classes.php";
    $signup = new SignupContr($uid, $uid, $pwd, $pwdRepeat, $email);
    // Running error handlers and user signup
    
    //Going to back to front page


}