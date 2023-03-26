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
        <a href="index.html">Login</a>
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
                <div class="pz"><a href="#">Login</a></div>
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
    <section id="katalog" class=" d-flex flex-column">
    <?php
        
        $con = @new mysqli($host, $db_user, $db_password, $db_name);
        if(!$con){
            echo("nie działa");
        } else{
            echo('dziala');
            $wynik = mysqli_query($con, "SELECT * FROM samochody");
            while($rekord = mysqli_fetch_array($wynik)){
                echo '<div class="post" style="width:60rem; height:60rem; background-repeat: no-repeat; background-image: url(\'' .'data:image;base64,'.base64_encode($rekord["zdj_1"]) . '\')">';
                // echo('<img src="data:image;base64,'.base64_encode($rekord['zdj_1']).' ">');
            }
        }

        // dopisać skrypt wyświetlający kafle html z danymi o autach z bazy (Perczak oddaj baze xD)
    ?>
    </section>
</html>