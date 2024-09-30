<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 12</title>
</head>
<body style="font-family:'Lucida Console',monospace">
    <h2> Obliczanie funkcji kwadratowej <i>y=ax^2+bx+c</i></h2>
    <form action="12.php" method="POST">
    <b>a)</b><input type="number" name="a" required><br>
    <b>b)</b><input type="number" name="b" required><br>
    <b>c)</b><input type="number" name="c" required><br>
        <input type="submit" value="Oblicz">
    </form>
    <br>
</body>
</html>

<?php

if (@$_POST["a"]==0){
    print("Funkcja liniowa - nie można obliczyć delty");
}else{
    $delta = pow($_POST["b"],2)-4*$_POST["a"]*$_POST["c"];
    if ($delta>0) {
        $x1 = (-$_POST["b"]-sqrt($delta))/(2*$_POST["a"]);
        $x2 = (-$_POST["b"]+sqrt($delta))/(2*$_POST["a"]);
        print("dwa miejsca zerowe: ".$x1." , ".$x2);
    }elseif ($delta == 0){
        $x-$_POST["b"]/2*$_POST["a"];
        print("jedno miejsce zerowe: ".$x);
    }else{
        print("brak miejsc zerowych");
    }
}
print("<br>");
for ($i=0; $i < 100; $i++) { 
    for ($j=0; $j < 100; $j++) { 
        if ($i==50 && $j == 50) {
            print("+");
        }elseif ($i==50) {
            print("-");
        }elseif ($j==50) {
            print("|");
        }
        print("&nbsp");
    }
    print("<br>");
}