<?php

class HapusDataDokumen extends Controller
{
    public function __construct()
    {
        $this->level();
    }

    public function hapusDataPendidikan($id)
    {
        global $con;

        $sql = "DELETE dokumen_bidang WHERE nomor=:v1";
        $data = array(':v1' => $id);
        query_delete($sql, $data);

        header('Location: ' . base_url . '/Pendidikan');
    }

    public function hapusDataPenunjang($id)
    {
        global $con;

        $sql = "DELETE dokumen_bidang WHERE nomor=:v1";
        $data = array(':v1' => $id);
        query_delete($sql, $data);

        header('Location: ' . base_url . '/Penunjang');
    }
}