<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="right">
            <h2>Login</h2>
            <form method="GET" action="">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username"><br>
                
                <label for="password">Password:</label>
                <input type="password" name="password" id="password"><br>
                
                <a href=""><input type="submit" value="Login"></a>

                <div class="forget-passworld"><a href="">Forget Password?</a></div>
                <div class="register">Don't have an account? <a href="RegisterAkun.php">Register Here!</a></div>
            </form>
        </div>
    </div>
    
    <?php
    $user = @$_GET['username']; // Menangkap dari form username menggunakan method get
    $pass = @$_GET['password']; // Menangkap dari form password menggunakan method get

    // jika variable user tidak null, maka cetak username..
    if ($user) {
        echo "<strong>Username:</strong> $user <br>";
    }

    // jika variable user tidak null, maka cetak password..
    if ($pass) {
        echo "<strong>Password:</strong> $pass <br>";
    }
    ?>
</body>
</html>
