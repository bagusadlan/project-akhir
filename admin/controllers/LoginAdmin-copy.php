<?php

class LoginAdmin extends Controller {

	public function __construct()
	{
		if(isset($_SESSION['session_login'])) {
			header('location: '. base_url . '/Admin');
			exit;
		}
	}
	
	public function index()
	{

	    $data['title'] = 'Halaman Login';
	    $data['aku']  = "aku";
		$data['cek'] = 'Admin';
	    $this->view('views/partials/header-login',$data);
	    $this->view('views/admin/auth/login',$data);
	    $this->view('views/partials/footer');
	}

	public function getPegawai($nip){
			$sqlPegawai = "SELECT * FROM PEGAWAI WHERE NIP=:v1";
			$nomorNip = array(':v1' =>  $nip);
			$pegawai = query_view($sqlPegawai, $nomorNip);
			
			oci_fetch_all($pegawai, $rowPegawai, 0, 0, OCI_FETCHSTATEMENT_BY_ROW);
			
			$tmpStaff = null;
			foreach ($rowPegawai as $row) {
				$tmpStaff = $row['STAFF'];
			}
			return $tmpStaff;
	}

	public function getStaff($staff){
		// echo $staff;
			$sqlStaff = "SELECT * FROM STAFF WHERE NOMOR=:v1";
			$nomorStaff = array(':v1' =>  $staff);
			$staff = query_view($sqlStaff, $nomorStaff);
			
			oci_fetch_all($staff, $rowStaff, 0, 0, OCI_FETCHSTATEMENT_BY_ROW);
		
			$tmpStaff = null;
			foreach ($rowStaff as $row) {
				$tmpStaff = $row['STAFF'];
			}
			return $tmpStaff;
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
		// echo $decode->NIP;
		// return;

		if($hasil != 'auth error'){
			if($decode->NIP){
				$db_user = "PA0009";
				$db_pass = "806307";
				$con = konekDb($db_user, $db_pass);

				$pegawai = $this->getPegawai($con, $decode->NIP);

				$staff = $this->getStaff($con, $pegawai); 
				// echo $staff;
				// return;

				$_SESSION['email'] = $u;
				$_SESSION['name'] =  $decode->Name;
				$_SESSION['nomor'] = $decode->NIP;
				$_SESSION['session_login'] = 'true';
				$_SESSION['staff'] = $staff;

				header('location: '. base_url . '/Admin');
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