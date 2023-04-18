<?php
    session_start();
    require_once("conn.php");

    // Wylogowanie
    
    if(isset($_GET['wyl'])){
        session_destroy();
        header("Location: glowna.php");
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
    <script src="https://www.momentcrm.com/embed%22%3E"></script>
    <script>
        MomentCRM('init', {
            'teamVanityId': 'caro',
            'doChat': true,
            'doTracking': true,
        });
    </script>
</head>
<body>
<!-- menu -->
<div id="sidenav">
        <a href="glowna.php" id="Home" class="active" onclick="claser()">Główna</a>
        <a href="glowna.php#info" id="About" onclick="claser()">O nas</a>
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
                <h1><i>CARO</i></h1>
            </section>

            <section id="fit">
                <div class="pz"><a href="glowna.php">Główna</a></div>
                <div class="pz"><a href="glowna.php#info">O nas</a></div>
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
<!-- baner -->
    <div class="baner">
        <article id="text">
            <div>
                <span>
                    <p>DealerShip</p>
                    <h1>Przyszłość motoryzacji jest właśnie tutaj.</h1>
                </span>
                <a href="glowna.php#info"><button>Więcej informacji</button></a>
            </div>
        </article>
    </div>
<!-- info -->
    <section id="info">
        <div class="d-flex flex-row">
            <div class="tile">
                <div class="d-flex flex-row justify-content-evenly flex-shrink-1">
                    <h2><a href=""><i class="bi bi-telephone-fill"></i></a></h2>
                    <h3>123 456 789</h3>
                </div>
                <p>W razie pytań skontaktuj się z nami pod podanym numerem</p>
            </div>

            <div class="tile">
                <div class="d-flex flex-row justify-content-evenly">
                    <h2><a href=""><i class="bi bi-calendar-event"></i></a></h2>
                    <h3>Zarezerwuj wizytę</h3>
                </div>
                <p>Zarezerwuj swoją wizytę na wybraną godzinę i dzień</p>
            </div>

            <div class="tile">
                <div class="d-flex flex-row justify-content-evenly">
                    <h2><a href=""><i class="bi bi-geo-alt-fill"></i></a></h2>
                    <h3>Znajdź nas tutaj</h3>
                </div>
                <p>Nasz salon samochodowy możesz znaleźć pod tym adresem</p>
            </div>
            
            <div class="tile_2 d-flex flex-row align-middle justify-content-center align-items-center">
                <div class="d-flex flex-row justify-content-evenly display-6 align-middle">
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-youtube"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                    <a href=""><i class="bi bi-discord"></i></a>
                </div>
            </div>
        </div>
    </section>
    <main>
        <h1>Lorem <span>Ipsum</span> Dolor!</h1>

        <div id="cz1" class="d-flex flex-column col-12 .container-fluid align-items-center">
            <p class="col-6"><span class="d-grid gap-5 mb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur quibusdam accusamus porro officiis provident cumque unde doloremque in dolorem praesentium molestias repellat, quia voluptates rerum numquam dolor eum explicabo dignissimos. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem cupiditate odio dolorum. Voluptatem dicta hic iusto! Ratione, dicta!Molestias quaerat beatae perferendis magni vel corporis! Possimus error reiciendis ratione iste? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, fugiat!</span> Facere animi soluta dicta ea, natus a deserunt nisi aperiam repudiandae doloribus placeat dolorum corporis eaque modi quis vel sint. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis natus fugiat modi fuga, assumenda, illo atque vitae explicabo suscipit dolorum laboriosam nisi, ipsum harum alias impedit expedita labore repellat dolore!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur quibusdam accusamus porro officiis provident cumque unde doloremque in dolorem praesentium molestias repellat, quia voluptates rerum numquam dolor eum explicabo dignissimos. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem cupiditate odio dolorum. Voluptatem dicta hic iusto! Ratione, dicta! Molestias quaerat beatae perferendis magni vel corporis! Possimus error reiciendis ratione iste? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, fugiat! Facere animi soluta dicta ea, natus a deserunt nisi aperiam repudiandae doloribus placeat dolorum corporis eaque modi quis vel sint. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis natus fugiat modi fuga, assumenda, illo atque vitae explicabo suscipit dolorum laboriosam nisi, ipsum harum alias impedit expedita labore repellat dolore!</p>
        </div>

        <section id="prezentacja" class="d-flex flex-column flex-nowrap align-items-center col-12">
            <h1>Lorem <span>Ipsum</span> Dolor!</h1>
            <div class="d-flex justify-content-center col-9 flex-wrap gap-3 m-5">
                <div class="obraz col-5 "><a href="catalog.php?paliwo=1">Samochody Benzynowe</a></div>
                <div class="obraz2 col-5 "><a href="catalog.php?paliwo=4">Samochody Diesla</a></div>
                <div class="obraz3 col-5 "><a href="catalog.php?paliwo=5">Samochody Elektryczne</a></div>
                <div class="obraz4 col-5 "><a href="catalog.php?paliwo=7">Samochody Hybrydowe</a></div>
            </div>
        </section>
    </main>
    <!-- zdj jasniejsze i kolor czcionki na czarny -->
    <footer>
        <div>
            <h4>Godziny otwarcia</h4>
            <div>
                <div>
                    <p>Poniedziałek</p>
                    <p>Wtorek</p>
                    <p>Środa</p>
                    <p>Czwartek</p>
                    <p>Piątek</p>
                    <p>Sobota</p>
                    <p>Niedziela</p>
                </div>
                <div>
                    <p>8:00 - 18:00</p>
                    <p>8:00 - 18:00</p>
                    <p>8:00 - 18:00</p>
                    <p>8:00 - 18:00</p>
                    <p>8:00 - 18:00</p>
                    <p>9:00 - 15:00</p>
                    <p>Zamknięte</p>
                </div>
            </div>
        </div>
        <div>
            <h4>Dane kontaktowe</h4>
            <p>DealerShip</p>
            <p>ul. Jana Kilińskiego 4</p>
            <p>64-100 Leszno</p>
            <p>tel. 123456789</p>
        </div>
        <div>
            <h4>Przydatne informacje</h4>
            <a href="#">FAQ</a>
            <a href="#">Polityka prywatności</a>
            <a href="#">Regulamin strony</a>
        </div>
    </footer>
    <div id="copyright">
        Wszelkie prawa zastrzeżone &copy;
    </div>
</body>
</html>