<?php

    session_start();

    if((!isset($_POST['login'])) || (!isset($_POST['haslo']))){
        header("Location: rejestracja.php");
    }
    require_once("conn.php");

    $con = @new mysqli($host, $db_user, $db_password, $db_name);

    if($con->connect_errno != 0){
        echo("Error:".$con->connect_errno);
    }
    else{
        echo("or:");
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
        // ZABEZPIECZENIE
        $login = htmlentities($login,ENT_QUOTES,"UTF-8");
        $haslo = htmlentities($haslo,ENT_QUOTES,"UTF-8");

        $zapytanie = "SELECT * FROM uzytkownicy WHERE Logd='$login' AND Haslo='$haslo'";
        
        if($wynik = @$con->query($zapytanie)){
            $ilu_users = $wynik->num_rows;

            if($ilu_users>0){

                $_SESSION['loged'] = true;
                
                $row = $wynik->fetch_assoc();
                echo($user = $row['Email']);
                $_SESSION['user'] = $row['Logd'];

                //wpisac


                unset($_SESSION['blad']);
                $wynik->close();
            }
            else{
                $_SESSION['blad']='<span style="color:red;">Nieprawidlowy login lub haslo</span>';
                header('Location: rejestracja.php');
                // Dodać $_SESSION['blad'] pod logowaniem jesli issset
            }
        }

        $con->close();
    }
?>