<?php

class EditDataKumPendidikan extends Controller
{
    public function __construct()
    {
        $this->level();
    }
    
    public function index()
    {
        $data = [];
        $data['title'] = 'Dashboard';

        $data['angkaKreditPerPeriode'] = ['Jan', 'Feb', 'Apr', 'Jun', 'Sep', 'Nov'];
        $data['angkaKreditPendidikanPerPeriode'] = [5, 0, 7, 6, 0, 0];
        $data['angkaKreditPenunjangPerPeriode'] = [2, 1, 0, 0, 1, 1];
        
        $data['totalAngkaKreditPendidikan'] = countAngkaKreditPendidikan()[0];
        $data['totalAngkaKreditPenunjang'] = countAngkaKreditPenunjang()[0];
    }

    public function getData1()
    {
        $con = konekDb();
		$sql = "SELECT nomor, program, tahun_ajaran, semester, mata_kuliah, kelas, sks, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NOMOR = :v1";
		$rows = array(':v1' => $_POST['id']);

		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        // header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($rows[0]);
    }

    public function getData2()
    {
        $con = konekDb();
		$sql = "SELECT nomor, program, tahun_ajaran, semester, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NOMOR = :v1";
		$rows = array(':v1' => $_POST['id']);

		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        // header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($rows[0]);
    }

