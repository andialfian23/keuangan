<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pemakaian_model', 'pemakaian');
    }

    public function index()
    {
        $this->load->view('template/index', [
            'judul' => 'Laporan Pengeluaran Mingguan',
            'konten' => 'dashboard/index_laporan'
        ]);
    }

    public function show()
    {
        $output = [];
        $query = $this->pemakaian->get_datatables();
        foreach ($query as $key) {
            $row = [];
            $row = [
                'tanggal' => date('d F Y', strtotime($key->tgl_awal)) . ' - ' . date('d F Y', strtotime($key->tgl_akhir)),
                'total' => $key->total,
                'rata_rata' => $key->rata_rata,
            ];
            $data[] = $row;
        }
        $output = [
            'draw' => $_POST['draw'],
            'data' => $data,
            "recordsFiltered"   => $this->pemakaian->total_entri_filtered(),
            "recordsTotal"      => $this->pemakaian->total_entri(),
        ];
        echo json_encode($output);
    }
}
