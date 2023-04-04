<?php

    session_start();
    if((isset($_SESSION['loged'])) && ($_SESSION['loged'] == true)){
        header("Location: catalog.php");
        exit();
    }
    // Wylogowanie
    function logout(){
        if(isset($_POST['logout'])){
            session_destroy();
            header("Location: rejestracja.php");
        }
    }

    logout();

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
        // $haslo = htmlentities($haslo,ENT_QUOTES,"UTF-8");

        $zapytanie = "SELECT * FROM uzytkownicy WHERE Logd='$login'";
        mysqli_real_escape_string($con,$login);
        if($wynik = @$con->query($zapytanie)){
            $ilu_users = $wynik->num_rows;

            if($ilu_users>0){
                $row = $wynik->fetch_assoc();
                if(password_verify($haslo,$row['Haslo'])){
                    $_SESSION['loged'] = true;
                    header("Location: catalog.php");
                    $_SESSION['user'] = $row['Logd'];

                    //wpisac


                    unset($_SESSION['blad']);
                    $wynik->close();
                }
                else{
                    $_SESSION['blad']='<div style="color:red; z-index:99; ">haslo</div>';
                    header('Location: rejestracja.php');
                    // Dodać $_SESSION['blad'] pod logowaniem jesli issset
                }
            }
            else{
                $_SESSION['blad']='<div id="sesion_blad" style="color:red; z-index:99; ">Nieprawidlowy login lub haslo</div>';
                header('Location: rejestracja.php');
                // Dodać $_SESSION['blad'] pod logowaniem jesli issset
            }
        }

        $con->close();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="Post">
        <input type="submit" name="logout" value="Wyloguj">
    </form>
</body>
</html>