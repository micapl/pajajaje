<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
</head>
<body>
    <form action="2.php" method="POST">
        1. <input type="number" name="pierwszy" required/><br>
        2. <input type="number" name="drugi" required/><br>
        <input type="submit">
    </form>
    <br>
</body>
</html>

<?php
if(isset($_POST) && array_key_exists("pierwszy", $_POST) && array_key_exists("drugi", $_POST)){
    if(@$_POST["pierwszy"]>@$_POST["drugi"]){
        echo "Większą liczbą jest: ".$_POST["pierwszy"];
    }elseif(@$_POST["pierwszy"]==@$_POST["drugi"]){
        echo "Liczby są równe";
    }else{
        echo "Większą liczbą jest:".@$_POST["drugi"];
    }
};


?>