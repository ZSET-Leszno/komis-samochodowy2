<?php
    session_start();
    require_once("conn.php");

    // Wylogowanie
    
    if(isset($_GET['wyl'])){
        session_destroy();
        header("Location: catalog.php");
    }
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
        <a href="glowna.php" id="Home" class="active" onclick="claser()">Home</a>
        <a href="#info" id="About" onclick="claser()">About</a>
        <a href="index.html">Contact</a>
        <a href="index.html">Catalog</a>
        <?php
            if((isset($_SESSION['loged'])) && ($_SESSION['loged'] == true)){
                echo"<a href='catalog.php?wyl=1'>Wyloguj</a>";
            }
            else{
                echo " <a href='rejestracja.php'>Login</a>";
            }
        ?>
        <a href="Filtry" onclick="filtry_r()">Filtry</a>
        <!-- dodać liste rozwijana filtrow w menu mobilnym -->
    </div>
    <nav>
        <span>
            <section id="logo">
                <h1><i>DealerShip</i></h1>
            </section>

            <section id="fit">
                <div class="pz"><a href="glowna.php">Home</a></div>
                <div class="pz"><a target="_blank" href="#">About</a></div>
                <div class="pz"><a href="#">Contact</a></div>
                <div class="pz"><a href="#">Catalog</a></div>
                
                <?php
                    if((isset($_SESSION['loged'])) && ($_SESSION['loged'] == true)){
                        echo'<div class="pz"><a href="catalog.php?wyl=1">Wyloguj</a></div>';
                    }
                    else{
                        echo '<div class="pz"><a href="rejestracja.php">Login</a></div>';
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

    <div class="Wyszukiwarka">
        <form action="" method="POST" id="Form_szukanie">
            <input type="search" name="Szukanie" placeholder=" Szukaj">
            <button id="Szukanie_button" onclick="document.getElementById('Form_szukanie').submit();"><i class="bi bi-search"></i></button>
        </form>
        <button id="Dodawanie_ogl"><a href="#">+ Dodaj Ogłoszenie</a></button>
    </div>

    <section id="katalog">
    <div id="filtry">
<!----------------------------------------FORMULARZ DO FILTRÓW I SORTOWANIA---------------------------------------->
        <form action="" method="GET">
            <div id="Cena">
                <label for="Cena">Cena od, do:</label>
                <input type="number" name="Cena_od" placeholder="PLN">
                <input type="number" name="Cena_do" placeholder="PLN"><br>
                <label for="Cena">Przebieg od, do:</label>
                <input type="number" name="przebieg_od" placeholder="Km">
                <input type="number" name="przebieg_do" placeholder="Km"><br>
                <label for="Cena">Rok produkcji od, do:</label>
                <input type="number" name="rok_od" placeholder="Rok">
                <input type="number" name="rok_do" placeholder="Rok"><br>
                <select name="marka">
                    <option value="0">Marka:</option>
                    <?php
                        $con = mysqli_connect($host, $db_user, $db_password, $db_name);
                        $marka = "SELECT * FROM marki";
                        $query = mysqli_query($con, $marka);
                        while ($auto = mysqli_fetch_assoc($query)) {
                            echo '<option value="'. $auto['Id'].'">' . $auto['Nazwa_marki'] .'</option>';
                        }
                        mysqli_close($con);
                    ?>  
                </select>
                <select name="model">
                    <option value="0">Model:</option>
                    <?php
                        $con = mysqli_connect($host, $db_user, $db_password, $db_name);
                        $marka = "SELECT * FROM modele";
                        $query = mysqli_query($con, $marka);
                        while ($auto = mysqli_fetch_assoc($query)) {
                            echo '<option value="'. $auto['Id'].'">' . $auto['Nazwa_modelu'] .'</option>';
                        }
                        mysqli_close($con);
                    ?>  
                </select>
                <select name="paliwo">
                    <option value="0">Paliwo:</option>
                    <?php
                        $con = mysqli_connect($host, $db_user, $db_password, $db_name);
                        $marka = "SELECT * FROM paliwa";
                        $query = mysqli_query($con, $marka);
                        while ($auto = mysqli_fetch_assoc($query)) {
                            echo '<option value="'. $auto['Id'].'">' . $auto['Rodzaj_paliwa'] .'</option>';
                        }
                        mysqli_close($con);
                    ?>  
                </select>
                <select name="sortowanie">
                        <option value="0">Sortuj:</option>
                        <option value="1">Najniższa cena</option>
                        <option value="2">Najwyższa cena</option>
                        <option value="3">Najniższy przebieg</option>
                        <option value="4">Najwyższy przebieg</option>
                        <option value="5">Najstarszy rocznik</option>
                        <option value="6">Najnowszy rocznik</option>
                </select>
                <input type="submit" value="Szukaj">
            </div>
        </form>
    </div>

    <?php
        try {
            $con = mysqli_connect($host, $db_user, $db_password, $db_name);
            $zapytanie = "SELECT * FROM samochody JOIN modele ON samochody.Id_model = modele.Id JOIN paliwa ON samochody.Id_paliwo = paliwa.Id JOIN marki ON modele.Id_marki = marki.Id WHERE 1 = 1";
/*---------------------------------------------FILTRY---------------------------------------------*/
            if(isset($_POST['Szukanie']) && $_POST['Szukanie'] != ""){
                $zapytanie .=" AND Nazwa_marki LIKE" ."'%".$_POST['Szukanie']."%'" ." OR Nazwa_modelu LIKE" ."'%".$_POST['Szukanie']."%'";    
            }


            if (isset($_GET["Cena_od"]) && $_GET["Cena_od"] != "") {
                $zapytanie .= " AND Cena_zl >= ". $_GET['Cena_od'];
            } 
            if (isset($_GET["Cena_do"]) && $_GET["Cena_do"] != "") {
                $zapytanie .= " AND Cena_zl <= ". $_GET['Cena_do'];
            } 
            if (isset($_GET["przebieg_od"]) && $_GET["przebieg_od"] != "") {
                $zapytanie .= " AND Przebieg_km >= ". $_GET['przebieg_od'];
            } 
            if (isset($_GET["przebieg_do"]) && $_GET["przebieg_do"] != "") {
                $zapytanie .= " AND Przebieg_km <= ". $_GET['przebieg_do'];
            } 
            if (isset($_GET["marka"]) && $_GET["marka"] != "0") {
                $zapytanie .= " AND Id_marki = ". $_GET['marka'];
            } 
            if (isset($_GET["model"]) && $_GET["model"] != "0") {
                $zapytanie .= " AND Id_model = ". $_GET['model'];
            } 
            if (isset($_GET["rok_od"]) && $_GET["rok_od"] != "") {
                $zapytanie .= " AND Rok_produkcji >= ". $_GET['rok_od'];
            } 
            if (isset($_GET["rok_do"]) && $_GET["rok_do"] != "") {
                $zapytanie .= " AND Rok_produkcji <= ". $_GET['rok_do'];
            } 
            if (isset($_GET["paliwo"]) && $_GET["paliwo"] != "0") {
                $zapytanie .= " AND Id_paliwo = ". $_GET['paliwo'];
            } 
/*---------------------------------------------SORTOWANIE---------------------------------------------*/
            if (isset($_GET["sortowanie"]) && $_GET["sortowanie"] == "1") {
                $zapytanie .= " ORDER BY Cena_zl ASC";
            }
            if (isset($_GET["sortowanie"]) && $_GET["sortowanie"] == "2") {
                $zapytanie .= " ORDER BY Cena_zl DESC";
            }
            if (isset($_GET["sortowanie"]) && $_GET["sortowanie"] == "3") {
                $zapytanie .= " ORDER BY Przebieg_km ASC";
            }
            if (isset($_GET["sortowanie"]) && $_GET["sortowanie"] == "4") {
                $zapytanie .= " ORDER BY Przebieg_km DESC";
            }
            if (isset($_GET["sortowanie"]) && $_GET["sortowanie"] == "5") {
                $zapytanie .= " ORDER BY Rok_produkcji ASC";
            }
            if (isset($_GET["sortowanie"]) && $_GET["sortowanie"] == "6") {
                $zapytanie .= " ORDER BY Rok_produkcji DESC";
            }


/*---------------------------------------------WYŚWIETLANIE OGŁOSZEŃ---------------------------------------------*/
            $query = mysqli_query($con, $zapytanie);
            echo '<div id="zamkniecie">';
            while ($auto = mysqli_fetch_assoc($query)) {
                echo '
                <div class="oferta">
                    <a href="ogloszenie.php?ogl_id='.$auto['Id_s'].'">
                        <img src="'.$auto['zdj_1'].'">
                        <div class="model">
                            <h1>'.$auto['Nazwa_marki'].' '.$auto['Nazwa_modelu'].'</h1>
                        </div>
                        <div class="dane_oferta">
                            <p class="cena">'. number_format($auto['Cena_zl'], 0, ',', ' ').' PLN</p>
                            <p>Rok produkcji: '.$auto['Rok_produkcji'].'</p>
                            <p>Pojemność skokowa (cm3): '.$auto['Pojemnosc_skokowa_cm3'].'</p>
                            <p>Paliwo: '.$auto['Rodzaj_paliwa'].'</p>
                            <button>Obserwuj</button>
                        </div>
                    </a>
                </div>
                ';
            }

            mysqli_close($con);
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    ?> 
    </section>
</html>