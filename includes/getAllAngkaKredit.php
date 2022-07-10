<?php

function getAllAngkaKredit($nip) {
    $group = null;

    $con = konekDb();
    $sql = "SELECT * FROM DOKUMEN_BIDANG WHERE NIP = :v1 ORDER BY NOMOR_BIDANG, TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
    $rows = array(':v1' => $nip);
    $hasil = query_view($con, $sql, $rows);
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