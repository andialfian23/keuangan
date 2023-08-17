<?php if (!defined('BASEPATH'))    exit('No direct script access allowed');

class pemakaian_model extends CI_Model
{
    var $table = 't_pemakaian';

    // TABEL LAPORAN PEMAKAIAN MINGGUAN
    public function get_query()
    {
        $column_order = [
            'tgl_awal',
            'total',
            'rata_rata',
        ];
        $column_search = [
            'tgl_awal',
            'total',
            'rata_rata',
        ];

        $this->db->select("DATE(DATE_SUB(tgl_pemakaian, INTERVAL WEEKDAY(tgl_pemakaian) DAY)) as minggu_ke, 
                        MIN(tgl_pemakaian) as tgl_awal,
                        MAX(tgl_pemakaian) as tgl_akhir,
                        SUM(jml_pemakaian) as total,
                        AVG(jml_pemakaian) as rata_rata", FALSE);
        $this->db->from($this->table);

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

        $this->db->group_by('minggu_ke');

        if (isset($_POST['order'])) {
            $this->db->order_by($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('minggu_ke', 'ASC');
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

    //GRAFIK
    public function mingguan()
    {
        return $this->db->select("DATE(DATE_SUB(tgl_pemakaian, 
                        INTERVAL WEEKDAY(tgl_pemakaian) DAY)) as minggu_ke, 
                        MIN(tgl_pemakaian) as tgl_awal, MAX(tgl_pemakaian) as tgl_akhir,
                        SUM(jml_pemakaian) as total, AVG(jml_pemakaian) as rata_rata", FALSE)
            ->from($this->table)
            ->group_by('minggu_ke')
            ->order_by('minggu_ke', 'ASC')
            ->get()->result();
    }

    public function perbulan()
    {
        return $this->db->select("CONCAT(YEAR(tgl_pemasukan),'-',MONTH(tgl_pemasukan)) as per_bulan, 
            sum(jml_pemasukan) as total_pemasukan, 
            (SELECT sum(jml_pemakaian) FROM t_pemakaian 
                WHERE YEAR(tgl_pemakaian)=YEAR(a.tgl_pemasukan) AND MONTH(tgl_pemakaian)=MONTH(a.tgl_pemasukan)) as total_pemakaian")
            ->from('t_pemasukan a')->group_by(['YEAR(tgl_pemasukan)', 'MONTH(tgl_pemasukan)'])->get();
    }
}
