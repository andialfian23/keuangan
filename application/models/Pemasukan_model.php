<?php if (!defined('BASEPATH'))    exit('No direct script access allowed');

class pemasukan_model extends CI_Model
{
    var $table = 't_pemasukan';

    // DATATABLES TABEL PEMASUKAN
    public function get_query()
    {
        $column_order     = [
            'tgl_pemasukan',
            'keterangan',
            'pemasukan',
            'pemakaian',
            'sisa',
        ];
        $column_search     = [
            'tgl_pemasukan',
            'keterangan',
            'pemasukan',
            'pemakaian',
            'sisa',
        ];

        $this->db->select("
            a.id as id,
            a.tgl_pemasukan as tanggal,
            a.keterangan as keterangan,
            a.jml_pemasukan as pemasukan,
            (SELECT sum(jml_pemakaian) FROM t_pemakaian WHERE id_pemasukan=a.id) as pemakaian,
            a.jml_pemasukan - (SELECT sum(jml_pemakaian) FROM t_pemakaian WHERE id_pemasukan=a.id) as sisa
        ")->from($this->table . ' a');

        $i = 0;
        foreach ($column_search as $item) {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {
                if ($i === 0) {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
                if (count($column_search) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {
            $this->db->order_by($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('a.tgl_pemasukan', 'DESC');
        }
    }
    public function get_datatables()
    {
        $this->get_query();
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
            $query = $this->db->get();
            if ($query) {
                return $query->result();
            }
        } else {
            $query = $this->db->get();
            if ($query) {
                return $query->result();
            }
        }
    }
    public function total_entri_filtered()
    {
        $this->get_query();
        return $this->db->get()->num_rows();
    }
    public function total_entri()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function get_pemasukan($id)
    {
        return $this->db->where('id', $id)->get('t_pemasukan');
    }
    public function get_pemakaian($id_pemasukan)
    {
        return $this->db->where('id_pemasukan', $id_pemasukan)->order_by('tgl_pemakaian', 'ASC')->get('t_pemakaian');
    }

    // TOTAL
    public function total()
    {
        return $this->db->select("
        sum(jml_pemasukan) as total_pemasukan,
        (SELECT sum(jml_pemakaian) FROM t_pemakaian)  as total_pemakaian,
        (sum(jml_pemasukan) - (SELECT sum(jml_pemakaian) FROM t_pemakaian)) as total_sisa,
        avg((SELECT avg(jml_pemakaian) FROM t_pemakaian)) as avg_pemakaian
        ")->from('t_pemasukan a')->get()->row();
    }
    public function terakhir()
    {
        return $this->db->select('jml_pemasukan')->order_by('tgl_pemasukan', 'DESC')->limit(1)->get($this->table);
    }
}