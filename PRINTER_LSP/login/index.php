<html>

<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="box">
        <h1>Toko Printer</h1>
        <h5>Hallo selamt Datang, Silahkan login </h5>
        <form action="process.php" method="post">
            <div class="lapisInput">
                <label>Username :</label>
                <input type="text" name="username" id="username">
                <br>
                <label>Password :</label>
                <input type="password" name="password" id="password">
                <br>
            </div>
            <div class="tombol-login">
                <input type="submit" name="login" value="Login">
            </div>
            <br>

        </form>
        <div class="login">
                            <small>belum punya akun?<a href="../register"> Silahkan daftar </a></small>
                        </div>
    </div>
     
</body>

</html>