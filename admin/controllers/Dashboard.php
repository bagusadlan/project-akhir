<?php

class Dashboard extends Controller
{
    public function __construct()
    {
        $this->level();
    }
    
    public function index()
    {
        $data = [];
        $data['title'] = 'Dashboard';

        $data['angkaKreditPerPeriode'] = countAngkaKreditPendidikan()[2]['year'];
        $data['angkaKreditPendidikanPerPeriode'] = countAngkaKreditPendidikan()[2]['kredit'];
        $data['angkaKreditPenunjangPerPeriode'] = [2, 1, 0, 0, 1, 1];
        
        $data['totalAngkaKreditPendidikan'] = countAngkaKreditPendidikan()[0];
        $data['totalAngkaKreditPenunjang'] = countAngkaKreditPenunjang()[0];
        $data['pesan'] = getPesan();

        // $this->view('views/layouts/header',$data);
	    $this->view('views/page/homepage',$data);
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