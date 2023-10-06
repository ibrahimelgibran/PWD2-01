<?php

$username = @$_POST['username'];
$password = @$_POST['password'];

// OPSI 1
if($username){
    echo "<string>Username:</string>$username";
}

?>
<br>
<?php

if($password){
    echo "<string>Password:</string>$password";
}


// OPSI 2
/*
if (isset($_POST['username']) || isset($_POST['password'])){
    echo "WoW";
}
*/

// OPSI 3
/*
if ($username == "Gibran"){
    echo "Selamat data <string>$username</string>, di kelas Perancangan Web 2..";
} elseif ($username == "Ibrahim"){
    echo "Anda bukan Gibran, tapi Ibrahim";
} else {
    echo "Kalau $username kang ghosting";
}
*/

?>