<?php

class HapusDataDokumen extends Controller
{
    public function __construct()
    {
        $this->level();
    }

    public function hapusDataPendidikan($id)
    {
        $con = konekDb();

        $sql = "DELETE dokumen_bidang WHERE nomor=:v1";
        $data = array(':v1' => $id);
        $hasil = query_delete($con, $sql, $data);

        header('Location: ' . base_url . '/Pendidikan');
    }

    public function hapusDataPenunjang($id)
    {
        $con = konekDb();

        $sql = "DELETE dokumen_bidang WHERE nomor=:v1";
        $data = array(':v1' => $id);
        $hasil = query_delete($con, $sql, $data);

        header('Location: ' . base_url . '/Penunjang');
    }
}