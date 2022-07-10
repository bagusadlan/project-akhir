<?php

class GetAllAngkaKredit extends Controller {
    public function __construct()
    {
        $this->level();
    }

    public function index()
    {
        
    }

    public function getDokumenBidang1($nip) {
        $con = konekDb();
        $sql = "SELECT nomor, nomor_bidang, program, mata_kuliah, kelas, sks, tahun_ajaran, semester, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 1 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
        $rows = array(':v1' => $nip);
        $hasil = query_view($con, $sql, $rows);
        oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        echo json_encode($rows);
    }

    public function getDokumenBidang2($nip) {
        $con = konekDb();
        $sql = "SELECT nomor, nomor_bidang, program, tahun_ajaran, semester, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 2 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
        $rows = array(':v1' => $nip);
        $hasil = query_view($con, $sql, $rows);
        oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        echo json_encode($rows);
    }

    public function getDokumenBidang3($nip) {
        $con = konekDb();
        $sql = "SELECT nomor, nomor_bidang, program, nama_perusahaan, tahun_ajaran, semester, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 3 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
        $rows = array(':v1' => $nip);
        $hasil = query_view($con, $sql, $rows);
        oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        echo json_encode($rows);
    }

    public function getDokumenBidang4($nip) {
        $con = konekDb();
        $sql = "SELECT nomor, nomor_bidang, program, kategori_pembimbing, nama_mahasiswa, jenis_tugasakhir, tahun_ajaran, semester, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 4 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
        $rows = array(':v1' => $nip);
        $hasil = query_view($con, $sql, $rows);
        oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        echo json_encode($rows);
    }

    public function getDokumenBidang5($nip) {
        $con = konekDb();
        $sql = "SELECT nomor, nomor_bidang, program, kategori_penguji, nama_mahasiswa, tahun_ajaran, semester, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 5 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
        $rows = array(':v1' => $nip);
        $hasil = query_view($con, $sql, $rows);
        oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        echo json_encode($rows);
    }

    public function getDokumenBidang6($nip) {
        $con = konekDb();
        $sql = "SELECT nomor, nomor_bidang, program, tahun_ajaran, semester, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 6 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
        $rows = array(':v1' => $nip);
        $hasil = query_view($con, $sql, $rows);
        oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        echo json_encode($rows);
    }

    public function getDokumenBidang7($nip) {
        $con = konekDb();
        $sql = "SELECT nomor, nomor_bidang, program, nama_produk, tahun_ajaran, semester, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 7 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
        $rows = array(':v1' => $nip);
        $hasil = query_view($con, $sql, $rows);
        oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        echo json_encode($rows);
    }

    public function getDokumenBidang8($nip) {
        $con = konekDb();
        $sql = "SELECT nomor, nomor_bidang, program, jenis_produk, judul_bahan_ajar, tahun_ajaran, semester, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 8 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
        $rows = array(':v1' => $nip);
        $hasil = query_view($con, $sql, $rows);
        oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        echo json_encode($rows);
    }

    public function getDokumenBidang9($nip) {
        $con = konekDb();
        $sql = "SELECT nomor, nomor_bidang, program, nama_orasi_ilmiah, tahun_ajaran, semester, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 9 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
        $rows = array(':v1' => $nip);
        $hasil = query_view($con, $sql, $rows);
        oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        echo json_encode($rows);
    }

    public function getDokumenBidang10($nip) {
        $con = konekDb();
        $sql = "SELECT nomor, nomor_bidang, jabatan_pimpinan, tahun_ajaran, semester, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 10 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
        $rows = array(':v1' => $nip);
        $hasil = query_view($con, $sql, $rows);
        oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        echo json_encode($rows);
    }

    public function getDokumenBidang11($nip) {
        $con = konekDb();
        $sql = "SELECT nomor, nomor_bidang, program, kategori_pembimbing_dosen, tahun_ajaran, semester, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 11 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
        $rows = array(':v1' => $nip);
        $hasil = query_view($con, $sql, $rows);
        oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        echo json_encode($rows);
    }

    public function getDokumenBidang12($nip) {
        $con = konekDb();
        $sql = "SELECT nomor, nomor_bidang, program, kategori_kegiatan, tahun_ajaran, semester, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 12 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
        $rows = array(':v1' => $nip);
        $hasil = query_view($con, $sql, $rows);
        oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        echo json_encode($rows);
    }

    public function getDokumenBidang13($nip) {
        $con = konekDb();
        $sql = "SELECT nomor, nomor_bidang, program, durasi_pengembangan_diri, tahun_ajaran, semester, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 12 ORDER BY TAHUN_AJARAN DESC, SEMESTER DESC, TANGGAL DESC";
        $rows = array(':v1' => $nip);
        $hasil = query_view($con, $sql, $rows);
        oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        echo json_encode($rows);
    }
}