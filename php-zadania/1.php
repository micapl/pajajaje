<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1</title>
</head>
<body>
    <form action="1.php" method="POST">
        1. <input type="number" name="pierwszy" required/><br>
        2. <input type="number" name="drugi" required/><br>
        <input type="submit">
    </form>
    <br>
</body>
</html>

<?php
if(@isset($_POST)){
    if(@$_POST["pierwszy"] > 10 && @$_POST["drugi"]> 10){
        echo $_POST["pierwszy"]/$_POST["drugi"];
    }elseif(@$_POST["pierwszy"] > 10 && @$_POST["drugi"] < 10 || @$_POST["pierwszy"] < 10 && @$_POST["drugi"] > 10){
        echo $_POST["pierwszy"]-$_POST["drugi"];
    }elseif(@$_POST["pierwszy"] < 10 || @$_POST["drugi"] < 10){
        echo @$_POST["pierwszy"]*@$_POST["drugi"];
    }else{
        echo $_POST["pierwszy"]+$_POST["drugi"];
    }
};


?>