<?php
$color="grey";
if(isset($_COOKIE["colora"])){
    $color = $_COOKIE["colora"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            width:100px;
            height:100px;
            border:1px solid grey;
        }
        .colorize{
            background-color: <?php echo $color;?>
        }
    </style>
</head>
<body>
    <div>
        <h1> <?php echo $_COOKIE["user"];?> </h1>
    </div>
    <div class="container colorize">
        
    </div>
</body>
</html>