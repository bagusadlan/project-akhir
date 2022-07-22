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

        if ($_SESSION['jabfung'] == 'Asisten Ahli') {
            $kumMinimal = 150;
            $angkaKredit = 150;
            $angkaKreditSyarat = 50;
            $persentasePendidikan = 55;
        } elseif ($_SESSION['jabfung'] == 'Lektor') {
            $kumMinimal = 200;
            $angkaKredit = 200;
            $angkaKreditSyarat = 200;
            $persentasePendidikan = 45;
        } elseif ($_SESSION['jabfung'] == 'Lektor Kepala') {
            $kumMinimal = 400;
            $angkaKredit = 400;
            $angkaKreditSyarat = 450;
            $persentasePendidikan = 40;
        } elseif ($_SESSION['jabfung'] == 'Guru Besar') {
            $kumMinimal = 850;
            $angkaKredit = 850;
            $persentasePendidikan = 35;
        }
        $pendidikanMinimal = $persentasePendidikan/100 * $angkaKreditSyarat;
        $penunjangMaksimal = 10/100 * $angkaKreditSyarat;

        $data['periodePendidikan'] = countAngkaKreditPendidikan()[2]['year'];
        $data['angkaKreditPendidikanPerPeriode'] = countAngkaKreditPendidikan()[2]['kredit'];
        $data['periodePenunjang'] = countAngkaKreditPenunjang()[2]['year'];
        $data['angkaKreditPenunjangPerPeriode'] = countAngkaKreditPenunjang()[2]['kredit'];
        
        $data['totalAngkaKreditPendidikan'] = countAngkaKreditPendidikan()[0];
        $data['totalAngkaKreditPenunjang'] = countAngkaKreditPenunjang()[0];

        if ($data['totalAngkaKreditPendidikan'] >= $pendidikanMinimal) {
            $data['persentasePendidikan'] = 100;
            $data['kekuranganAngkaKredit'] = 0;
        } else {
            $data['persentasePendidikan'] = round($data['totalAngkaKreditPendidikan']/$pendidikanMinimal * 100, 1);
            $data['kekuranganAngkaKredit'] = $pendidikanMinimal - $data['totalAngkaKreditPendidikan'];
        }

        if ($data['totalAngkaKreditPenunjang'] >= $penunjangMaksimal) {
            $data['persentasePenunjang'] = 100;
        } else {
            $data['persentasePenunjang'] = round($penunjangMaksimal/100 * $data['totalAngkaKreditPenunjang'], 1);
        }

        $kekurangan = $pendidikanMinimal - $data['totalAngkaKreditPendidikan'];

        $data['persentaseKekurangan'] = round($kekurangan/$pendidikanMinimal * 100, 1);

        $data['pesan'] = getPesan();

        // $this->view('views/layouts/header',$data);
	    $this->view('views/page/homepage',$data);
        // $this->view('views/layouts/footer', $data);
    }

    public function countPercent()
    {

    }
}