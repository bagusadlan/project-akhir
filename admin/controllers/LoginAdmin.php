<?php

class LoginAdmin extends Controller {

	public function __construct()
	{
		if(isset($_SESSION['session_login'])) {
			header('location: '. base_url . '/Dashboard');
			exit;
		}
	}
	
	public function index()
	{

	    $data['title'] = 'Halaman Login';
	    $data['aku']  = "aku";
		$data['cek'] = 'Admin';
	    // $this->view('views/partials/header-login',$data);
	    $this->view('views/login',$data);
	    // $this->view('views/partials/footer');
	}

	public function prosesLogin() {
		
		$u= $_POST['email'];
        $p =$_POST['password'];

        $header=array("netid: $u","password: ".base64_encode($p));
        $data = curl_init();
        curl_setopt($data, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($data, CURLOPT_HTTPHEADER, $header);
        curl_setopt($data, CURLOPT_URL, "https://login.pens.ac.id/auth/");
        curl_setopt($data, CURLOPT_TIMEOUT, 9);

        $hasil = curl_exec($data);
        curl_close($data);

		$decode = json_decode($hasil);

		if($hasil != 'auth error'){
			if($decode->NIP){
				$con = konekDb();

				$staff = getPegawai($con, $decode->NIP)[0];

				$jabfung = getPegawai($con, $decode->NIP)[1];

				$_SESSION['email'] = $u;
				$_SESSION['name'] =  $decode->Name;
				$_SESSION['nomor'] = $decode->NIP;
				
				$_SESSION['session_login'] = 'true';
				$_SESSION['staff'] = $staff;
				$_SESSION['jabfung'] = $jabfung;

				header('location: '. base_url . '/Dashboard');
			}else{
				Flasher::setMessage('Username / Password','salah.','danger');
				header('location: '. base_url . '/LoginAdmin');
			}
		}else{
			Flasher::setMessage('Username / Password','salah.','danger');
			header('location: '. base_url . '/LoginAdmin');
		}
	
	}
}