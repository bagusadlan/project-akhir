<?php

class Home extends Controller {
	public function index()
	{
	    $data['title'] = 'Home';
	    $data['aku']  = "aku";

		echo '<pre>';
		var_dump('NINDY PUSPITA');
		echo '</pre>';
	    $this->view('views/layouts/header',$data);
	    $this->view('views/page/home',$data);
	    $this->view('views/layouts/footer');
	}
}