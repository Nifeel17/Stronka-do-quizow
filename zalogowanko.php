<?php
session_start();
    if(isset($_POST['login']) && isset($_POST['haslo'])){
        $login=$_POST['login'];
        $haslo=$_POST['haslo'];
        require_once "connect.php";
        $polaczenie=@new mysqli($host, $db_user, $db_password, $db_name);
        if($rezultat=@$polaczenie->query("SELECT * FROM uzytkownicy WHERE login='$login' AND haslo='$haslo'")){
            $row=mysqli_fetch_array($rezultat);
            $ilerezultatow=$rezultat->num_rows;
            if($ilerezultatow==1){
                $_SESSION['nazwauzytkownika']=$login;
                $_SESSION['IDuzytkownika']=$row['ID'];
                header("Location: index.php");
            }
            else{
                header("Location: zalogujsie.php");
            }
        }
    }else{
        header("Location: zalogujsie.php");
    }
?>