<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
/*****************
example code akses table oracle
contoh table BARANG dengan kolom sbb :
NOMOR NUMBER(10)
NAMA_BARANG VARCHAR2(100)
STOK NUMBER(2)
//*****************/

include "includes/func.inc.php";

$db_user = "PA0039";
$db_pass = "399281";
$con = konekDb($db_user, $db_pass);

//*****Update Data Barang*******
$Nomor = 4; // nomor barang yang diupdate
$NamaBarang = "Gula Merah 1 Kg";
$Stok = 9;
//**************

$sql = "UPDATE barang SET nama_barang=:v2,stok=:v3 WHERE nomor=:v1";
$data = array(
    ':v1' => $Nomor,
    ':v2' => $NamaBarang,
    ':v3' => $Stok
);
$hasil = query_update($con, $sql, $data);

echo "Status Transaksi : $hasil";
?>
</body>
</html>
