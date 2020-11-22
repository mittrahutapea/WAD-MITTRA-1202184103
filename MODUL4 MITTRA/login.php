<?php
session_start();
    include ("config.php");
    
    if (isset($_POST['loginn'])) {
        login($_POST);
    }

    if (!empty($_COOKIE['remember'])) {
        $email = $_COOKIE['email'];
        $password = $_COOKIE['password'];
        $rememberMe = $_COOKIE['remember'];
    } else {
        $email = null;
        $password = null;
        $rememberMe = null;
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

    <title>Login</title>
    
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
    <div class="card w-50 shadow mb-5 bg-white rounded">
    
        <div class="card-header bg-white ml-5 mr-5" style="text-align: center;">
        <h3 class="card-title mt-4" style="text-align: center;">Login</h3>
            </div>
    <div class="card-body ml-5 mr-5 ">
    <form action="" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="email" name="emaill" aria-describedby="emailHelp" placeholder="Masukkan Alamat Email" value="<?= $email; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Kata Sandi</label>
            <input type="password" id="pass" name="pass" class="form-control" placeholder="" value="<?= $password; ?>">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" id="remember" name="remember" class="form-check-input" id="exampleCheck1" <?= $rememberMe; ?>>
            <label class="form-check-label" for="remember">Remember me</label>
        </div>
        
        <div class="card text-center">
        <button type="submit" class="btn justify-content-center btn-primary" name="loginn">Login</button>
        </div>
        <p class="text-center">Belum punya akun? <a href="register.php">Registrasi</a></p>
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