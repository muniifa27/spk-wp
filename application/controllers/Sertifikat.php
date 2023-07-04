<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sertifikat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Perhitungan_model');
    }

    public function index()
    {
        $data = [
            'hasil_wp' => $this->Perhitungan_model->get_hasil_limit()
        ];

        $this->load->view('sertifikat', $data);
    }
}
