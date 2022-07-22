<?php

class Penunjang extends Controller
{
    public function __construct()
    {
        $this->level();
    }

    public function index()
    {
        $data['title'] = 'Penunjang';

        $data['penunjang'] = getAllBidangPenunjang();

        $data['angkaKreditPerKategori'] = countAngkaKreditPendidikan()[1];

        $data['angkaKreditPenunjangPerKategori'] = countAngkaKreditPenunjang()[1][0];

        $data['allAngkaKredit'] = getAllAngkaKreditPenunjang($_SESSION['nomor']);

        $this->view('views/layouts/header', $data);
        $this->view('views/page/penunjang', $data);
        $this->view('views/layouts/footer');
    }

    public function kategoriPenunjang()
    {
        $data['angkaKreditPerKategori'] = countAngkaKreditPenunjang()[1];

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