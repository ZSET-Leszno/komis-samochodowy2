<?php

    session_start();    
    // if((isset($_SESSION['loged'])) && ($_SESSION['loged'] == true)){
    //     header("Location: index.php");
    //     exit();
    // }

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
            <form action="#">
                <h1>Zarejestruj się</h1>
                <br>
                <input type="text" placeholder="Login" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Hasło" />
                <button>Zarejestruj</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="logowanie.php" method="post">
                <h1>Zaloguj się</h1>
                <br>
                <input type="text" placeholder="Login" name="login" />
                <input type="password" placeholder="Hasło" name="haslo"/>
                <a href="#">Zapomniałeś hasła?</a>
                <button>Zaloguj</button>
            </form>
            <?php
                
                if(isset($_SESSION['blad'])){
                    echo( $_SESSION['blad']);
                    unset($_SESSION['blad']);
                }
                
            ?>
            
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Witamy spowrotem!</h1>
                    <p>
                        Aby pozostać z nami w kontakcie, zaloguj się za pomocą swoich danych osobowych</p>
                    <button class="ghost" id="signIn">Zaloguj się</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Witaj!</h1>
                    <p>Podaj swoje dane osobowe i rozpocznij <br>z nami podróż</p>
                    <button class="ghost" id="signUp">Zarejestruj się</button>
                    <script src="javareje.js"></script>
                </div>
            </div>
        </div>
        </div>
</body>
</html>