<?php

function getPenghitungPendidikan() {
    $data[1] = GetPenghitung1();
    $data[2] = GetPenghitung2();
    $data[3] = GetPenghitung3();
    $data[4] = GetPenghitung4();
    $data[5] = GetPenghitung5();
    $data[6] = GetPenghitung6();
    $data[7] = GetPenghitung7();
    $data[8] = GetPenghitung8();
    $data[9] = GetPenghitung9();
    $data[10] = GetPenghitung10();
    $data[11] = GetPenghitung11();
    $data[12] = GetPenghitung12();
    $data[13] = GetPenghitung13();

    return $data;
}

function getPenghitung1() {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, JABATAN_FUNGSIONAL, BATAS_SKS_PERTAMA, BATAS_SKS_BERIKUTNYA, ANGKA_KREDIT_PERTAMA, ANGKA_KREDIT_BERIKUTNYA
     FROM PENGHITUNG WHERE NOMOR_BIDANG = :v1 ORDER BY NOMOR";
    $rows = array(':v1' => '1');
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getPenghitung2() {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, PROGRAM, ANGKA_KREDIT FROM PENGHITUNG WHERE NOMOR_BIDANG = :v1";
    $rows = array(':v1' => 2);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getPenghitung3() {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, PROGRAM, ANGKA_KREDIT FROM PENGHITUNG WHERE NOMOR_BIDANG = :v1";
    $rows = array(':v1' => 3);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getPenghitung4() {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, KATEGORI_PEMBIMBING, JENIS_TUGAS_AKHIR, BATAS_MAKSIMAL, ANGKA_KREDIT FROM PENGHITUNG WHERE NOMOR_BIDANG = :v1 ORDER BY NOMOR";
    $rows = array(':v1' => 4);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getPenghitung5() {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, KATEGORI_PENGUJI, BATAS_MAKSIMAL, ANGKA_KREDIT FROM PENGHITUNG WHERE NOMOR_BIDANG = :v1 ORDER BY NOMOR";
    $rows = array(':v1' => 5);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getPenghitung6() {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, PROGRAM, BATAS_MAKSIMAL, ANGKA_KREDIT FROM PENGHITUNG WHERE NOMOR_BIDANG = :v1 ORDER BY NOMOR";
    $rows = array(':v1' => 6);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getPenghitung7() {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, PROGRAM, BATAS_MAKSIMAL, ANGKA_KREDIT FROM PENGHITUNG WHERE NOMOR_BIDANG = :v1 ORDER BY NOMOR";
    $rows = array(':v1' => 7);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getPenghitung8() {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, JENIS_PRODUK, BATAS_MAKSIMAL, ANGKA_KREDIT FROM PENGHITUNG WHERE NOMOR_BIDANG = :v1 ORDER BY NOMOR";
    $rows = array(':v1' => 8);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getPenghitung9() {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, PROGRAM, BATAS_MAKSIMAL, ANGKA_KREDIT FROM PENGHITUNG WHERE NOMOR_BIDANG = :v1 ORDER BY NOMOR";
    $rows = array(':v1' => 9);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getPenghitung10() {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, JABATAN_PIMPINAN, BATAS_MAKSIMAL, ANGKA_KREDIT FROM PENGHITUNG WHERE NOMOR_BIDANG = :v1 ORDER BY NOMOR";
    $rows = array(':v1' => 10);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getPenghitung11() {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, KATEGORI_PEMBIMBING_DOSEN, BATAS_MAKSIMAL, ANGKA_KREDIT FROM PENGHITUNG WHERE NOMOR_BIDANG = :v1 ORDER BY NOMOR";
    $rows = array(':v1' => 11);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getPenghitung12() {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, KATEGORI_KEGIATAN, BATAS_MAKSIMAL, ANGKA_KREDIT FROM PENGHITUNG WHERE NOMOR_BIDANG = :v1 ORDER BY NOMOR";
    $rows = array(':v1' => 12);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getPenghitung13() {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, DURASI_PENGEMBANGAN_DIRI, ANGKA_KREDIT FROM PENGHITUNG WHERE NOMOR_BIDANG = :v1 ORDER BY NOMOR";
    $rows = array(':v1' => 13);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}