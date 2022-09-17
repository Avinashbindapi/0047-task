<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="first_name" placeholder="FirstName">
        <input type="text" name="second_name" placeholder="SecondName">
        <button type="submit" name="send">send</button>
    </form>
</body>
</html>

<?php
        
    if (isset($_POST['send'])) 
    {
        $first_name = $_POST['first_name'];

        $second_name = $_POST['second_name'];

        // echo($first_name),($second_name);

        echo  "<h2>Hello $first_name $second_name! Greetings from BindAPI.</h2>";
    }