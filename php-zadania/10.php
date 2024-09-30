<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 10</title>
</head>
<body>
    <form action="10.php" method="POST">
        <input type="radio" name="wybieracz" value="piesek.jpg">piesek
        <input type="radio" name="wybieracz" value="kotek.jpg">kotek
        <input type="radio" name="wybieracz" value="małpka.jpg">małpka
        <br>
        <input type="submit" value="Wyświetl">
    </form>
    <br>
</body>
</html>

<?php

print("<img src='./obrazy/".$_POST["wybieracz"]."'>");