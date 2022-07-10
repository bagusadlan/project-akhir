<?php

class Profil extends Controller
{
    public function __construct()
    {
        $this->level();
    }
    
    public function index()
    {
        $data = [];

        $con = konekDb();
        $sql = "SELECT * FROM PEGAWAI WHERE NIP=:v1";
        $rows = array(':v1' => $_SESSION['nomor']);
        $hasil = query_view($con, $sql, $rows);
        oci_fetch_all($hasil, $rowPegawai, 0, 0, OCI_FETCHSTATEMENT_BY_ROW);

        foreach ($rowPegawai as $row) {
            $data = $row;
        }

        $data['title'] = 'Profil';

        $this->view('views/layouts/header', $data);
        $this->view('views/page/profil', $data);
        $this->view('views/layouts/footer');
    }

    public function show()
    {
        # code...
    }

    public function store()
    {
        # code...
    }

    public function update()
    {
        # code...
    }

    public function destroy()
    {
        # code...
    }
}