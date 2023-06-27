<?php
    $ilepytan=$_POST['ilepytan'];
    $nazwaquizu=$_POST['nazwaquizu'];
    $ktorepytanie=1;
    $pytanko="e";
    $ktoraodpowiedz=1;
    $odpowiedzi=array(4);
    $poprawneodpowiedzi=array(4);
    $pytaneczko="ee";
    while($ilepytan+1>$ktorepytanie)
    {
        $pytaneczko=$_POST["pytanie{$ktorepytanie}"];
        while($ktoraodpowiedz<5)
        {
            $pytanko="p{$ktorepytanie}o{$ktoraodpowiedz}";
            $odpowiedzi[$ktoraodpowiedz]=$_POST[$pytanko];
            $pytanko="{$pytanko}h{$ktoraodpowiedz}";
            if(isset($_POST[$pytanko])){
                $poprawneodpowiedzi[$ktoraodpowiedz]=1;
            }
            else{
                $poprawneodpowiedzi[$ktoraodpowiedz]=0;
            }
            $ktoraodpowiedz++;
        }
        echo $odpowiedzi[1];
        echo "<br>";
        require_once "connect.php";
        $polaczenie=@new mysqli($host, $db_user, $db_password, $db_name);
        if($polaczenie->query("INSERT INTO pytania VALUES('$nazwaquizu','$pytaneczko','$odpowiedzi[1]','$odpowiedzi[2]','$odpowiedzi[3]','$odpowiedzi[4]','$poprawneodpowiedzi[1]','$poprawneodpowiedzi[2]','$poprawneodpowiedzi[3]','$poprawneodpowiedzi[4]')"))
        {

        }
        $ktoraodpowiedz=1;
        $ktorepytanie++;
    }




?>