<?php

function sayHello($nama, $alamat) {
    return "Hallo nama saya $nama saya tinggal di $alamat";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP DIKIT</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <h1><?php echo sayHello('Udin', 'Lengkong'); ?></h1>
    <p>Lorem</p>
    <ul>
        <li>ok</li>
    </ul>
</body>
</html>