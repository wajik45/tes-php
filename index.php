<?php

function sayHello($nama, $alamat) {
    return "Hallo nama saya $nama saya tinggal di $alamat";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP DIKIT</title>
</head>
<body>
    <h1><?php echo sayHello('Udin', 'Lengkong'); ?></h1>
    <p>Lorem</p>
</body>
</html>