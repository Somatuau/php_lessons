<?php 
    //we then check if the user has clicked the signup button
    if (isset($_POST['submit'])) {

        //Then we include the database connection
        include_once 'dbh.inc.php';
        //And we get the data from the signup form
        $first = $_POST['first'];
        $last = $_POST['last'];
        $email = $_POST['email'];
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];

        //Check if inputs are empty
        if (empty($first) || empty($last) || empty($email) || empty($uid) || empty(pwd)) {
            header("location: ../index.php?signup=empty");
            exit();
        }   else {
            //Check if input characters are valid
            if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
                hearder("Location: ../index.php?signup=char");
                exit();
            }   else {
                //Check if email is valid
                if (!filter_var($email, FIlTER_VALIDATE_EMAIL)) {
                    header("Location: ../index.php?signup=email");
                    exit();
                }   else {
                    header("Location: ../index.php?signup=success");
                    exit();
                }
            }
        }
    }   else {
        header("Location: ../index.php");
        exit();
    }



