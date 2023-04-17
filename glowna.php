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
</head>
<body>
<!-- menu -->
<div id="sidenav">
        <a href="glowna.php" id="Home" class="active" onclick="claser()">Home</a>
        <a href="#info" id="About" onclick="claser()">About</a>
        <a href="index.html">Contact</a>
        <a href="catalog.php">Catalog</a>
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
                <div class="pz"><a href="catalog.php">Catalog</a></div>
                
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
<!-- info -->
    <section id="info">
        <div class="d-flex flex-row">
            <div class="tile">
                <div class="d-flex flex-row justify-content-evenly flex-shrink-1">
                    <h2><a href=""><i class="bi bi-telephone-fill"></i></a></h2>
                    <h3>723 871 522</h3>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="tile">
                <div class="d-flex flex-row justify-content-evenly">
                    <h2><a href=""><i class="bi bi-calendar-event"></i></a></h2>
                    <h3>Book your visit</h3>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="tile">
                <div class="d-flex flex-row justify-content-evenly">
                    <h2><a href=""><i class="bi bi-geo-alt-fill"></i></a></h2>
                    <h3>Find us here</h3>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
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
                <div class="obraz col-5 "><a href="">LOREM</a></div>
                <div class="obraz col-5 "><a href="">LOREM</a></div>
                <div class="obraz col-5 "><a href="">LOREM</a></div>
                <div class="obraz col-5 "><a href="">LOREM</a></div>
            </div>
        </section>
    </main>
    <!-- zdj jasniejsze i kolor czcionki na czarny -->
    <footer>
        
    </footer>
</body>
</html>