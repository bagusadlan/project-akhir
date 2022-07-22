<?php

	$db_user = "PA0026";
	$db_pass = "537577";

	$con = oci_connect($db_user,$db_pass,"10.252.209.213/orcl.mis.pens.ac.id");
	if(!$con) {
		// responseError('ERR-DB');
		'Tidak dapat terconeksi dengan database';
	}

/**
 * eksekusi query db
 * untuk memudahkan penulisan saja 
 * karena oracle membutuhkan 
 * beberapa langkah
 * 
 * @param  oci_resource $con variable koneksi oci
 * @param  string $sql query yang di jalankan
 * @return oci_resource      resouce oci
 */

function query_view($sql, $data)
{
	global $con;

    $parse = oci_parse($con, $sql);
	foreach ($data as $key => $val) {    
    	oci_bind_by_name($parse, $key, $data[$key]);
	}
    oci_execute($parse);
    return $parse;
}

function query_insert($sql, $data)
{
	global $con;

    $parse = oci_parse($con, $sql);
	foreach ($data as $key => $val) {    
    	oci_bind_by_name($parse, $key, $data[$key]);
	}
    oci_execute($parse);
	if (oci_num_rows($parse)>0)
    	return "Success Insert";
	else
		return "Failed Insert";	
}

function query_update($sql, $data)
{
	global $con;

    $parse = oci_parse($con, $sql);
	foreach ($data as $key => $val) {    
    	oci_bind_by_name($parse, $key, $data[$key]);
	}
    oci_execute($parse);
	if (oci_num_rows($parse)>0)
    	return "Success Update";
	else
		return "Failed Update";	
}

function query_delete($sql, $data)
{
	global $con;

    $parse = oci_parse($con, $sql);
	foreach ($data as $key => $val) {    
    	oci_bind_by_name($parse, $key, $data[$key]);
	}
    oci_execute($parse);
	if (oci_num_rows($parse)>0)
    	return "Success Delete";
	else
		return "Failed Delete";	
}

function getPegawai($nip){
	$sqlPegawai = "SELECT S.STAFF AS KATEGORI_STAFF, J.JABATAN, P.STAFF FROM PEGAWAI P  
	LEFT OUTER JOIN STAFF S ON S.NOMOR = P.STAFF
	LEFT OUTER JOIN JABATAN_FUNGSIONAL J ON J.NOMOR = P.FUNGSIONAL WHERE NIP=:V1";
	$nomorNip = array(':v1' =>  $nip);
	$pegawai = query_view($sqlPegawai, $nomorNip);
	
	oci_fetch_all($pegawai, $rowPegawai, 0, 0, OCI_FETCHSTATEMENT_BY_ROW);
	
	return $rowPegawai[0];
}

function getGelar($nip){
	$sqlPegawai = "SELECT GELAR_DPN, GELAR_BLK FROM PEGAWAI WHERE NIP=:v1";
	$nomorNip = array(':v1' =>  $nip);
	$pegawai = query_view($sqlPegawai, $nomorNip);
	
	oci_fetch_all($pegawai, $rowPegawai, 0, 0, OCI_FETCHSTATEMENT_BY_ROW);

	$tmpStaff = null;
	foreach ($rowPegawai as $row) {
		$tmpStaff = $row['GELAR_DPN'];
		$tmpStaff = $row['GELAR_BLK'];
	}
	return $tmpStaff;
}

?>