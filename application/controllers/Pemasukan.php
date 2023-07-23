<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemasukan extends CI_Controller
{
    var $table = 't_pemasukan';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pemasukan_model', 'pemasukan');
    }

    public function index()
    {
        $this->load->view('template/index', [
            'judul' => 'Pemasukan',
            'konten' => 'dashboard/index_pemasukan'
        ]);
    }

    public function insert()
    {
        $data_values = [
            'tgl_pemasukan' => $this->input->post('tgl_pemasukan', true),
            'jml_pemasukan' => $this->input->post('jml_pemasukan', true),
            'keterangan' => $this->input->post('keterangan', true),
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $this->db->insert($this->table, $data_values);

        echo json_encode($_POST);
    }

    public function update()
    {
        $data_set = [
            'tgl_pemasukan' => $this->input->post('tgl_pemasukan', true),
            'jumlah_pemasukan' => $this->input->post('jml_pemasukan', true),
            'keterangan' => $this->input->post('keterangan', true),
        ];

        $this->db->where('id', $_POST['id']);
        $this->db->update($this->table, $data_set);

        echo json_encode($_POST);
    }

    public function delete()
    {
        $this->db->where('id_pemasukan', $_POST['id']);
        $this->db->delete('t_pemakaian');

        $this->db->where('id', $_POST['id']);
        $this->db->delete($this->table);

        echo json_encode($_POST);
    }

    public function show()
    {
        $output = [];
        $query = $this->pemasukan->get_datatables();
        foreach ($query as $key) {
            $row = [];
            $row = [
                'id' => $key->id,
                'tanggal' => $key->tanggal,
                'keterangan' => $key->keterangan,
                'pemasukan' => $key->pemasukan,
                'pemakaian' => $key->pemakaian,
                'sisa' => $key->sisa,
                'opsi' => $key->id
            ];
            $data[] = $row;
        }
        $output = [
            'draw' => $_POST['draw'],
            'data' => $data,
            "recordsFiltered"   => $this->pemasukan->total_entri_filtered(),
            "recordsTotal"      => $this->pemasukan->total_entri(),
        ];
        echo json_encode($output);
    }

    public function get()
    {
        $id_pemakaian = $_POST['id'];
        $query1 = $this->pemasukan->get_pemasukan($id_pemakaian)->row();
        $query2 = $this->pemasukan->get_pemakaian($id_pemakaian);
        $output = [];
        $output = [
            'pemasukan' => $query1,
            'pemakaian' => $query2->result(),
            'total_row' => $query2->num_rows()
        ];
        echo json_encode($output);
    }
}
