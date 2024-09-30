<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 5</title>
</head>
<body>
    <form action="5.php" method="POST">
        1. <input type="number" name="pierwszy" required/><br>
        <input type="submit">
    </form>
    <br>
</body>
</html>

<?php
if(@isset($_POST)){
    $dzielniki = [];
    for ($i=1; $i <= @$_POST["pierwszy"]; $i++) { 
        if ($_POST["pierwszy"]%$i==0){
            array_push($dzielniki, $i);
        }
    } 
    if($dzielniki == [1,$_POST["pierwszy"]]){
        print("Liczba ".$_POST["pierwszy"]." jest pierwsza");
    }else{
        print("Liczba ".$_POST["pierwszy"]." jest złożona<br>");
        print("Dzielniki: <br>");
        print_r($dzielniki);
    }
};


?>