<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Error Messages Using PHP</title>
</head>
<body>
    
<h2>Signup</h2>
<form action="includes/signup.inc.php" method="POST">
    <input type="text" name="first" placeholder="Firstname">
    <input type="text" name="first" placeholder="Lastname">
    <input type="text" name="first" placeholder="E-mail">
    <input type="text" name="first" placeholder="Username">
    <input type="text" name="first" placeholder="Password">
    <button type="submit" name="submit">Sign up> Sign up</button>
</form>
<?php
    $fullUlr = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URL";

    if (strpos($fullUlr, "signup=empty"))
        echo "<p class='error'>You did not fil in all fields!<p>";
    }
    elseif (strpos($fullUlr, "signup=char"))
    echo "<p class='error'>You used invalid characters!<p>";
    }
    elseif (strpos($fullUlr, "signup=email" == true) {
    echo "<p class='error'>You used invalid characters e-mail!<p>";
    }
    elseif (strpos($fullUlr, "signup=success"== true) {
    echo "<p class='error'>You did not fil in all fields!<p>";
    }
  
</body>
</html>