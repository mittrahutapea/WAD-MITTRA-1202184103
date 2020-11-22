<?php
include ("config.php");

// if (!empty($_COOKIE['navbar'])) {
//     $navbar = $_COOKIE['navbar'];
// } else {
//     $navbar = 'light';
// }

if (isset($_POST['daftar'])) {
    registrasi($_POST);
}

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Registrasi</title>
    
</head>
<body style="background-color:powderblue;">
<nav class="navbar navbar-expand-lg navbar navbar navbar-dark bg-light">
    <a class="navbar-brand text-dark" href="#">WAD Beauty</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span></button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active">
            <a class="nav-link text-dark" href="login.php">Login <span class="sr-only">(current)</span></a>
        </li>
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active">
            <a class="nav-link text-dark" href="register.php">Register <span class="sr-only">(current)</span></a>
        </li>
    </div>
</nav>
<!-- NOTIF -->
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
<br>

<div class="container d-flex justify-content-center ">
    <div class="card w-50 shadow mb-5  rounded">
    
        <div class="card-header bg-white ml-5 mr-5" style="text-align: center;">
        <h3 class="card-title mt-4" style="text-align: center;">Registrasi</h3>
            </div>
    <div class="card-body ml-5 mr-5 ">
    <form action="" method="POST">
        <div class="form-group">
            <label for="inputAddress">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Masukkan Alamat Email">
        </div>
        <div class="form-group">
            <label for="inputAddress">No. Handphone</label>
            <input type="text" class="form-control" id="hp" name="nohp" placeholder="Masukkan Nomor Handphone">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Kata Sandi</label>
            <input type="password" class="form-control" id="pass" name="pass"  placeholder="Buat Kata Sandi">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Konfirmasi Kata Sandi</label>
            <input type="password" class="form-control" id="passconf" name="passconf" placeholder="Konfirmasi Kata Sandi">
        </div>
        
        <div class="card text-center">
        <button type="submit" class="btn justify-content-center btn-primary" name="daftar">Daftar</button>
        </div>
        <p class="text-center">Sudah punya akun? <a href="login.php">Login</a></p>
    </form>
    </div>
    </div>
    </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>