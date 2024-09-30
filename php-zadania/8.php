<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 8</title>
</head>
<body>
    <form action="8.php" method="POST">
        Podaj liczby parzyste całkowite:<br>
        A) <input type="number" name="a" required/><br>
        B) <input type="number" name="b" required/><br>
        <input type="submit">
    </form>
    <br>
</body>
</html>

<?php
    if(isset($_POST)){
        if(@$_POST["a"]%2==0 && @$_POST["b"]%2==0){
            $a = min(@$_POST["a"],@$_POST["b"]);
            $b = max(@$_POST["a"],@$_POST["b"]);
            $wynik = 0;
            for ($i=$a; $i <= $b; $i+=2) { 
                $wynik+=$i;
            }
            print($wynik);
        }else{
            print("Liczba a lub b jest nieparzysta");
        }
        
    }



?>