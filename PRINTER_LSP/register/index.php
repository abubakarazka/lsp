<?php

require 'proses.php';

if (isset($_POST["register"])) {
    if (tambahUser($_POST) > 0) {
        echo "
        <script type='text/javascript'>
        alert('Register berhasil silahkan login')
        window.location= '../login/index.php'
        </script>
        ";
    } else {
        echo "
        <script type='text/javascript'>
        alert('Mohon maaf, Pendaftaran gagal')
        window.location = '../register/index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Registrasi</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-5 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h2 class="judul">Daftar</h2>
                        <hr>
                        <form action="" method="post">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" placeholder="nama lengkap"><br><br>
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="username"><br><br>


                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="password"><br><br>


                            <input type="hidden" name="roles" value="Customer">

                            <button type="submit" name="register" class="btn btn-primary">Register</button>
                        </form>
                        <div class="login">
                            <small>Sudah Punya Akun? <a href="../login">Silahkan Masuk</a></small>
                        </div>
                    </div>
</body>

</html>