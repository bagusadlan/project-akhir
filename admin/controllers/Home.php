<?php

class Home extends Controller {
	public function index()
	{
	    $data['title'] = 'Home';
	    $data['aku']  = "aku";

	    $this->view('views/layouts/header',$data);
	    // $this->view('views/page/home',$data);
	    $this->view('views/layouts/footer');
	}
}