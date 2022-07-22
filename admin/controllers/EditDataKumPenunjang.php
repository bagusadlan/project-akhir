<?php

class EditDataKumPenunjang extends Controller
{
    public function __construct()
    {
        $this->level();
    }
    
    public function index()
    {

    }

    public function getData14()
    {
		$sql = "SELECT NOMOR, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, KEDUDUKAN, SEMESTER, TAHUN_AJARAN FROM DOKUMEN_BIDANG WHERE NOMOR = :v1";
		$rows = array(':v1' => $_POST['id']);

		$hasil = query_view($sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        // header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($rows[0]);
    }

    public function getData15()
    {
		$sql = "SELECT NOMOR, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN, JENIS_PANITIA, KEDUDUKAN_PADA_LEMBAGA FROM DOKUMEN_BIDANG WHERE NOMOR = :v1";
		$rows = array(':v1' => $_POST['id']);

		$hasil = query_view($sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        // header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($rows[0]);
    }

    public function editData14()
    {
        $nomor = $_POST['nomor'];
        $program = $_POST['program'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $kedudukan = $_POST['kedudukan'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

		$sql = "UPDATE dokumen_bidang SET 
            program = :v2,
            tahun_ajaran = :v3,
            semester = :v4,
            kedudukan = :v5,
            tempat = :v8,
            tanggal = :v9,
            keterangan = :v10
        WHERE NOMOR = :v1";
		$data = array(  
                    ':v1' => $nomor,
                    ':v2' => $program,
                    ':v3' => $tahun_ajaran,
                    ':v4' => $semester,
                    ':v5' => $kedudukan,
                    ':v8' => $tempat,
                    ':v9' => $tanggal,
                    ':v10' => $keterangan
                );

		query_update($sql, $data);
    }

    public function editData15()
    {
        $nomor = $_POST['nomor'];
        $program = $_POST['program'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

		$sql = "UPDATE dokumen_bidang SET 
            program = :v2,
            tahun_ajaran = :v3,
            semester = :v4,
            tempat = :v8,
            tanggal = :v9,
            keterangan = :v10
        WHERE NOMOR = :v1";
		$data = array(  
                    ':v1' => $nomor,
                    ':v2' => $program,
                    ':v3' => $tahun_ajaran,
                    ':v4' => $semester,
                    ':v8' => $tempat,
                    ':v9' => $tanggal,
                    ':v10' => $keterangan
                );

		query_update($sql, $data);
    }

    public function getData16()
    {
		$sql = "SELECT NOMOR, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN, TINGKATAN_ORGANISASI_PROFESI, KEDUDUKAN_ORGANISASI_PROFESI FROM DOKUMEN_BIDANG WHERE NOMOR = :v1";
		$rows = array(':v1' => $_POST['id']);

		$hasil = query_view($sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        // header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($rows[0]);
    }

    public function editData16()
    {
        $nomor = $_POST['nomor'];
        $program = $_POST['program'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $nama_perusahaan = $_POST['nama_perusahaan'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

		$sql = "UPDATE dokumen_bidang SET 
            program = :v2,
            tahun_ajaran = :v3,
            semester = :v4,
            nama_perusahaan = :v5,
            tempat = :v8,
            tanggal = :v9,
            keterangan = :v10
        WHERE NOMOR = :v1";
		$data = array(  
                    ':v1' => $nomor,
                    ':v2' => $program,
                    ':v3' => $tahun_ajaran,
                    ':v4' => $semester,
                    ':v5' => $nama_perusahaan,
                    ':v8' => $tempat,
                    ':v9' => $tanggal,
                    ':v10' => $keterangan
                );

		query_update($sql, $data);
    }

    public function getData17()
    {
		$sql = "SELECT NOMOR, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN FROM DOKUMEN_BIDANG WHERE NOMOR = :v1";
		$rows = array(':v1' => $_POST['id']);

		$hasil = query_view($sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        // header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($rows[0]);
    }

    public function editData17()
    {
        $nomor = $_POST['nomor'];
        $program = $_POST['program'];
        $kategori_pembimbing = $_POST['kategori_pembimbing'];
        $nama_mahasiswa = $_POST['nama_mahasiswa'];
        $jenis_tugasakhir = $_POST['jenis_tugasakhir'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

		$sql = "UPDATE dokumen_bidang SET 
            program = :v2,
            tahun_ajaran = :v3,
            semester = :v4,
            kategori_pembimbing = :v5,
            nama_mahasiswa = :v6,
            jenis_tugasakhir = :v7,
            tempat = :v8,
            tanggal = :v9,
            keterangan = :v10
        WHERE NOMOR = :v1";
		$data = array(  
                    ':v1' => $nomor,
                    ':v2' => $program,
                    ':v3' => $tahun_ajaran,
                    ':v4' => $semester,
                    ':v5' => $kategori_pembimbing,
                    ':v6' => $nama_mahasiswa,
                    ':v7' => $jenis_tugasakhir,
                    ':v8' => $tempat,
                    ':v9' => $tanggal,
                    ':v10' => $keterangan
                );

		query_update($sql, $data);
    }

    public function getData18()
    {
		$sql = "SELECT NOMOR, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN, KEDUDUKAN_PADA_DELEGASI FROM DOKUMEN_BIDANG WHERE NOMOR = :v1";
		$rows = array(':v1' => $_POST['id']);

		$hasil = query_view($sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        // header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($rows[0]);
    }

    public function editData18()
    {
        $nomor = $_POST['nomor'];
        $program = $_POST['program'];
        $kategori_penguji = $_POST['kategori_penguji'];
        $nama_mahasiswa = $_POST['nama_mahasiswa'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

		$sql = "UPDATE dokumen_bidang SET 
            program = :v2,
            tahun_ajaran = :v3,
            semester = :v4,
            kategori_penguji = :v5,
            nama_mahasiswa = :v6,
            tempat = :v8,
            tanggal = :v9,
            keterangan = :v10
        WHERE NOMOR = :v1";
		$data = array(  
                    ':v1' => $nomor,
                    ':v2' => $program,
                    ':v3' => $tahun_ajaran,
                    ':v4' => $semester,
                    ':v5' => $kategori_penguji,
                    ':v6' => $nama_mahasiswa,
                    ':v8' => $tempat,
                    ':v9' => $tanggal,
                    ':v10' => $keterangan
                );

		query_update($sql, $data);
    }

    public function getData19()
    {
		$sql = "SELECT NOMOR, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN, TINGKATAN_PERTEMUAN_ILMIAH, KEDUDUKAN_PERTEMUAN_ILMIAH FROM DOKUMEN_BIDANG WHERE NOMOR = :v1";
		$rows = array(':v1' => $_POST['id']);

		$hasil = query_view($sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        // header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($rows[0]);
    }

    public function editData19()
    {
        $nomor = $_POST['nomor'];
        $program = $_POST['program'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

		$sql = "UPDATE dokumen_bidang SET 
            program = :v2,
            tahun_ajaran = :v3,
            semester = :v4,
            tempat = :v8,
            tanggal = :v9,
            keterangan = :v10
        WHERE NOMOR = :v1";
		$data = array(  
                    ':v1' => $nomor,
                    ':v2' => $program,
                    ':v3' => $tahun_ajaran,
                    ':v4' => $semester,
                    ':v8' => $tempat,
                    ':v9' => $tanggal,
                    ':v10' => $keterangan
                );

		query_update($sql, $data);
    }

    public function getData20()
    {
		$sql = "SELECT NOMOR, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN, KATEGORI_PENGHARGAAN FROM DOKUMEN_BIDANG WHERE NOMOR = :v1";
		$rows = array(':v1' => $_POST['id']);

		$hasil = query_view($sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        // header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($rows[0]);
    }

    public function editData20()
    {
        $nomor = $_POST['nomor'];
        $program = $_POST['program'];
        $nama_produk = $_POST['nama_produk'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

		$sql = "UPDATE dokumen_bidang SET 
            program = :v2,
            tahun_ajaran = :v3,
            semester = :v4,
            nama_produk = :v5,
            tempat = :v8,
            tanggal = :v9,
            keterangan = :v10
        WHERE NOMOR = :v1";
		$data = array(  
                    ':v1' => $nomor,
                    ':v2' => $program,
                    ':v3' => $tahun_ajaran,
                    ':v4' => $semester,
                    ':v5' => $nama_produk,
                    ':v8' => $tempat,
                    ':v9' => $tanggal,
                    ':v10' => $keterangan
                );

		query_update($sql, $data);
    }

    public function getData21()
    {
		$sql = "SELECT NOMOR, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN, TINGKATAN_BUKU_PELAJARAN FROM DOKUMEN_BIDANG WHERE NOMOR = :v1";
		$rows = array(':v1' => $_POST['id']);

		$hasil = query_view($sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        // header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($rows[0]);
    }

    public function editData21()
    {
        $nomor = $_POST['nomor'];
        $program = $_POST['program'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $jenis_produk = $_POST['jenis_produk'];
        $judul_bahan_ajar = $_POST['judul_bahan_ajar'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

		$sql = "UPDATE dokumen_bidang SET 
            program = :v2,
            tahun_ajaran = :v3,
            semester = :v4,
            jenis_produk = :v5,
            judul_bahan_ajar = :v6,
            tempat = :v8,
            tanggal = :v9,
            keterangan = :v10
        WHERE NOMOR = :v1";
		$data = array(  
                    ':v1' => $nomor,
                    ':v2' => $program,
                    ':v3' => $tahun_ajaran,
                    ':v4' => $semester,
                    ':v5' => $jenis_produk,
                    ':v6' => $judul_bahan_ajar,
                    ':v8' => $tempat,
                    ':v9' => $tanggal,
                    ':v10' => $keterangan
                );

		query_update($sql, $data);
    }

    public function getData22()
    {
		$sql = "SELECT NOMOR, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN, TINGKATAN_PRESTASI_OLAHRAGA FROM DOKUMEN_BIDANG WHERE NOMOR = :v1";
		$rows = array(':v1' => $_POST['id']);

		$hasil = query_view($sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        // header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($rows[0]);
    }

    public function editData22()
    {
        $nomor = $_POST['nomor'];
        $program = $_POST['program'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $nama_orasi_ilmiah = $_POST['nama_orasi_ilmiah'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

		$sql = "UPDATE dokumen_bidang SET 
            program = :v2,
            tahun_ajaran = :v3,
            semester = :v4,
            nama_orasi_ilmiah = :v5,
            tempat = :v8,
            tanggal = :v9,
            keterangan = :v10
        WHERE NOMOR = :v1";
		$data = array(
            ':v1' => $nomor,
            ':v2' => $program,
            ':v3' => $tahun_ajaran,
            ':v4' => $semester,
            ':v5' => $nama_orasi_ilmiah,
            ':v8' => $tempat,
            ':v9' => $tanggal,
            ':v10' => $keterangan
        );

		query_update($sql, $data);
    }

    public function getData23()
    {
		$sql = "SELECT NOMOR, NIP, PROGRAM, TEMPAT, TANGGAL, KETERANGAN, SEMESTER, TAHUN_AJARAN FROM DOKUMEN_BIDANG WHERE NOMOR = :v1";
		$rows = array(':v1' => $_POST['id']);

		$hasil = query_view($sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        // header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($rows[0]);
    }

    public function editData23()
    {
        $nomor = $_POST['nomor'];
        $program = $_POST['program'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $jabatan_pimpinan = $_POST['jabatan_pimpinan'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

		$sql = "UPDATE dokumen_bidang SET 
            program = :v2,
            tahun_ajaran = :v3,
            semester = :v4,
            jabatan_pimpinan = :v5,
            tempat = :v8,
            tanggal = :v9,
            keterangan = :v10
        WHERE NOMOR = :v1";
		$data = array(
            ':v1' => $nomor,
            ':v2' => $program,
            ':v3' => $tahun_ajaran,
            ':v4' => $semester,
            ':v5' => $jabatan_pimpinan,
            ':v8' => $tempat,
            ':v9' => $tanggal,
            ':v10' => $keterangan
        );

		query_update($sql, $data);
    }
}