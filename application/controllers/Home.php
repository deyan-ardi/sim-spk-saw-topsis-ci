<?php

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

	public function index()
	{
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('status', 'Centang', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('home');
        } else {
            $data = [
                'nama'  => $this->input->post('nama', true),
                'nim'   => $this->input->post('nim', true)
            ];
            redirect(base_url()."spk/index/".$data['nama']."/".$data['nim']);
        }
	}

}