<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tes_m extends CI_Model
{
    public function get()
    {
        $this->db->from('biodata');
        $query = $this->db->get();
        return $query;
    }
    public function add($post)
    {
        $data = [
            'full_name' => $this->input->post('fullname'),


        ];
        $this->db->insert('biodata', $data);
    }
    public function del($id)
    {
        $this->db->where('id_biodata', $id);
        $this->db->delete('biodata');
    }
}
