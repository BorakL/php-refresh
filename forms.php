<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color: red;
        }
        .formField{
            margin: 10px;
        }
    </style>
</head>
<body>
    <?php
    $name = $email = $website = $comment = "";
    $nameErr = $emailErr = $websiteErr = $commentError = "";

    function test_input($input){
        $data = trim($input);
        $data = stripslashes($input);
        $data = htmlspecialchars($input);
        return $data;
    }
    
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        if(empty($_POST["name"])){
            $nameErr = "Name is required field!";
        }else{
            $name = test_input($_POST["name"]);
            $nameErr = !preg_match("/^[a-zA-Z-' ]*$/",$name) ? "Only letters allowed!" : "";
        }

        if(empty($_POST["email"])){
            $emailErr = "Email is required field!";
        }else{
            $email = test_input($_POST["email"]);
            $emailErr = !filter_var($email, FILTER_VALIDATE_EMAIL) ? "Only letters allowed!" : "";
        }

        if(empty($_POST["website"])){
            $websiteErr = "";
        }else{
            $website = test_input($_POST["website"]);
            $websiteErr = !preg_match("/^[a-zA-Z-' ]*$/",$name) ? "Only letters allowed!" : "";
        }

        if(empty($_POST["comment"])){
            $commentErr = "";
        }else{
            $comment = test_input($_POST["comment"]);
            $commentErr = !preg_match("/[a-Z]/",$email) ? "Only letters allowed!" : "";
        }


    }


    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
        <div class="formField">
        Name: <input type="text" name="name"/> <?php echo $name; ?> 
        <span class="error"> <?php echo $nameErr; ?> </span>
        </div>

        <div class="formField">
        Email: <input type="email" name="email"/> <?php echo $email; ?> 
        <span class="error"> <?php echo $emailErr; ?> </span>
        </div>

        <div class="formField">
        Website: <input type="text" name="website"/> <?php echo $website; ?> 
        <span class="error"> <?php echo $websiteErr; ?> </span>
        </div>

        <div class="formField">
        Comment: <textarea type="text" name="website"  rows=6> <?php echo $website; ?> </textarea> 
        <span class="error"> <?php echo $commentErr; ?> </span>
        </div>

        <div class="formField">
            <input type="submit"/>    
        </div<>

    </form>

    <div>
        <?php 
            echo "name: $name";
            echo "<br>";
            echo "email: $email";
            echo "<br>";
            echo "website: $website";
            echo "<br>";
            echo "comment: $comment";
            echo "<br>";
        ?>

    </div>

</body>
</html>

