<?php
    session_start();
    require_once("conn.php");
    echo $_GET['ogl_id'];  
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
    <script>
        MomentCRM('init', {
            'teamVanityId': 'caro',
            'doChat': true,
            'doTracking': true,
        });
    </script>
</head>
<body style="background-color: #201c2b;">
    <!-- menu -->
    <div id="sidenav">
        <a href="index.html" id="Home" class="active" onclick="claser()">Home</a>
        <a href="#info" id="About" onclick="claser()">About</a>
        <a href="index.html">Contact</a>
        <a href="index.html">Catalog</a>
        <a href="rejestracja.php">Login</a>
        <a href="Filtry" onclick="filtry_r()">Login</a>
        <!-- dodać liste rozwijana filtrow w menu mobilnym -->
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

    <section id="Zdjecia_main">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" style="margin-bottom:1rem ;">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="wp2619698.webp" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="images.jpg" class="d-block w-100" alt="...">
          
              </div>
              <div class="carousel-item">
                <img src="breaking-bad-2008.jpg" class="d-block w-100" alt="...">
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
    </section>
    <section id="Specyfikacja">
        <h1>Model: Marka:</h1>
        <div id="Spec_fiter">
            <div>
                <p>Moc:</p>
                <p>Moc:</p>
                <p>Moc:</p>
                <p>Moc:</p>
                <p>Moc:</p>
            </div>
            
            <div>
                <p>400KM</p>
                <p>alalalalalalalalalalalalalaal</p>
                <p>Moc:</p>
                <p>Moc:</p>
                <p>Moc:</p>
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
        <h1>Cena: 555555 PLN</h1>
        <a href=""><button>Zamów</button></a>
    </div>
    </section>
    <footer>
        
    </footer>
</body>
</html>