<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 7</title>
</head>
<body>
    <form action="7.php" method="POST">
        Liczba <input type="number" name="p" required/><br>
        <input type="submit">
    </form>
    <br>
</body>
</html>

<?php
    if(isset($_POST)){
        $wynik = 1;
        for (@$i=$_POST["p"]; $i > 0 ; $i-=2) { 
            $wynik*=$i;
        }
    }
    if ($wynik != 1){
        print($wynik);
    }



?>