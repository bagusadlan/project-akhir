<?php

class AngkaKredit extends Controller
{
    public function __construct()
    {
        $this->level();
    }

    public function index()
    {
        $data['title'] = 'Angka Kredit';

        $data['pendidikan'] = getAllBidangPendidikan();

        $data['penunjang'] = getAllBidangPenunjang();

        $data['angkaKreditPerKategori'] = countAngkaKreditPendidikan()[1][0];

        $data['angkaKreditPenunjangPerKategori'] = countAngkaKreditPenunjang()[1][0];

        $data['allAngkaKredit'] = getAllAngkaKredit($_SESSION['nomor']);

        $this->view('views/layouts/header', $data);
        $this->view('views/page/angka-kredit', $data);
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