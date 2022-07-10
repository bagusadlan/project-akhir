<?php

// include_once "../includes/func.inc.php";

class Controller {
		
	public function view($view, $data = [])
	{
		require_once '../contents/' . $view . '.php';
	}

	public function level(){
		if($_SESSION['session_login'] == 'true') {
			
		}else{
			Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location: '. base_url . '/LoginAdmin');
			exit;
		}
	}

//	public function model($model)
//	{
//		require_once '../admin/models/' . $model . '.php';
//		return new $model;
//	}
}