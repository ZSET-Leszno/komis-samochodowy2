<?php
    session_start();
    require_once("conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <script async src="index.js"></script>
    <script async src="claser.js"></script>
</head>
<body>
<!-- menu -->
    <div id="sidenav">
        <a href="index.html" id="Home" class="active" onclick="claser()">Home</a>
        <a href="#info" id="About" onclick="claser()">About</a>
        <a href="index.html">Contact</a>
        <a href="index.html">Catalog</a>
        <a href="rejestracja.php">Login</a>
    </div>
    <nav>
        <span>
            <section id="logo">
                <h1><i>DealerShip</i></h1>
            </section>

            <section id="fit">
                <div class="pz"><a href="index.html">Home</a></div>
                <div class="pz"><a target="_blank" href="#">About</a></div>
                <div class="pz"><a href="#">Contact</a></div>
                <div class="pz"><a href="#">Catalog</a></div>
                <div class="pz"><a href="rejestracja.php">Login</a></div>
            </section>
            <div id="toggler" onclick="openNav()">
                <div class="strap"></div>
                <div class="strap"></div>
                <div class="strap"></div>
            </div>
        </span>
    </nav>
<!-- baner -->
    <div class="baner">
        <article id="text">
            <div>
                <span>
                    <p>Lorem ipsum dolor!</p>
                    <h1>Lorem ipsum dolor sit, amet consectetur.</h1>
                </span>
                <a href="#info"><button>More info</button></a>
            </div>
        </article>
    </div>
    <section id="katalog">
    <div id="filtry">FILTRY I SORTOWANIE</div>
    <?php
        
        $con = @new mysqli($host, $db_user, $db_password, $db_name);
        if(!$con){
            echo("nie działa");
        } else{
            echo('dziala');
            $wynik = mysqli_query($con, "SELECT * FROM samochody");
            echo '<div id="zamkniecie">';
            while($rekord = mysqli_fetch_array($wynik)){
                if($rekord["Id_paliwo"] == 1){
                    $paliwo = "Benzyna";
                } else{
                    $paliwo = "Diesel";
                }
                echo '<div class="oferta">';
                echo '<img src="'.($rekord['zdj_1']).'">';
                echo '<div class="model"></div>';
                echo'<div class="dane_oferta"><p class="cena">'."Cena: ".$rekord["Cena_zl"]." PLN".'</p><p>'."Rok produkcji: ".$rekord["Rok_produkcji"].'</p>
                <p>'."Pojemność skokowa (cm3): ".$rekord["Pojemnosc_skokowa_cm3"].'</p><p>'."Paliwo: ".$paliwo.'</p><button>Obserwuj</button></div>';
                echo '</div>';
                
            }
            echo '</div>';
        }

    ?>
    </section>
</html>