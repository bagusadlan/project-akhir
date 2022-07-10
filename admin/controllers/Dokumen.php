<?php

class Dokumen extends Controller
{
    public function __construct()
    {
        $this->level();
    }

    public function index()
    {
        $data['title'] = 'Dokumen';
	    $data['aku']  = "aku";

	    $this->view('views/layouts/header',$data);
	    $this->view('views/page/dokumen',$data);
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