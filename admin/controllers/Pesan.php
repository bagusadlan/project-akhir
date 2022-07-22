<?php

class Pesan extends Controller
{
    public function __construct()
    {
        $this->level();
    }
    
    public function index()
    {
        $data['title'] = 'Pesan';

        $data['pesan'] = getPesan();

        $this->view('views/layouts/header', $data);
        $this->view('views/page/pesan', $data);
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