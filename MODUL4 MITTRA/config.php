<?php

if (!isset($_SESSION)) {
    session_start();
}
$conn = mysqli_connect("localhost", "root", "", "wad_modul4");

if (!$conn) {
    echo "  <script>
                alert('Failed to Connect Database');
            </script>";

    die("connection failed." . mysqli_connect_error());
}


if (!empty($_GET['logout'])) {
    if ($_GET['logout'] == 'yes') {
        $_SESSION['message'] = 'Berhasil LOGOUT';
        header("Location: login.php");
        
        exit;
    }
}

// REGISTRASI
function registrasi($request)
{
    global $conn;
    $nama = $request['nama'];
    $email = $request['email'];
    $no_hp = $request['nohp'];
    $password = mysqli_real_escape_string($conn, $request['pass']);
    $passwordConfirm = mysqli_real_escape_string($conn, $request['passconf']);

    // mengecek email
    $emailCek = "SELECT email FROM user WHERE email='$email'";
    $select = mysqli_query($conn, $emailCek);

    if (!mysqli_fetch_assoc($select)) {
        
        if ($password == $passwordConfirm) {
            
            $query = "INSERT INTO user VALUES ('', '$nama', '$email', '$no_hp', '$password')";
            mysqli_query($conn, $query);

            $_SESSION['message'] = 'Berhasil registrasi';

            return mysqli_affected_rows($conn);
        }else{
            $_SESSION['message'] = "Password tidak sama!";
        }
    }else{
        $_SESSION['message'] = 'GAGAL!!';
        
        header("Location: register.php");
    }
}

// LOGIN//
function login($request)
{
    global $conn;
    $email = $request['emaill'];
    $password = $request['pass'];

    $emailCek = "SELECT * FROM user 
    WHERE email= '$email'";
    $select = mysqli_query($conn, $emailCek);

    if (mysqli_num_rows($select)==1) {
        $result = mysqli_fetch_assoc($select);

        if ($password == $result['password']) {
            $_SESSION['id'] = $result['id'];
            $_SESSION['nama'] = $result['nama'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['nohp'] = $result['no_hp'];
        
            // cookies
            if (is_null($request['remember'])) {
                setcookie('email', '', time() - 1);
                setcookie('password', '', time() - 1);
                setcookie('remember', '', time() - 1);
            } else {
                setcookie("email", $email);
                setcookie("password", $password);
                setcookie("remember", "checked");
            }
            
            header("Location: indexx.php");
        }else{
            $_SESSION['message'] = 'password salah';
        }
    }else{
        $_SESSION['message'] = 'HAYOLO GAGAL';
    }
}

// CART
if (!empty($_GET['produk'])) {
    $user_id = $_SESSION['id'];
    $harga = $_GET['harga'];
    $produk = $_GET['produk'];

    $insert = "INSERT INTO cart VALUES ('','$user_id','$produk','$harga')";
    mysqli_query($conn, $insert);

    $_SESSION['message'] = 'Berhasil ditambah';

    header("Location: indexx.php");

    return mysqli_affected_rows($conn);
}

// DELETE
if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $delete = "DELETE FROM cart WHERE id='$id'";
    mysqli_query($conn, $delete);

    $_SESSION['message'] = "Berhasil dihapus!";

    header("Location: cart.php");

    return mysqli_affected_rows($conn);
}

function show()
{
    global $conn;

    $user_id = $_SESSION['id'];

    $select = "SELECT * FROM cart WHERE user_id='$user_id'";
    $result = mysqli_query($conn, $select);
    $carts = null;

    while ($cart = mysqli_fetch_assoc($result)) {
        $carts[] = $cart;
    }

    $totalHarga = 0;

    if (!is_null($carts)) {
        foreach ($carts as $harga) {
            $totalHarga += $harga['harga'];
        }

        return array($carts, $totalHarga);
    }
}

function update($request)
{
    global $conn;
    $id = $_SESSION['id'];
    $nama = $request['nama'];
    $no_hp = $request['no_hp'];
    $password = mysqli_real_escape_string($conn, $request['pass']);
    $password_confirm = mysqli_real_escape_string($conn, $request['passconf']);

    // mengupdate nama,nohp
    if (empty($request['pass'])) {
        $query = "UPDATE user SET nama = '$nama', no_hp = '$no_hp' WHERE id='$id'";
  
        if(!empty($request['pass'])){//mengupdate password
            
        // cek password
            if ($password == $password_confirm) {

                $query = "UPDATE user SET nama = '$nama', no_hp = '$no_hp', 'password' = '$password' WHERE id='$id'";
                
        }
    }
    }

    $_SESSION['nama'] = $nama;
    $_SESSION['no_hp'] = $no_hp;
    mysqli_query($conn, $query);

    $_SESSION['message'] = 'Berhasil diUPDATE';
    header("Location: profile.php");
    return mysqli_affected_rows($conn);
    
}

// menampilkan data profile
function profile_show()
{
    global $conn;
    $id = $_SESSION['id'];

    $select = "SELECT * FROM user WHERE id='$id'";
    $result = mysqli_query($conn, $select);

    // menampilkan data
    $profile = mysqli_fetch_assoc($result);
    
    return $profile;
}