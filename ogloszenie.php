<?php
    session_start();
    require_once("conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script async src="index.js"></script>
    <script async src="claser.js"></script>
    <title>Document</title>
    <script src="https://www.momentcrm.com/embed%22%3E"></script>
</head>
<body style="background-color: #201c2b;">
<!-- menu -->
<!-- menu -->
<div id="sidenav">
        <a href="glowna.php" id="Home" class="active" onclick="claser()">Główna</a>
        <a href="#info" id="About" onclick="claser()">O nas</a>
        <a href="catalog.php">Kontakt</a>
        <a href="catalog.php">Katalog</a>
        <?php
            if((isset($_SESSION['loged'])) && ($_SESSION['loged'] == true)){
                echo"<a href='catalog.php?wyl=1'>Wyloguj</a>";
            }
            else{
                echo " <a href='rejestracja.php'>Login</a>";
            }
        ?>
        <!-- dodać liste rozwijana filtrow w menu mobilnym -->
    </div>
    <nav>
        <span>
            <section id="logo">
                <h1><i>DealerShip</i></h1>
            </section>

            <section id="fit">
                <div class="pz"><a href="glowna.php">Główna</a></div>
                <div class="pz"><a href="glowna.php#info">O nas</a></div>
                <div class="pz"><a href="#">Kontakt</a></div>
                <div class="pz"><a href="catalog.php">Katalog</a></div>
                
                <?php
                    if((isset($_SESSION['loged'])) && ($_SESSION['loged'] == true)){
                        echo'<div class="pz"><a href="catalog.php?wyl=1">Wyloguj</a></div>';
                    }
                    else{
                        echo '<div class="pz"><a href="rejestracja.php">Zaloguj</a></div>';
                    }
                ?>
            </section>
            <div id="toggler" onclick="openNav()">
                <div class="strap"></div>
                <div class="strap"></div>
                <div class="strap"></div>
            </div>
        </span>
    </nav>
    <?php

        $con = mysqli_connect($host, $db_user, $db_password, $db_name);
        $marka = "SELECT * FROM paliwa";
        $query = mysqli_query($con, $marka);
        while ($auto = mysqli_fetch_assoc($query)) {
            
        }
            mysqli_close($con);
        


        $con = mysqli_connect($host, $db_user, $db_password, $db_name);
        $marka = "SELECT * FROM kolory";
        $query = mysqli_query($con, $marka);
        while ($auto = mysqli_fetch_assoc($query)) {
        }
            mysqli_close($con);
        ?>
    <?php
    
        $con = mysqli_connect($host, $db_user, $db_password, $db_name);
        $zapytanie = "SELECT * FROM samochody JOIN modele ON samochody.Id_model = modele.Id JOIN skrzynie_biegow ON skrzynie_biegow.Id = samochody.Id_skrzynia_biegow JOIN kolory ON kolory.Id = samochody.Id_kolor JOIN paliwa ON samochody.Id_paliwo = paliwa.Id JOIN marki ON modele.Id_marki = marki.Id WHERE Id_s =" .$_GET['ogl_id'];
        $wynik = mysqli_query($con,$zapytanie);
        $auto = mysqli_fetch_assoc($wynik);
    
    
        echo'
            <section id="Zdjecia_main">
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" style="margin-bottom:1rem ;">
                    <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="'.$auto['zdj_1'].'" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="'.$auto['zdj_2'].'" class="d-block w-100" alt="...">
                
                    </div>
                    <div class="carousel-item">
                        <img src="'.$auto['zdj_3'].'" class="d-block w-100" alt="...">
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev" style="border:0; background-color: rgba(255, 255, 255, 0.247);">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next" style="border:0; background-color: rgba(255, 255, 255, 0.247);">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"></span>
                    </button>
                </div>
            </section>';
        echo'
            <section id="Specyfikacja">
                <h1>'.$auto['Nazwa_marki'].' '.$auto['Nazwa_modelu'].'</h1>
                <div id="Spec_fiter">
                    <div>
                        <p>Moc:</p>
                        <p>Pojemnosc skokowa cm3:</p>
                        <p>Przebieg km:</p>
                        <p>Paliwo:</p>
                        <p>Rok produkcji:</p>
                        <p>Liczba drzwi:</p>
                        <p>Kolor:</p>
                        <p>Skrzynia biegów:</p>
                    </div>
                    
                    <div>
                        <p>'.$auto['Moc_KM'].' KM</p>
                        <p>'.$auto['Pojemnosc_skokowa_cm3'].'</p>
                        <p>'.$auto['Przebieg_km'].'</p>
                        <p>'.$auto['Rodzaj_paliwa'].'</p>
                        <p>'.$auto['Rok_produkcji'].'</p>
                        <p>'.$auto['Liczba_drzwi'].'</p>
                        <p>'.$auto['Kolor'].'</p>
                        <p>'.$auto['Skrzynia_biegow'].'</p>
                    </div>
                </div>
            </section>
            <section id="Specyfikacja_2">
                <h1>Opis:</h1>
                <div id="Spec_fiter">
                    <div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum, veniam quam repellat illo perferendis, in doloremque, tempora blanditiis pariatur ut dolorum vero voluptatibus natus quibusdam voluptate nostrum neque id quas!Lorem</p>
                    </div>
            </section>
            <div id="Zakup">
                <h1>Cena: '.number_format($auto['Cena_zl'], 0, ',', ' ').' PLN</h1>';


                if((isset($_SESSION['loged'])) && ($_SESSION['loged'] == true)){
                    echo'<a href="catalog.php"><button>Zadzwoń</button></a>';
                }
                else{
                    echo '<a href="rejestracja.php"><button>Zadzwoń</button></a>';
                }

            echo'       
                </div>
                </section>';
    ?>
    <footer>
    <script>
        MomentCRM('init', {
            'teamVanityId': 'caro',
            'doChat': true,
            'doTracking': true,
        });
    </script>
    </footer>
</body>
</html>