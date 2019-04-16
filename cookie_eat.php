<?php

// this script displays the values of the cookies that were set in cookie_bake.php 

// checks if the cookies are set, then displays their values
if (isset($_COOKIE["username"])) {
    echo "<p>Your username is: " . $_COOKIE["username"] . " </p>";
} else {
    echo "<p>Your username cookie is not set! </p>";
}

if (isset($_COOKIE["firstname"])) {
    echo "<p>Your first name is: " . $_COOKIE["firstname"] . " </p>";
} else {
    echo "<p>Your first name cookie is not set! </p>";
}

if (isset($_COOKIE["lastname"])) {
    echo "<p>Your last name is: " . $_COOKIE["lastname"] . " </p>";
} else {
    echo "<p>Your last name cookie is not set! </p>";
}

// loop for displaying the cookies in the array
if (isset($_COOKIE["cookie"])) {
    foreach ($_COOKIE["cookie"] as $key => $value) {
        echo "<p>The " . $key . " is: " . $value . " </p>";
    }
} else {
    echo "<p>Your array cookies are not set! </p>";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eat Cookies</title>
</head>
<body>
    <div>
        <p></p>
    </div>
</body>
</html>