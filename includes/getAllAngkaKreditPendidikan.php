<?php

function getAllAngkaKreditPendidikan($nip) {
    $data[1] = GetAllAngkaKredit1($nip);
    $data[2] = GetAllAngkaKredit2($nip);
    $data[3] = GetAllAngkaKredit3($nip);
    $data[4] = GetAllAngkaKredit4($nip);
    $data[5] = GetAllAngkaKredit5($nip);
    $data[6] = GetAllAngkaKredit6($nip);
    $data[7] = GetAllAngkaKredit7($nip);
    $data[8] = GetAllAngkaKredit8($nip);
    $data[9] = GetAllAngkaKredit9($nip);
    $data[10] = GetAllAngkaKredit10($nip);
    $data[11] = GetAllAngkaKredit11($nip);
    $data[12] = GetAllAngkaKredit12($nip);
    $data[13] = GetAllAngkaKredit13($nip);

    return $data;
}

function getAllAngkaKredit1($nip) {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN, MATA_KULIAH, KELAS, SKS FROM DOKUMEN_BIDANG WHERE NOMOR_BIDANG = 1 AND NIP = :v1 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
    $rows = array(':v1' => $nip);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getAllAngkaKredit2($nip) {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN FROM DOKUMEN_BIDANG WHERE NOMOR_BIDANG = 2 AND NIP = :v1 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
    $rows = array(':v1' => $nip);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getAllAngkaKredit3($nip) {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN, NAMA_PERUSAHAAN FROM DOKUMEN_BIDANG WHERE NOMOR_BIDANG = 3 AND NIP = :v1 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
    $rows = array(':v1' => $nip);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getAllAngkaKredit4($nip) {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN, KATEGORI_PEMBIMBING, NAMA_MAHASISWA, JENIS_TUGASAKHIR FROM DOKUMEN_BIDANG WHERE NOMOR_BIDANG = 4 AND NIP = :v1 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
    $rows = array(':v1' => $nip);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getAllAngkaKredit5($nip) {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN, KATEGORI_PENGUJI, NAMA_MAHASISWA FROM DOKUMEN_BIDANG WHERE NOMOR_BIDANG = 5 AND NIP = :v1 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
    $rows = array(':v1' => $nip);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getAllAngkaKredit6($nip) {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN FROM DOKUMEN_BIDANG WHERE NOMOR_BIDANG = 6 AND NIP = :v1 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
    $rows = array(':v1' => $nip);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getAllAngkaKredit7($nip) {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN, NAMA_PRODUK FROM DOKUMEN_BIDANG WHERE NOMOR_BIDANG = 7 AND NIP = :v1 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
    $rows = array(':v1' => $nip);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getAllAngkaKredit8($nip) {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN, JENIS_PRODUK, JUDUL_BAHAN_AJAR FROM DOKUMEN_BIDANG WHERE NOMOR_BIDANG = 8 AND NIP = :v1 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
    $rows = array(':v1' => $nip);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getAllAngkaKredit9($nip) {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN, NAMA_ORASI_ILMIAH FROM DOKUMEN_BIDANG WHERE NOMOR_BIDANG = 9 AND NIP = :v1 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
    $rows = array(':v1' => $nip);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getAllAngkaKredit10($nip) {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN, JABATAN_PIMPINAN FROM DOKUMEN_BIDANG WHERE NOMOR_BIDANG = 10 AND NIP = :v1 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
    $rows = array(':v1' => $nip);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}
function getAllAngkaKredit11($nip) {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN, KATEGORI_PEMBIMBING_DOSEN FROM DOKUMEN_BIDANG WHERE NOMOR_BIDANG = 11 AND NIP = :v1 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
    $rows = array(':v1' => $nip);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getAllAngkaKredit12($nip) {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN, KATEGORI_KEGIATAN FROM DOKUMEN_BIDANG WHERE NOMOR_BIDANG = 12 AND NIP = :v1 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
    $rows = array(':v1' => $nip);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getAllAngkaKredit13($nip) {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN, DURASI_PENGEMBANGAN_DIRI FROM DOKUMEN_BIDANG WHERE NOMOR_BIDANG = 13 AND NIP = :v1 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
    $rows = array(':v1' => $nip);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}