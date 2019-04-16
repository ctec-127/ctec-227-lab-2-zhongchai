<?php

// this script will delete the cookies created in cookie_bake.php by setting them again to time in the past 

setcookie("username", "BettyW", time() - 3600); 
setcookie("firstname", "Betty", time() - 3600); 
setcookie("lastname", "White", time() - 3600); 

setcookie("cookie[institution]", "Clark", time() - 3600); 
setcookie("cookie[city]", "Vancouver", time() - 3600); 
setcookie("cookie[state]", "WA", time() - 3600); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookie Monster</title>
</head>
<body>
    <div>
        <p>Om nom nom. I've eaten all your cookies. Deeeelicious!</p>
    </div>
</body>
</html>