<?php

class Sekolah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sekolah_model');
    }

    public function index()
    {
        $data["title"] = "Sekolah - Intrasa";
        $data['sekolah'] = $this->Sekolah_model->getAllSekolah();
        if ($this->input->get('q')) {
            $data['sekolah'] = $this->Sekolah_model->searchSekolah();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('sekolah/index', $data);
        $this->load->view('templates/footer');
    }

    public function details($namaSekolah = null)
    {
        if ($namaSekolah == null) {
            redirect(base_url());
        }
        $data['title'] = $namaSekolah . ' - Intrasa';
        $data['sekolah'] = $this->Sekolah_model->getSekolah($namaSekolah);

        $this->load->view('templates/header', $data);
        $this->load->view('sekolah/' . strtolower($namaSekolah) . '/index', $data);
        $this->load->view('templates/footer');
    }
}
