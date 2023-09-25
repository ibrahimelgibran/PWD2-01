<!DOCTYPE html>
<html>
<head>
    <title>Form Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="right">
            <h2>Register</h2>
            <form method="GET" action="">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username"><br>

                <label for="password">Password:</label>
                <input type="password" name="password" id="password"><br>

                <label for="matakuliah">Matakuliah:</label>
                <input type="text" name="username" id="username"><br>

                <label for="prodi">Prodi:
                    <select id="job" name="field4">
                    <optgroup label="Pilih Prodi">
                    <option value="D3 TEKNIK INFORMATIKA">D3 TEKNIK INFORMATIKA</option>
                    <option value="D3 MANAJEMENT INFORMATIKA">D3 MANAJEMENT INFORMATIKA</option>
                    <option value="S1 INFORMATIKA">S1 INFORMATIKA</option>
                    <option value="S1 TEKNIK KOMPUTER">S1 TEKNIK KOMPUTER</option>
                    </optgroup>
                </select>
                </label>
                
                
                <label for="kelas">
                Kelas :
                <input type="radio" id="kelas1" name="kelas" value="Kelas 1"> 01
                <input type="radio" id="kelas2" name="kelas" value="Kelas 2"> 02
                <input type="radio" id="kelas2" name="kelas" value="Kelas 2"> 03
                <input type="radio" id="kelas2" name="kelas" value="Kelas 2"> 04
                </label>
                
                <a href="RegisterAkun.php"><input type="submit" value="Register"></a>

                <div class="forget-passworld"><a href="">Forget Password?</a></div>
                <div class="register">Have an account? <a href="FormLogin.php">Login Here!</a></div>
            </form>
        </div>
    </div>
    
    <?php
    $user = @$_GET['username']; // Menangkap dari form username menggunakan method get
    $pass = @$_GET['password']; // Menangkap dari form password menggunakan method get
    $pass = @$_GET['matakuliah']; // Menangkap dari form matakuliah menggunakan method get
    $pass = @$_GET['prodi']; // Menangkap dari form prodi menggunakan method get
    $pass = @$_GET['kelas']; // Menangkap dari form kelas menggunakan method get
    
    // jika variable user tidak null, maka cetak username..
    if ($user) {
        echo "<strong>Username:</strong> $user <br>";
    }

    // jika variable user tidak null, maka cetak password..
    if ($pass) {
        echo "<strong>Password:</strong> $pass <br>";
    }

    // jika variable user tidak null, maka cetak matakuliah..
    if ($matakuliah) {
        echo "<strong>Password:</strong> $matakuliah <br>";
    }

    // jika variable user tidak null, maka cetak prodi..
    if ($prodi) {
        echo "<strong>Password:</strong> $prodi <br>";
    }

    // jika variable user tidak null, maka cetak kelas..
    if ($kelas) {
        echo "<strong>Password:</strong> $kelas <br>";
    }
    ?>
</body>
</html>
