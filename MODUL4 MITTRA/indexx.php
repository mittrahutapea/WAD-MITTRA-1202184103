<?php
session_start();
include ("config.php");
if (isset($_SESSION['email'])) {
    
} 
else {
    header("Location: login.php");
}
if (!empty($_COOKIE['navbar'])) {
    $navbar = $_COOKIE['navbar'];
} else {
    $navbar = 'light';
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Home</title>
</head>

<body class="bg-<?= $navbar; ?>" >
<nav class="navbar navbar-expand-lg navbar navbar navbar-<?= $navbar; ?>">
    <a class="navbar-brand text-dark" href="indexx.php">WAD Beauty</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span></button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav font-weight-bold ml-auto mt-2 mt-lg-0">
            <li class="nav-item d-flex align-items-center mr-2">
                <!-- cart icon -->
                <a href="cart.php">
                    <img src="gambar/cart.png" width="50px" alt="cart">                </a>
            </li>
            <!-- dropdown -->
            <li class="nav-item dropdown mr-4"> 
                <a class="nav-link dropdown-toggle font-weight-normal text-dark" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Selamat Datang,<span class="text-primary">
                    <?= $_SESSION['nama']; ?>
                    </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="profile.php">Profile</a>
                    <a class="dropdown-item" href="config.php?logout=yes">Logout</a>
                </div>
            </li>
            <!-- dropdown -->
        </ul>
    </nav>

<!-- SESSION MESSAGE -->
    <?php if (isset($_SESSION['message'])) : ?>
        <div class='alert alert-warning alert-dismissible fade show fade in' role='alert'>
            <?= $_SESSION['message']; ?>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>
    <?php
        unset($_SESSION['message']);
    endif;
    ?>
<!-- SESSION MESSAGE -->

<!-- CARD -->
    <div class="container mt-3">
        <div class="jumbotron jumbotron-fluid py-4 bg-gradient-primary mb-0" style="background-image: linear-gradient(to right, #35DCE5 , #FFEA85);">
            <div class="container text-center">
                <h1 class="display-4">WAD Beauty</h1>
                <p class="lead">Tersedia Skin Care dengan harga murah tapi bukan murahan dan berkualitas</p>
            </div>
        </div>

        <div class="card-group mb-2">
            <div class="card">
                <img src="gambar/yuja.jpeg" class="card-img-top" alt="Yuja Niacin">
                <div class="card-body">
                    <h5 class="card-title">YUJA NIACIN 30 DAYS BLEMISH CARE SERUM</h5>
                    <p class="card-text">Produk terbaru dari somebymi yang memiliki manfaat untuk Whitening + blemish care + Anti-wrinkle, sangat recomended untuk masalah kulit kusam, kulit kering dan berkas jerawat atau FLEK hitam</p>
                    <hr>
                    <h6>Rp169.000</h6>
                </div>
                <div class="card-footer">
                    <a href="config.php?produk=Yuja Niacin&harga=169000" type="submit" class="btn btn-primary btn-block" role="button">Tambahkan ke Keranjang</a>
                </div>
            </div>
            <div class="card">
                <img src="gambar/some by mi.jpeg" class="card-img-top" alt="Snail Truecica">
                <div class="card-body">
                    <h5 class="card-title">SOMEBYMI Snail Truecica Miracle Repair Cream</h5>
                    <p class="card-text">Sebagai pelembap, krim ini mampu memberikan kelembapan yang menyeluruh dan tahan lama bagi kulit, sehingga terasa halus, lembap dan kenyal. Mencerahkan, menghambat penuaan seperti keriput dan garis halus, juga menenangkan kulit yang iritasi, dengan kandungan 420,000ppm Snail Truecica.</p>
                    <hr>
                    <h6>Rp180.000</h6>
                </div>
                <div class="card-footer">   
                    <a href="config.php?produk=Snail Truecica&harga=180000" type="submit" class="btn btn-primary btn-block" role="button">Tambahkan ke Keranjang</a>
                </div>
            </div>
            <div class="card">
                <img src="gambar/some by mi toner.jpeg" class="card-img-top" alt="Miracle Toner">
                <div class="card-body">
                    <h5 class="card-title">30 DAYS MIRACLE TONER</h5>
                    <p class="card-text">Dengan kandungan AHA, BHA, dan PHA bekerja secara efektif untuk membuat kulit lebih bersih dan lebih bersinar, mengandung 10.000 ppm ekstrak pohon teh alami secara efektif meningkatkan elastisitas dan menutrisi kulit Anda tanpa efek iritasi karena tidak mengandung 20 bahan 500 dan pewarna berbahaya</p>
                    <hr>
                    <h6>Rp108.000</h6>
                </div>
                <div class="card-footer">
                    <a href="config.php?produk=Miracle Toner&harga=108000" type="submit" class="btn btn-primary btn-block" role="button">Tambahkan ke Keranjang</a>
                </div>
            </div>
        </div>

    </div>

<!-- Footer -->
<footer class="page-footer container-fluid font-small">
    <div class="footer-copyright text-center py-3">©2020 Copyright: <a href="index.php">WAD Beauty</a></div>
</footer>
<!-- Footer -->

<!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>