<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen_model extends CI_Model
{
    private $table = 'dosen';
    public function rules()
    {
        return [
            [
                'field' => 'kode_dosen',  //samakan dengan atribute name pada tags input
                'label' => 'kode_dosen',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'nama_dosen',
                'label' => 'nama_dosen',
                'rules' => 'trim|required'
            ],
        ];
    }
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["idDsn" => $id])->row();
    }

    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("idDsn", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function save()
    {
        $data = array(
            "kode_dosen" => $this->input->post('kode_dosen'),
            "nama_dosen" => $this->input->post('nama_dosen'),
        );
        return $this->db->insert($this->table, $data);
    }
    public function update()
    {
        $data = array(
          "kode_dosen" => $this->input->post('kode_dosen'),
          "nama_dosen" => $this->input->post('nama_dosen'),);

        return $this->db->update($this->table, $data, array('idDsn' => $this->input->post('idDsn')));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("idDsn" => $id));
    }

}
