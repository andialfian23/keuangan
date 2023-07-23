<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pemasukan_model', 'pemasukan');
    }
    public function index()
    {
        $this->load->view('template/index', [
            'judul' => 'Dashboard',
            'total' => $this->pemasukan->total(),
            'konten' => 'dashboard/index'
        ]);
    }
}
