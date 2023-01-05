<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Matkul extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Matkul_model");
    }
    public function index()
    {

        $data["title"] = "List Data Matkul";

        $data["data_matkul"] = $this->Matkul_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');

        $this->load->view('matkul/index', $data);
        $this->load->view('templates/footer');
    }


    public function add()
    {
        $Matkul = $this->Matkul_model; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Matkul->rules()); //menerapkan rules validasi pada mahasiswa_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada mahasiswa_model
        if ($validation->run()) {
            $Matkul->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mata Kuliah berhasil disimpan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("matkul");
        }
        $data["title"] = "Tambah Data Matkul";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('matkul/add', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('matkul');

        $Matkul = $this->Matkul_model;
        $validation = $this->form_validation;
        $validation->set_rules($Matkul->rules());

        if ($validation->run()) {
            $Matkul->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mata Kuliah berhasil disimpan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("matkul");
        }
        $data["title"] = "Edit Data Mata Kuliah";
        $data["data_matkul"] = $Matkul->getById($id);
        if (!$data["data_matkul"]) show_404();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('matkul/edit', $data);
        $this->load->view('templates/footer');
    }

    public function delete()
    {
        $id = $this->input->get('id');
        if (!isset($id)) show_404();
        $this->Matkul_model->delete($id);
        $msg['success'] = true;
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Mata Kuliah berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
        $this->output->set_output(json_encode($msg));
    }
}
