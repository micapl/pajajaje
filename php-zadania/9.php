<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 9</title>
</head>
<body>
    <form action="9.php" method="POST">
        Podaj imiona oddzielone przecinkami:<br>
        Puste pole resetuje tablicę<br>
        Konstrukcja <i>liczba.Imie</i> powoduje zmianę danego indeksu<br>
        <input type="text" name="imiona"/><br>
        <input type="checkbox" name="wyswietlanie" checked> Wyświetlanie<br>
        <input type="submit">
    </form>
    <br>
</body>
</html>

<?php
        if ($_POST["imiona"]!==""){
            if(is_numeric(explode('.',$_POST["imiona"])[0])){
                $imiona = $_SESSION["imiona"];
                $imiona[explode('.',$_POST["imiona"])[0]]=explode('.',$_POST["imiona"])[1];
                $_SESSION["imiona"] = $imiona;
            }else{
                $_SESSION["imiona"] = array_merge($_SESSION["imiona"],explode(",",$_POST["imiona"]));
            }
        }else{
            $_SESSION["imiona"] = [];
        }
        
       
        if(isset($_POST['wyswietlanie'])){
            print("Tablica imion:<br>");
            print_r($_SESSION["imiona"]);
            print("<br> Ilość imion w tablicy:");

            $licznik = 0;
            for( $i= 0; $i<count($_SESSION["imiona"]); $i++){
                if($_SESSION["imiona"][$i]!=""){
                    $licznik++;
                }
            };
            print($licznik);

            
        }



?>