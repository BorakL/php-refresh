<?php
$cookie_color="colora";
$cookie_color_value="red";
setcookie($cookie_color,$cookie_color_value,time()+60*60*100,"/");

$cookie_name="user";
$cookie_value="John";
setcookie($cookie_name,$cookie_value,time()+60*60*100,"/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE[$cookie_name])){
        echo "Cookie name ".$cookie_name." is not set!";
    }else{
        echo "Cookie ".$cookie_name."is set!<br>";
        echo "Value is:".$_COOKIE[$cookie_name];
    }
    ?>
</body>
</html>