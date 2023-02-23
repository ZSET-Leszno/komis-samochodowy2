<?php

    $login = $_POST['login_r'];
    $email = $_POST['email_r'];
    $passwd = $_POST['passwd_r'];
    $email_sanitized = filter_var($email,FILTER_SANITIZE_EMAIL);
    $e = true;

    if(!$_POST['login_r']){
        echo("Podaj login<br>");
        $e=false;
    }

    if(!$_POST['email_r']){
        echo("Podaj email<br>");
        $e=false;
        
    }
    

    if(!$_POST['passwd_r']){
        echo("Podaj haslo<br>");
        $e=false;

    }

    if(($_POST['passwd_r']) && ($_POST['email_r']) && ($_POST['login_r'])){
        // sprawdzenie znaków w loginie
        if(ctype_alnum($login)==false){
            echo("login moze zawierać tylko polskie znaki litery i cyfry<br>");
            $e=false;
        }
        // walidacja adresu email
        if((filter_var($email_sanitized,FILTER_VALIDATE_EMAIL)==false) || ($email_sanitized != $email)){
            echo("Podaj poprawny adres email<br>");
            $e=false;
        }

        if(strlen($passwd)<8){
            echo("Hasło musi mieć minimum 8 znaków<br>");
            $e=false;
        }

        //. hashowanie hasła
        $passwd_hash = password_hash($passwd,PASSWORD_DEFAULT);

        // połączenie z bazą danych

        require_once "conn.php";

        try{
            $con = new mysqli($host, $db_user, $db_password, $db_name);
            if($con->connect_errno != 0){
                throw new Exception(mysqli_connect_errno());
                $e=false;
            }

            else{
                // sprawdzenie czy mail jest w bazie
                $zapytanie = $con->query("SELECT id FROM uzytkownicy WHERE Email LIKE '$email'");

                if(!$zapytanie){
                    throw new Exception($zapytanie->error);
                    $e=false;
                }

                else{
                    $ilosc_maili = $zapytanie->num_rows;
                    
                    if($ilosc_maili > 0){
                        echo("Podany email jest juz zajęty");
                        $e=false;
                    }
                }

                // sprawdzanie czy login jest w bazie
                
                $zapytanie = $con->query("SELECT id FROM uzytkownicy WHERE Logd LIKE '$login'");

                if(!$zapytanie){
                    throw new Exception($zapytanie->error);
                    $e=false;
                }

                else{
                    $ilosc_loginow = $zapytanie->num_rows;
                    
                    if($ilosc_loginow > 0){
                        echo("Podany login jest juz zajęty");
                        $e=false;
                    }
                }

                // działa
                if($e == true){
                    if($con->query("INSERT INTO uzytkownicy VALUES(NULL,'$login','$passwd_hash','$email')")){
                        echo("dziala");
                        exit();
                    }
                    else {
                        throw new Exception($con->error);
                    }
                    
                }
        



                $con->close();
            }


        }
        catch(Exception $error){
            echo("Błąd serwera");
            // echo("Info dla developera".$error)

        }

    }

?>