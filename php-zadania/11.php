<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 11</title>
</head>
<body>
    <form action="11.php" method="POST">
        Imie <input type="text" required name="imie"><br>
        Nazwisko <input type="text" required name="nazwisko"><br>
        Klasa <select name="klasa">
            <option value="pierwszej">pierwsza</option>
            <option value="drugiej">druga</option>
            <option value="trzeciej">trzecia</option>
            </select>
        <input type="submit" value="Wyświetl"> <input type="reset" value="Czyść">
    </form>
    <br>
</body>
</html>

<?php
if (@$_POST["imie"]!=""){
    print("Witaj ".$_POST["imie"]." ".$_POST["nazwisko"]." jesteś uczniem klasy ".$_POST["klasa"]);
}
