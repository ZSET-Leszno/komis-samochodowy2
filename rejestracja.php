<?php

    session_start();    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssreje.css">
    <title>logoreje</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#" onsubmit="return false">
                <div id="info" style="color:red; z-index:99;" ></div>
                <h1>Zarejestruj się</h1>
                <br>
                <input type="text" placeholder="Login" name="login_r" id="login_r"/>
                <input type="email" placeholder="Email" name="email_r" id="email_r" />
                <input type="password" placeholder="Hasło" name="passwd_r" id="passwd_r"/>
                <button onclick="nowa();">Zarejestruj</button>
            </form>
            <script>



                // Przesyłanie i odbieranie danych z test.php
                function nowa(){
                    var obkt = new XMLHttpRequest();
                    obkt.onreadystatechange=function(){
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("info").innerHTML =
                            this.responseText;
                            if(this.responseText == "dziala"){
                                // czyszczenie wartości po rejestracji
                                document.getElementById("login_r").value = "";
                                document.getElementById("email_r").value = "";
                                document.getElementById("passwd_r").value = "";
                            // Podświetlanie na czerwono zle wypelnionych pól
                            }
                            else{
                                if((this.responseText.includes("Podaj login")) || (this.responseText.includes("Podany login jest juz zajęty")) || (this.responseText.includes("login moze zawierać tylko polskie znaki litery i cyfry"))){
                                    document.getElementById('login_r').classList.add('invalid');
                                }

                                else{
                                    document.getElementById('login_r').classList.remove('invalid');
                                }

                                if((this.responseText.includes("Podaj email")) || (this.responseText.includes("Podany email jest juz zajęty")) || (this.responseText.includes("Podaj poprawny adres email"))){
                                    document.getElementById('email_r').classList.add('invalid');
                                }
                                else{
                                    document.getElementById('login_r').classList.remove('invalid');
                                }

                                if(this.responseText.includes("Podaj haslo") || (this.responseText.includes("Hasło musi mieć minimum 8 znaków"))){
                                    document.getElementById('passwd_r').classList.add('invalid');
                                }
                                else{
                                    document.getElementById('login_r').classList.remove('invalid');
                                }
                            }
                        }
                    }

                    obkt.open("Post","testt.php?",true);
                    obkt.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    obkt.send("login_r=" + document.getElementById("login_r").value+"&"+"email_r=" + document.getElementById("email_r").value+"&"+"passwd_r=" + document.getElementById("passwd_r").value);
                }
            </script>
        </div>
        <div class="form-container sign-in-container">
            <form action="logowanie.php" method="post">
            <?php
                if((isset($_SESSION['loged'])) && ($_SESSION['loged'] == true)){
                    echo"<a href='catalog.php?wyl=1'><h1>Zalogowano</h1></a>";
                }
                else{
                    echo '<h1>Zaloguj się</h1>
                                <br>
                                <input type="text" placeholder="Login" name="login" />
                                <input type="password" placeholder="Hasło" name="haslo" id="passwd"/>
                                <a href="#">Zapomniałeś hasła?</a>
                                <button>Zaloguj</button>';
                }
            ?> 
            
            </form>
            <?php
                // walidacja logowania
                if(isset($_SESSION['blad'])){
                    echo( $_SESSION['blad']);
                    echo(
                        // Podświetlanie na czerwono zle wypelnionych pól
                        "<script>
                            document.getElementById('passwd').classList.add('invalid');
                        </script>");
                    unset($_SESSION['blad']);
                }
                
            ?>
            <!---------CZYSZCZENIE REJESTRACJI I LOGOWANIA PO PRZEJSCIU----------->
            <script>
                function clean_login(){
                    document.getElementById('passwd').classList.remove('invalid');
                    document.getElementById('sesion_blad').innerHTML = "";
                }

                function clean_registration(){
                    document.getElementById('login_r').classList.remove('invalid');
                    document.getElementById('email_r').classList.remove('invalid');
                    document.getElementById('passwd_r').classList.remove('invalid');
                    document.getElementById('info').innerHTML = "";
                }
            </script>
            
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Witamy spowrotem!</h1>
                    <p>
                        Aby pozostać z nami w kontakcie, zaloguj się za pomocą swoich danych osobowych</p>
                    <button class="ghost" id="signIn" onclick="clean_registration()">Zaloguj się</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Witaj!</h1>
                    <p>Podaj swoje dane osobowe i rozpocznij <br>z nami podróż</p>
                    <button class="ghost" id="signUp" onclick="clean_login()">Zarejestruj się</button>
                    <script src="javareje.js"></script>
                </div>
            </div>
        </div>
        </div>
</body>
</html>