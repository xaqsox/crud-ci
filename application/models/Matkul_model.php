<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matkul_model extends CI_Model
{
    private $table = 'matkul';

    public function rules()
    {
        return [
            [
                'field' => 'kode_matkul',
                'label' => 'kode_matkul',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'nama_matkul',
                'label' => 'nama_matkul',
                'rules' => 'trim|required'
            ],
        ];
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ["idMktl" => $id])->row();
    }
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("idMktl", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    public function save()
    {
        $data = array(
            "kode_matkul" => $this->input->post('kode_matkul'),
            "nama_matkul" => $this->input->post('nama_matkul'),
        );
        return $this->db->insert($this->table, $data);
    }
    public function update()
    {
        $data = array(
          "kode_matkul" => $this->input->post('kode_matkul'),
          "nama_matkul" => $this->input->post('nama_matkul'),);

        return $this->db->update($this->table, $data, array('idMktl' => $this->input->post('idMktl')));
    }
    public function delete($id)
    {
        return $this->db->delete($this->table, array("idMktl" => $id));
    }

}
