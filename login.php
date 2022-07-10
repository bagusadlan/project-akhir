<?php

    include 'includes/func.inc.php';

    $u="idris@pens.ac.id";
    $p="rahasia";

    $header=array("netid: $u","password: ".base64_encode($p));
    $data = curl_init();
    curl_setopt($data, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($data, CURLOPT_HTTPHEADER, $header);
    curl_setopt($data, CURLOPT_URL, "https://login.pens.ac.id/auth/");
    curl_setopt($data, CURLOPT_TIMEOUT, 9);

    $hasil = curl_exec($data);
    curl_close($data);

    echo $hasil;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
</body>
</html>