    public function editData1()
    {
        $con = konekDb();

        $nomor = $_POST['nomor'];
        $program = $_POST['program'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $mata_kuliah = $_POST['mata_kuliah'];
        $kelas = $_POST['kelas'];
        $sks = $_POST['jumlah_sks'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

		$sql = "UPDATE dokumen_bidang SET 
            program = :v2,
            tahun_ajaran = :v3,
            semester = :v4,
            mata_kuliah = :v5,
            kelas = :v6,
            sks = :v7,
            tempat = :v8,
            tanggal = :v9,
            keterangan = :v10
        WHERE NOMOR = :v1";
		$data = array(  
                    ':v1' => $nomor,
                    ':v2' => $program,
                    ':v3' => $tahun_ajaran,
                    ':v4' => $semester,
                    ':v5' => $mata_kuliah,
                    ':v6' => $kelas,
                    ':v7' => $sks,
                    ':v8' => $tempat,
                    ':v9' => $tanggal,
                    ':v10' => $keterangan
                );

		$hasil = query_update($con, $sql, $data);
    }

    public function editData2()
    {
        $con = konekDb();

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

		$hasil = query_update($con, $sql, $data);
    }

    public function getData3()
    {
        $con = konekDb();
		$sql = "SELECT nomor, program, nama_perusahaan, tahun_ajaran, semester, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NOMOR = :v1";
		$rows = array(':v1' => $_POST['id']);

		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        // header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($rows[0]);
    }

    public function editData3()
    {
        $con = konekDb();

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

		$hasil = query_update($con, $sql, $data);
    }

    public function getData4()
    {
        $con = konekDb();
		$sql = "SELECT nomor, program, kategori_pembimbing, nama_mahasiswa, jenis_tugasakhir, tahun_ajaran, semester, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NOMOR = :v1";
		$rows = array(':v1' => $_POST['id']);

		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        // header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($rows[0]);
    }

    public function editData4()
    {
        $con = konekDb();

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

		$hasil = query_update($con, $sql, $data);
    }

    public function getData5()
    {
        $con = konekDb();
		$sql = "SELECT nomor, program, kategori_penguji, nama_mahasiswa, tahun_ajaran, semester, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NOMOR = :v1";
		$rows = array(':v1' => $_POST['id']);

		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        // header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($rows[0]);
    }

    public function editData5()
    {
        $con = konekDb();

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

		$hasil = query_update($con, $sql, $data);
    }

    public function getData6()
    {
        $con = konekDb();
		$sql = "SELECT nomor, program, tahun_ajaran, semester, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NOMOR = :v1";
		$rows = array(':v1' => $_POST['id']);

		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        // header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($rows[0]);
    }

    public function editData6()
    {
        $con = konekDb();

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

		$hasil = query_update($con, $sql, $data);
    }

    public function getData7()
    {
        $con = konekDb();
		$sql = "SELECT nomor, program, nama_produk, tahun_ajaran, semester, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NOMOR = :v1";
		$rows = array(':v1' => $_POST['id']);

		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        // header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($rows[0]);
    }

    public function editData7()
    {
        $con = konekDb();

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

		$hasil = query_update($con, $sql, $data);
    }

    public function getData8()
    {
        $con = konekDb();
		$sql = "SELECT nomor, program, jenis_produk, judul_bahan_ajar, tahun_ajaran, semester, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NOMOR = :v1";
		$rows = array(':v1' => $_POST['id']);

		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        // header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($rows[0]);
    }

    public function editData8()
    {
        $con = konekDb();

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

		$hasil = query_update($con, $sql, $data);
    }

    public function getData9()
    {
        $con = konekDb();
		$sql = "SELECT nomor, program, nama_orasi_ilmiah, tahun_ajaran, semester, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NOMOR = :v1";
		$rows = array(':v1' => $_POST['id']);

		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        // header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($rows[0]);
    }

    public function editData9()
    {
        $con = konekDb();

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

		$hasil = query_update($con, $sql, $data);
    }

    public function getData10()
    {
        $con = konekDb();
		$sql = "SELECT nomor, jabatan_pimpinan, tahun_ajaran, semester, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NOMOR = :v1";
		$rows = array(':v1' => $_POST['id']);

		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        // header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($rows[0]);
    }

    public function editData10()
    {
        $con = konekDb();

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

		$hasil = query_update($con, $sql, $data);
    }

    public function getData11()
    {
        $con = konekDb();
		$sql = "SELECT nomor, program, kategori_pembimbing_dosen, tahun_ajaran, semester, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NOMOR = :v1";
		$rows = array(':v1' => $_POST['id']);

		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        // header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($rows[0]);
    }

    public function editData11()
    {
        $con = konekDb();

        $nomor = $_POST['nomor'];
        $program = $_POST['program'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $kategori_pembimbing_dosen = $_POST['kategori_pembimbing_dosen'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

		$sql = "UPDATE dokumen_bidang SET 
            program = :v2,
            tahun_ajaran = :v3,
            semester = :v4,
            kategori_pembimbing_dosen = :v5,
            tempat = :v8,
            tanggal = :v9,
            keterangan = :v10
        WHERE NOMOR = :v1";
		$data = array(
            ':v1' => $nomor,
            ':v2' => $program,
            ':v3' => $tahun_ajaran,
            ':v4' => $semester,
            ':v5' => $kategori_pembimbing_dosen,
            ':v8' => $tempat,
            ':v9' => $tanggal,
            ':v10' => $keterangan
        );

		$hasil = query_update($con, $sql, $data);
    }

    public function getData12()
    {
        $con = konekDb();
		$sql = "SELECT nomor, program, kategori_kegiatan, tahun_ajaran, semester, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NOMOR = :v1";
		$rows = array(':v1' => $_POST['id']);

		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        // header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($rows[0]);
    }

    public function editData12()
    {
        $con = konekDb();

        $nomor = $_POST['nomor'];
        $program = $_POST['program'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $kategori_kegiatan = $_POST['kategori_kegiatan'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

		$sql = "UPDATE dokumen_bidang SET 
            program = :v2,
            tahun_ajaran = :v3,
            semester = :v4,
            kategori_kegiatan = :v5,
            tempat = :v8,
            tanggal = :v9,
            keterangan = :v10
        WHERE NOMOR = :v1";
		$data = array(
            ':v1' => $nomor,
            ':v2' => $program,
            ':v3' => $tahun_ajaran,
            ':v4' => $semester,
            ':v5' => $kategori_kegiatan,
            ':v8' => $tempat,
            ':v9' => $tanggal,
            ':v10' => $keterangan
        );

		$hasil = query_update($con, $sql, $data);
    }

    public function getData13()
    {
        $con = konekDb();
		$sql = "SELECT nomor, program, durasi_pengembangan_diri, tahun_ajaran, semester, tempat, tanggal, keterangan FROM DOKUMEN_BIDANG WHERE NOMOR = :v1";
		$rows = array(':v1' => $_POST['id']);

		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

        // header('Content-type: application/json');
        http_response_code(200);
        echo json_encode($rows[0]);
    }

    public function editData13()
    {
        $con = konekDb();

        $nomor = $_POST['nomor'];
        $program = $_POST['program'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $durasi_pengembangan_diri = $_POST['durasi_pengembangan_diri'];
        $semester = $_POST['semester'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

		$sql = "UPDATE dokumen_bidang SET 
            program = :v2,
            tahun_ajaran = :v3,
            semester = :v4,
            durasi_pengembangan_diri = :v5,
            tempat = :v8,
            tanggal = :v9,
            keterangan = :v10
        WHERE NOMOR = :v1";
		$data = array(
            ':v1' => $nomor,
            ':v2' => $program,
            ':v3' => $tahun_ajaran,
            ':v4' => $semester,
            ':v5' => $durasi_pengembangan_diri,
            ':v8' => $tempat,
            ':v9' => $tanggal,
            ':v10' => $keterangan
        );

		$hasil = query_update($con, $sql, $data);
    }
}