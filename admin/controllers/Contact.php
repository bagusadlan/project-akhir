<?php

class Contact extends Controller
{
    public function index()
    {
        $data['title'] = 'Contact';

        $this->view('views/layouts/header', $data);
        $this->view('views/page/contact', $data);
        $this->view('views/layouts/footer');
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