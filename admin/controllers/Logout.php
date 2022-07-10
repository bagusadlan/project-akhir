<?php

class Logout {
	public function Logout(){
		session_start();
		unset($_SESSION['session_login']);
		unset($_SESSION['email']);
		unset($_SESSION['name']);
		unset($_SESSION['nomor']);
		unset($_SESSION['staff']);

		header('location: '. base_url . '/LoginAdmin');
	}

}