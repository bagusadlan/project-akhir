<?php

class AdminPenunjang extends Controller
{
    public function __construct()
    {
        $this->level();
    }

    public function index()
    {
        $data['title'] = 'Admin Penunjang';

        $data['penunjang'] = getAllBidangPenunjang();

        $data['NIP'] = $_SESSION['nomor'];
        
        $this->view('views/layouts/header', $data);
        $this->view('views/admin/admin-penunjang', $data);
        $this->view('views/layouts/footer');
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