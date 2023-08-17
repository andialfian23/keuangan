<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pemasukan_model', 'pemasukan');
        $this->load->model('pemakaian_model', 'pemakaian');
    }
    public function index()
    {
        $this->load->view('template/index', [
            'total' => $this->pemasukan->total(),
            'pemasukan_akhir' => $this->pemasukan->terakhir()->row()->jml_pemasukan,
            'gbpb' => json_decode($this->_grafik_bar_perbulan(), true),

            'judul' => 'Dashboard',
            'konten' => 'dashboard/index'
        ]);
    }

    private function _grafik_bar_perbulan()
    {
        $query = $this->pemakaian->perbulan();
        $i = 0;
        $data = [];
        $row_tanggal = [];
        $row_pemasukan = [];
        $row_pengeluaran = [];
        foreach ($query->result() as $key) {
            $row_tanggal[$i] = date('Y-m', strtotime($key->per_bulan));
            $row_pemasukan[$i] = $key->total_pemasukan;
            $row_pengeluaran[$i] = $key->total_pemakaian;
            $i++;
        }
        $data = [
            'tgl' => $row_tanggal,
            'pemasukan' => $row_pemasukan,
            'pengeluaran' => $row_pengeluaran,
        ];
        return json_encode($data);
    }
}
