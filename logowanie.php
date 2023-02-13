<?php

    session_start();
    require_once("conn.php");

    $conn = @new mysqli($host,$user,$passwd,$dbname);

    if($conn->connect_errno != 0){
        echo("Error");
    }

    else{

        $login = $_POST['login'];
        $haslo = $_POST['haslo'];

        $logcheck = "SELECT * FROM dane WHERE login = '$login' and haslo = '$haslo'";

        if($result = $conn->querry($logcheck)){
            $num_users = $result->num_rows;

            if($num_users>0){
                $_SESSION['loged'] = true;
                $row = $wynik->fetch_assoc();
                echo($user = $row['Login']);
                $_SESSION['Login'] = $row['Login'];
            }
        }

        else{
            $_SESSION['blad']='<span> Nieprawidlowy login lub haslo</span>'
            header('Location: rejestracja.php');
        }

        $conn->close();
    }




?>