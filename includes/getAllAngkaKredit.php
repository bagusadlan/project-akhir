<?php

function getAllAngkaKredit($nip) {
    $group = null;

    $sql = "SELECT * FROM DOKUMEN_BIDANG WHERE NIP = :v1 ORDER BY NOMOR_BIDANG, TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
    $rows = array(':v1' => $nip);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    foreach ($rows as $row) {
        $group[$row['NOMOR_BIDANG']][] = [
            $row['NOMOR'],                      // 0
            $row['PROGRAM'],                    // 1
            $row['TAHUN_AJARAN'],               // 2
            $row['SEMESTER'],                   // 3
            $row['TEMPAT'],                     // 4
            $row['TANGGAL'],                    // 5
            $row['KETERANGAN'],                 // 6
            $row['MATA_KULIAH'],                // 7
            $row['KELAS'],                      // 8
            $row['SKS'],                        // 9
            $row['NAMA_PERUSAHAAN'],            // 10
            $row['KATEGORI_PEMBIMBING'],        // 11
            $row['NAMA_MAHASISWA'],             // 12
            $row['JENIS_TUGASAKHIR'],           // 13
            $row['KATEGORI_PENGUJI'],           // 14
            $row['NAMA_PRODUK'],                // 15
            $row['JENIS_PRODUK'],               // 16
            $row['JUDUL_BAHAN_AJAR'],           // 17
            $row['NAMA_ORASI_ILMIAH'],          // 18
            $row['JABATAN_PIMPINAN'],           // 19
            $row['KATEGORI_PEMBIMBING_DOSEN'],  // 20
            $row['KATEGORI_KEGIATAN'],          // 21
            $row['DURASI_PENGEMBANGAN_DIRI']    // 22
        ];   
    }

    return $group;
}

function getAllAngkaKreditPenunjang($nip) {
    $data[14] = GetAllAngkaKredit14($nip);
    $data[15] = GetAllAngkaKredit15($nip);
    $data[16] = GetAllAngkaKredit16($nip);
    $data[17] = GetAllAngkaKredit17($nip);
    $data[18] = GetAllAngkaKredit18($nip);
    $data[19] = GetAllAngkaKredit19($nip);
    $data[20] = GetAllAngkaKredit20($nip);
    $data[21] = GetAllAngkaKredit21($nip);
    $data[22] = GetAllAngkaKredit22($nip);
    $data[23] = GetAllAngkaKredit23($nip);

    return $data;
}

function getAllAngkaKredit14($nip) {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, KEDUDUKAN, SEMESTER, TAHUN_AJARAN FROM DOKUMEN_BIDANG WHERE NOMOR_BIDANG = 14 AND NIP = :v1 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
    $rows = array(':v1' => $nip);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getAllAngkaKredit15($nip) {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN, JENIS_PANITIA, KEDUDUKAN_PADA_LEMBAGA FROM DOKUMEN_BIDANG WHERE NOMOR_BIDANG = 15 AND NIP = :v1 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
    $rows = array(':v1' => $nip);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getAllAngkaKredit16($nip) {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN, TINGKATAN_ORGANISASI_PROFESI, KEDUDUKAN_ORGANISASI_PROFESI FROM DOKUMEN_BIDANG WHERE NOMOR_BIDANG = 16 AND NIP = :v1 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
    $rows = array(':v1' => $nip);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getAllAngkaKredit17($nip) {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN FROM DOKUMEN_BIDANG WHERE NOMOR_BIDANG = 17 AND NIP = :v1 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
    $rows = array(':v1' => $nip);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getAllAngkaKredit18($nip) {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN, KEDUDUKAN_PADA_DELEGASI FROM DOKUMEN_BIDANG WHERE NOMOR_BIDANG = 18 AND NIP = :v1 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
    $rows = array(':v1' => $nip);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getAllAngkaKredit19($nip) {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN, TINGKATAN_PERTEMUAN_ILMIAH, KEDUDUKAN_PERTEMUAN_ILMIAH FROM DOKUMEN_BIDANG WHERE NOMOR_BIDANG = 19 AND NIP = :v1 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
    $rows = array(':v1' => $nip);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getAllAngkaKredit20($nip) {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN, KATEGORI_PENGHARGAAN FROM DOKUMEN_BIDANG WHERE NOMOR_BIDANG = 20 AND NIP = :v1 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
    $rows = array(':v1' => $nip);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getAllAngkaKredit21($nip) {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN, TINGKATAN_BUKU_PELAJARAN FROM DOKUMEN_BIDANG WHERE NOMOR_BIDANG = 21 AND NIP = :v1 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
    $rows = array(':v1' => $nip);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getAllAngkaKredit22($nip) {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN, TINGKATAN_PRESTASI_OLAHRAGA FROM DOKUMEN_BIDANG WHERE NOMOR_BIDANG = 22 AND NIP = :v1 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
    $rows = array(':v1' => $nip);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}

function getAllAngkaKredit23($nip) {
    $sql = "SELECT NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN FROM DOKUMEN_BIDANG WHERE NOMOR_BIDANG = 23 AND NIP = :v1 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
    $rows = array(':v1' => $nip);
    $hasil = query_view($sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (empty($rows)) {
        $rows = [];
    }

    return $rows;
}