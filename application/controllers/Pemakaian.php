<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemakaian extends CI_Controller
{
    var $table = 't_pemakaian';

    public function insert()
    {
        $data_values = [
            'id_pemasukan'   => $this->input->post('id_pemasukan'),
            'tgl_pemakaian'  => $this->input->post('tgl_pemakaian', true),
            'jml_pemakaian'  => $this->input->post('jml_pemakaian', true),
            'nama_pemakaian' => $this->input->post('nama_pemakaian', true),
            'created_at'     => date('Y-m-d H:i:s'),
        ];

        $this->db->insert($this->table, $data_values);

        echo json_encode($_POST);
    }

    public function delete()
    {
        $this->db->where('id', $_POST['id']);
        $this->db->delete($this->table);

        echo json_encode($_POST);
    }
}
