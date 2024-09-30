<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 6</title>
</head>
<body>
    <form action="6.php" method="POST">
        Podstawa <input type="number" name="p" required/><br>
        Wykładnik <input type="number" name="w" required/><br>
        <input type="submit">
    </form>
    <br>
</body>
</html>

<?php
if(@isset($_POST)){
    if (@$_POST["w"]>=0) {
        print(pow(@$_POST["p"],@$_POST["w"]));
    }else{
        print("Wykładnik musi być większy lub równy 0");
    };
    };
    


?>