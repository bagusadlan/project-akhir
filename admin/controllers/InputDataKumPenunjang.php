<?php

class InputDataKumPenunjang extends Controller
{
    public function __construct()
    {
        $this->level();
    }
    
    public function index()
    {

    }

    public function inputData14()
    {
        $nomor_bidang = 14;
        $nip = $_POST['nip'];
        $program = $_POST['program'];
        $kedudukan = $_POST['kedudukan'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO DOKUMEN_BIDANG (NOMOR, NOMOR_BIDANG, NIP, PROGRAM, KEDUDUKAN, TAHUN_AJARAN, SEMESTER, TEMPAT, TANGGAL, KETERANGAN) VALUES (BIDANG_DOKUMEN_SEQ.NEXTVAL, :v1, :v2, :v3, :v4, :v5, :v6, :v7, :v8, :v9)";
        $data = array(':v1' => $nomor_bidang, ':v2' => $nip, ':v3' => $program, ':v4' => $kedudukan, ':v5' => $tahun_ajaran, ':v6' => $semester, ':v7' => $tempat, ':v8' => $tanggal, ':v9' => $keterangan);

        $hasil = query_insert($sql, $data);
        
        header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($hasil);
    }

    public function inputData15()
    {
        $nomor_bidang = 15;
        $nip = $_POST['nip'];
        $program = $_POST['program'];
        $jenis_panitia = $_POST['jenis_panitia'];
        $kedudukan_pada_lembaga = $_POST['kedudukan_pada_lembaga'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO DOKUMEN_BIDANG (NOMOR, NOMOR_BIDANG, NIP, PROGRAM, JENIS_PANITIA, KEDUDUKAN_PADA_LEMBAGA, TAHUN_AJARAN, SEMESTER, TEMPAT, TANGGAL, KETERANGAN) VALUES (BIDANG_DOKUMEN_SEQ.NEXTVAL, :v1, :v2, :v3, :v4, :v5, :v6, :v7, :v8, :v9, :v10)";
        $data = array(':v1' => $nomor_bidang, ':v2' => $nip, ':v3' => $program, ':v4' => $jenis_panitia, ':v5' => $kedudukan_pada_lembaga, ':v6' => $tahun_ajaran, ':v7' => $semester, ':v8' => $tempat, ':v9' => $tanggal, ':v10' => $keterangan);

        $hasil = query_insert($sql, $data);
        
        header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($hasil);
    }

    public function inputData16()
    {
        $nomor_bidang = 16;
        $nip = $_POST['nip'];
        $program = $_POST['program'];
        $tingkatan_organisasi_profesi = $_POST['tingkatan_organisasi_profesi'];
        $kedudukan_organisasi_profesi = $_POST['kedudukan_organisasi_profesi'];
        $periode_jabatan = $_POST['periode_jabatan'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO DOKUMEN_BIDANG (NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TINGKATAN_ORGANISASI_PROFESI, KEDUDUKAN_ORGANISASI_PROFESI, TAHUN_AJARAN, SEMESTER, TEMPAT, TANGGAL, KETERANGAN) VALUES (BIDANG_DOKUMEN_SEQ.NEXTVAL, :v1, :v2, :v3, :v4, :v5, :v6, :v7, :v8, :v9, :v10)";
        $data = array(':v1' => $nomor_bidang, ':v2' => $nip, ':v3' => $program, ':v4' => $tingkatan_organisasi_profesi, ':v5' => $kedudukan_organisasi_profesi, ':v6' => $periode_jabatan, ':v7' => $semester, ':v8' => $tempat, ':v9' => $tanggal, ':v10' => $keterangan);

        $hasil = query_insert($sql, $data);
        
        header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($hasil);
    }

    public function inputData17()
    {
        $nomor_bidang = 17;
        $nip = $_POST['nip'];
        $program = $_POST['program'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO DOKUMEN_BIDANG (NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TAHUN_AJARAN, SEMESTER, TEMPAT, TANGGAL, KETERANGAN) VALUES (BIDANG_DOKUMEN_SEQ.NEXTVAL, :v1, :v2, :v3, :v4, :v5, :v6, :v7, :v8)";
        $data = array(':v1' => $nomor_bidang, ':v2' => $nip, ':v3' => $program, ':v4' => $tahun_ajaran, ':v5' => $semester, ':v6' => $tempat, ':v7' => $tanggal, ':v8' => $keterangan);

        $hasil = query_insert($sql, $data);
        
        header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($hasil);
    }

    public function inputData18()
    {
        $nomor_bidang = 18;
        $nip = $_POST['nip'];
        $program = $_POST['program'];
        $kedudukan_pada_delegasi = $_POST['kedudukan_pada_delegasi'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO DOKUMEN_BIDANG (NOMOR, NOMOR_BIDANG, NIP, PROGRAM, KEDUDUKAN_PADA_DELEGASI, TAHUN_AJARAN, SEMESTER, TEMPAT, TANGGAL, KETERANGAN) VALUES (BIDANG_DOKUMEN_SEQ.NEXTVAL, :v1, :v2, :v3, :v4, :v5, :v6, :v7, :v8, :v9)";
        $data = array(':v1' => $nomor_bidang, ':v2' => $nip, ':v3' => $program, ':v4' => $kedudukan_pada_delegasi, ':v5' => $tahun_ajaran, ':v6' => $semester,':v7' => $tempat,':v8' => $tanggal,':v9' => $keterangan);

        $hasil = query_insert($sql, $data);
        
        header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($hasil);
    }

    public function inputData19()
    {
        $nomor_bidang = 19;
        $nip = $_POST['nip'];
        $program = $_POST['program'];
        $tingkatan_pertemuan_ilmiah = $_POST['tingkatan_pertemuan_ilmiah'];
        $kedudukan_pertemuan_ilmiah = $_POST['kedudukan_pertemuan_ilmiah'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO DOKUMEN_BIDANG (NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TINGKATAN_PERTEMUAN_ILMIAH, KEDUDUKAN_PERTEMUAN_ILMIAH, TAHUN_AJARAN, SEMESTER, TEMPAT, TANGGAL, KETERANGAN) VALUES (BIDANG_DOKUMEN_SEQ.NEXTVAL, :v1, :v2, :v3, :v4, :v5, :v6, :v7, :v8, :v9, :v10)";
        $data = array(':v1' => $nomor_bidang, ':v2' => $nip, ':v3' => $program, ':v4' => $tingkatan_pertemuan_ilmiah, ':v5' => $kedudukan_pertemuan_ilmiah, ':v6' => $tahun_ajaran, ':v7' => $semester, ':v8' => $tempat, ':v9' => $tanggal, ':v10' => $keterangan);

        $hasil = query_insert($sql, $data);
        
        header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($hasil);
    }

    public function inputData20()
    {
        $nomor_bidang = 20;
        $nip = $_POST['nip'];
        $program = $_POST['program'];
        $kategori_penghargaan = $_POST['kategori_penghargaan'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO DOKUMEN_BIDANG (NOMOR, NOMOR_BIDANG, NIP, PROGRAM, KATEGORI_PENGHARGAAN, TAHUN_AJARAN, SEMESTER, TEMPAT, TANGGAL, KETERANGAN) VALUES (BIDANG_DOKUMEN_SEQ.NEXTVAL, :v1, :v2, :v3, :v4, :v5, :v6, :v7, :v8, :v9)";
        $data = array(':v1' => $nomor_bidang, ':v2' => $nip, ':v3' => $program, ':v4' => $kategori_penghargaan, ':v5' => $tahun_ajaran, ':v6' => $semester,':v7' => $tempat,':v8' => $tanggal,':v9' => $keterangan);

        $hasil = query_insert($sql, $data);
        
        header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($hasil);
    }

    public function inputData21()
    {
        $nomor_bidang = 21;
        $nip = $_POST['nip'];
        $program = $_POST['program'];
        $tingkatan_buku_pelajaran = $_POST['tingkatan_buku_pelajaran'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO DOKUMEN_BIDANG (NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TINGKATAN_BUKU_PELAJARAN, TAHUN_AJARAN, SEMESTER, TEMPAT, TANGGAL, KETERANGAN) VALUES (BIDANG_DOKUMEN_SEQ.NEXTVAL, :v1, :v2, :v3, :v4, :v5, :v6, :v7, :v8, :v9)";
        $data = array(':v1' => $nomor_bidang, ':v2' => $nip, ':v3' => $program, ':v4' => $tingkatan_buku_pelajaran, ':v5' => $tahun_ajaran, ':v6' => $semester,':v7' => $tempat,':v8' => $tanggal,':v9' => $keterangan);

        $hasil = query_insert($sql, $data);
        
        header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($hasil);
    }
    
    public function inputData22()
    {
        $nomor_bidang = 22;
        $nip = $_POST['nip'];
        $program = $_POST['program'];
        $tingkatan_prestasi_olahraga = $_POST['tingkatan_prestasi_olahraga'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO DOKUMEN_BIDANG (NOMOR, NOMOR_BIDANG, NIP, PROGRAM, TINGKATAN_PRESTASI_OLAHRAGA, TAHUN_AJARAN, SEMESTER, TEMPAT, TANGGAL, KETERANGAN) VALUES (BIDANG_DOKUMEN_SEQ.NEXTVAL, :v1, :v2, :v3, :v4, :v5, :v6, :v7, :v8, :v9)";
        $data = array(':v1' => $nomor_bidang, ':v2' => $nip, ':v3' => $program, ':v4' => $tingkatan_prestasi_olahraga, ':v5' => $tahun_ajaran, ':v6' => $semester,':v7' => $tempat,':v8' => $tanggal,':v9' => $keterangan);

        $hasil = query_insert($sql, $data);
        
        header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($hasil);
    }

    function inputData23()
    {
        $nomor_bidang = 23;
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
}