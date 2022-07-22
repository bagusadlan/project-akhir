<?php

class AdminPendidikan extends Controller
{
    public function __construct()
    {
        $this->level();
    }

    public function index()
    {
        $data['title'] = 'Admin Pendidikan';

        $data['pendidikan'] = getAllBidangPendidikan();

        $data['penghitungPendidikan'] = getPenghitungPendidikan();

        $this->view('views/layouts/header', $data);
        $this->view('views/admin/admin-pendidikan', $data);
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