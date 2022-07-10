<?php

class Egator extends Controller
{
    public function __construct()
    {
        $this->level();
    }
    
    public function index()
    {
        $data = [];
        $data['title'] = 'Dashboard';

        // $this->view('views/layouts/header',$data);
	    $this->view('views/page/egator',$data);
        // $this->view('views/layouts/footer', $data);
    }

    public function show()
    {
        # code...
    }

    public function store()
    {

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