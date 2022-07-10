<?php

class Pendidikan extends Controller
{
    public function __construct()
    {
        $this->level();
    }

    public function index()
    {
        $data['title'] = 'Pendidikan';

        $data['pendidikan'] = getAllBidangPendidikan();

        $data['angkaKreditPerKategori'] = countAngkaKreditPendidikan()[1];

        $data['allAngkaKredit'] = getAllAngkaKredit($_SESSION['nomor']);

        $data['NIP'] = $_SESSION['nomor'];
        
        $this->view('views/layouts/header', $data);
        $this->view('views/page/pendidikan', $data);
        $this->view('views/layouts/footer');
    }

    public function kategoriPendidikan()
    {
        $data['angkaKreditPerKategori'] = countAngkaKreditPendidikan()[1];

        echo json_encode($data['angkaKreditPerKategori']);
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