<?php

class DashboardAdmin extends Controller
{
    public function __construct()
    {
        $this->level();
    }

    public function index()
    {
        $data['title'] = 'Dashboard Admin';

        $this->view('views/layouts/header', $data);
        // $this->view('views/page/angka-kredit', $data);
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