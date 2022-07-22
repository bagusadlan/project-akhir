<?php

class InputDataKumPendidikan extends Controller
{
    public function __construct()
    {
        $this->level();
    }
    
    public function index()
    {

    }

    public function inputData1()
    {
        $nomor_bidang = 1;
        $nip = $_POST['nip'];
        $program = $_POST['program'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $mata_kuliah = $_POST['mata_kuliah'];
        $kelas = $_POST['kelas'];
        $sks = $_POST['jumlah_sks'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO DOKUMEN_BIDANG (NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TAHUN_AJARAN, SEMESTER, MATA_KULIAH, KELAS, SKS, TEMPAT, TANGGAL, KETERANGAN) VALUES (BIDANG_DOKUMEN_SEQ.NEXTVAL, :v1, :v2, :v3, :v4, :v5, :v6, :v7, :v8, :v9, :v10, :v11)";
        $data = array(':v1' => $nomor_bidang, ':v2' => $nip, ':v3' => $program, ':v4' => $tahun_ajaran, ':v5' => $semester, ':v6' => $mata_kuliah,':v7' => $kelas,':v8' => $sks,':v9' => $tempat,':v10' => $tanggal,':v11' => $keterangan);

        $hasil = query_insert($sql, $data);

        
        
        header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($hasil);
    }

    public function inputData2()
    {
        $nomor_bidang = 2;
        $nip = $_POST['nip'];
        $program = $_POST['program'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO DOKUMEN_BIDANG (NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TAHUN_AJARAN, SEMESTER, TEMPAT, TANGGAL, KETERANGAN) VALUES (BIDANG_DOKUMEN_SEQ.NEXTVAL, :v1, :v2, :v3, :v4, :v5, :v6, :v7, :v8)";
        $data = array(':v1' => $nomor_bidang, ':v2' => $nip, ':v3' => $program, ':v4' => $tahun_ajaran, ':v5' => $semester,':v6' => $tempat,':v7' => $tanggal,':v8' => $keterangan);

        $hasil = query_insert($sql, $data);

        
        header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($hasil);
    }

    public function inputData3()
    {
        $nomor_bidang = 3;
        $nip = $_POST['nip'];
        $program = $_POST['program'];
        $nama_perusahaan = $_POST['nama_perusahaan'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO DOKUMEN_BIDANG (NOMOR, NOMOR_BIDANG, NIP, PROGRAM, NAMA_PERUSAHAAN, TAHUN_AJARAN, SEMESTER, TEMPAT, TANGGAL, KETERANGAN) VALUES (BIDANG_DOKUMEN_SEQ.NEXTVAL, :v1, :v2, :v3, :v4, :v5, :v6, :v7, :v8, :v9)";
        $data = array(':v1' => $nomor_bidang, ':v2' => $nip, ':v3' => $program, ':v4' => $nama_perusahaan, ':v5' => $tahun_ajaran, ':v6' => $semester,':v7' => $tempat,':v8' => $tanggal,':v9' => $keterangan);

        $hasil = query_insert($sql, $data);

        header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($hasil);
    }

    public function inputData4()
    {
        $nomor_bidang = 4;
        $nip = $_POST['nip'];
        $program = $_POST['program'];
        $kategori_pembimbing = $_POST['kategori_pembimbing'];
        $nama_mahasiswa = $_POST['nama_mahasiswa'];
        $jenis_tugasakhir = $_POST['jenis_tugasakhir'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO DOKUMEN_BIDANG (NOMOR, NOMOR_BIDANG, NIP, PROGRAM, KATEGORI_PEMBIMBING, NAMA_MAHASISWA, JENIS_TUGASAKHIR, TAHUN_AJARAN, SEMESTER, TEMPAT, TANGGAL, KETERANGAN) VALUES (BIDANG_DOKUMEN_SEQ.NEXTVAL, :v1, :v2, :v3, :v4, :v5, :v6, :v7, :v8, :v9, :v10, :v11)";
        $data = array(':v1' => $nomor_bidang, ':v2' => $nip, ':v3' => $program, ':v4' => $kategori_pembimbing, ':v5' => $nama_mahasiswa, ':v6' => $jenis_tugasakhir, ':v7' => $tahun_ajaran, ':v8' => $semester,':v9' => $tempat,':v10' => $tanggal,':v11' => $keterangan);

        $hasil = query_insert($sql, $data);

        header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($hasil);
    }

    public function inputData5()
    {
        $nomor_bidang = 5;
        $nip = $_POST['nip'];
        $program = $_POST['program'];
        $kategori_penguji = $_POST['kategori_penguji'];
        $nama_mahasiswa = $_POST['nama_mahasiswa'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO DOKUMEN_BIDANG (NOMOR, NOMOR_BIDANG, NIP, PROGRAM, KATEGORI_PENGUJI, NAMA_MAHASISWA, TAHUN_AJARAN, SEMESTER, TEMPAT, TANGGAL, KETERANGAN) VALUES (BIDANG_DOKUMEN_SEQ.NEXTVAL, :v1, :v2, :v3, :v4, :v5, :v6, :v7, :v8, :v9, :v10)";
        $data = array(':v1' => $nomor_bidang, ':v2' => $nip, ':v3' => $program, ':v4' => $kategori_penguji, ':v5' => $nama_mahasiswa, ':v6' => $tahun_ajaran, ':v7' => $semester,':v8' => $tempat,':v9' => $tanggal,':v10' => $keterangan);

        $hasil = query_insert($sql, $data);

        header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($hasil);
    }

    public function inputData6()
    {
        $nomor_bidang = 6;
        $nip = $_POST['nip'];
        $program = $_POST['program'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO DOKUMEN_BIDANG (NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TAHUN_AJARAN, SEMESTER, TEMPAT, TANGGAL, KETERANGAN) VALUES (BIDANG_DOKUMEN_SEQ.NEXTVAL, :v1, :v2, :v3, :v4, :v5, :v6, :v7, :v8)";
        $data = array(':v1' => $nomor_bidang, ':v2' => $nip, ':v3' => $program, ':v4' => $tahun_ajaran, ':v5' => $semester,':v6' => $tempat,':v7' => $tanggal,':v8' => $keterangan);

        $hasil = query_insert($sql, $data);

        header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($hasil);
    }

    public function inputData7()
    {
        $nomor_bidang = 7;
        $nip = $_POST['nip'];
        $program = $_POST['program'];
        $nama_produk = $_POST['nama_produk'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO DOKUMEN_BIDANG (NOMOR, NOMOR_BIDANG, NIP, PROGRAM, NAMA_PRODUK, TAHUN_AJARAN, SEMESTER, TEMPAT, TANGGAL, KETERANGAN) VALUES (BIDANG_DOKUMEN_SEQ.NEXTVAL, :v1, :v2, :v3, :v4, :v5, :v6, :v7, :v8, :v9)";
        $data = array(':v1' => $nomor_bidang, ':v2' => $nip, ':v3' => $program, ':v4' => $nama_produk, ':v5' => $tahun_ajaran, ':v6' => $semester,':v7' => $tempat,':v8' => $tanggal,':v9' => $keterangan);

        $hasil = query_insert($sql, $data);

        header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($hasil);
    }

    public function inputData8()
    {
        $nomor_bidang = 8;
        $nip = $_POST['nip'];
        $program = $_POST['program'];
        $jenis_produk = $_POST['jenis_produk'];
        $judul_bahan_ajar = $_POST['judul_bahan_ajar'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO DOKUMEN_BIDANG (NOMOR, NOMOR_BIDANG, NIP, PROGRAM, JENIS_PRODUK, JUDUL_BAHAN_AJAR, TAHUN_AJARAN, SEMESTER, TEMPAT, TANGGAL, KETERANGAN) VALUES (BIDANG_DOKUMEN_SEQ.NEXTVAL, :v1, :v2, :v3, :v4, :v5, :v6, :v7, :v8, :v9, :v10)";
        $data = array(':v1' => $nomor_bidang, ':v2' => $nip, ':v3' => $program, ':v4' => $jenis_produk, ':v5' => $judul_bahan_ajar, ':v6' => $tahun_ajaran, ':v7' => $semester,':v8' => $tempat,':v9' => $tanggal,':v10' => $keterangan);

        $hasil = query_insert($sql, $data);

        header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($hasil);
    }

    public function inputData9()
    {
        $nomor_bidang = 9;
        $nip = $_POST['nip'];
        $program = $_POST['program'];
        $nama_orasi_ilmiah = $_POST['nama_orasi_ilmiah'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO DOKUMEN_BIDANG (NOMOR, NOMOR_BIDANG, NIP, PROGRAM, NAMA_ORASI_ILMIAH, TAHUN_AJARAN, SEMESTER, TEMPAT, TANGGAL, KETERANGAN) VALUES (BIDANG_DOKUMEN_SEQ.NEXTVAL, :v1, :v2, :v3, :v4, :v5, :v6, :v7, :v8, :v9)";
        $data = array(':v1' => $nomor_bidang, ':v2' => $nip, ':v3' => $program, ':v4' => $nama_orasi_ilmiah, ':v5' => $tahun_ajaran, ':v6' => $semester, ':v7' => $tempat,':v8' => $tanggal,':v9' => $keterangan);

        $hasil = query_insert($sql, $data);

        header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($hasil);
    }

    public function inputData10()
    {
        $nomor_bidang = 10;
        $nip = $_POST['nip'];
        $jabatan_pimpinan = $_POST['jabatan_pimpinan'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO DOKUMEN_BIDANG (NOMOR, NOMOR_BIDANG, NIP, JABATAN_PIMPINAN, TAHUN_AJARAN, SEMESTER, TEMPAT, TANGGAL, KETERANGAN) VALUES (BIDANG_DOKUMEN_SEQ.NEXTVAL, :v1, :v2, :v3, :v4, :v5, :v6, :v7, :v8)";
        $data = array(':v1' => $nomor_bidang, ':v2' => $nip, ':v3' => $jabatan_pimpinan, ':v4' => $tahun_ajaran, ':v5' => $semester, ':v6' => $tempat, ':v7' => $tanggal, ':v8' => $keterangan);

        $hasil = query_insert($sql, $data);

        header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($hasil);
    }

    public function inputData11()
    {
        $nomor_bidang = 11;
        $nip = $_POST['nip'];
        $program = $_POST['program'];
        $kategori_pembimbing_dosen = $_POST['kategori_pembimbing_dosen'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO DOKUMEN_BIDANG (NOMOR, NOMOR_BIDANG, NIP, PROGRAM, KATEGORI_PEMBIMBING_DOSEN, TAHUN_AJARAN, SEMESTER, TEMPAT, TANGGAL, KETERANGAN) VALUES (BIDANG_DOKUMEN_SEQ.NEXTVAL, :v1, :v2, :v3, :v4, :v5, :v6, :v7, :v8, :v9)";
        $data = array(':v1' => $nomor_bidang, ':v2' => $nip, ':v3' => $program, ':v4' => $kategori_pembimbing_dosen, ':v5' => $tahun_ajaran, ':v6' => $semester, ':v7' => $tempat,':v8' => $tanggal,':v9' => $keterangan);

        $hasil = query_insert($sql, $data);

        header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($hasil);
    }

    public function inputData12()
    {
        $nomor_bidang = 12;
        $nip = $_POST['nip'];
        $program = $_POST['program'];
        $kategori_kegiatan = $_POST['kategori_kegiatan'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO DOKUMEN_BIDANG (NOMOR, NOMOR_BIDANG, NIP, PROGRAM, KATEGORI_KEGIATAN, TAHUN_AJARAN, SEMESTER, TEMPAT, TANGGAL, KETERANGAN) VALUES (BIDANG_DOKUMEN_SEQ.NEXTVAL, :v1, :v2, :v3, :v4, :v5, :v6, :v7, :v8, :v9)";
        $data = array(':v1' => $nomor_bidang, ':v2' => $nip, ':v3' => $program, ':v4' => $kategori_kegiatan, ':v5' => $tahun_ajaran, ':v6' => $semester, ':v7' => $tempat,':v8' => $tanggal,':v9' => $keterangan);

        $hasil = query_insert($sql, $data);

        header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($hasil);
    }

    public function inputData13()
    {
        $nomor_bidang = 13;
        $nip = $_POST['nip'];
        $program = $_POST['program'];
        $durasi_pengembangan_diri = $_POST['durasi_pengembangan_diri'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO DOKUMEN_BIDANG (NOMOR, NOMOR_BIDANG, NIP, PROGRAM, DURASI_PENGEMBANGAN_DIRI, TAHUN_AJARAN, SEMESTER, TEMPAT, TANGGAL, KETERANGAN) VALUES (BIDANG_DOKUMEN_SEQ.NEXTVAL, :v1, :v2, :v3, :v4, :v5, :v6, :v7, :v8, :v9)";
        $data = array(':v1' => $nomor_bidang, ':v2' => $nip, ':v3' => $program, ':v4' => $durasi_pengembangan_diri, ':v5' => $tahun_ajaran, ':v6' => $semester, ':v7' => $tempat,':v8' => $tanggal,':v9' => $keterangan);

        $hasil = query_insert($sql, $data);

        header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($hasil);
    }

    public function update()
    {

    }

    public function destroy()
    {
        
    }
}