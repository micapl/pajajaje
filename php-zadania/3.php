<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 3</title>
</head>
<body>
    <form action="3.php" method="POST">
        1. <input type="number" name="miesiac" required/><br>
        <input type="submit">
    </form>
    <br>
</body>
</html>

<?php
if(isset($_POST) && array_key_exists("miesiac", $_POST)){
    switch ($_POST["miesiac"]) {
        case 1:
            echo "styczeń";
            break;
        case 2:
            echo "luty";
        break;
        case 3:
            echo "marzec";
            break;
        case 4:
            echo "kwiecień";
        break;
        case 5:
            echo "maj";
            break;
        case 6:
            echo "czerwiec";
            break;
        case 7:
            echo "lipiec";
            break;
        case 8:
            echo "sierpień";
            break;
        case 9:
            echo "wrzesień";
            break;
        case 10:
            echo "październik";
            break;
        case 11:
            echo "listopad";
            break;
        case 12:
            echo "grudzień";
            break;
        default:
            echo "numer nie jest poprawną wartością miesiąca";
            break;
    }
};


?>