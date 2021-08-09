<?php

class Landing extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ceriawisata_model');
    }

    public function index()
    {
        $data['trayek'] = $this->Ceriawisata_model->getTrayek();
        $data['destinasi'] = $this->Ceriawisata_model->getDestinasiLanding();
        $this->load->view('landing/landing_view', $data);
    }

    public function getDestinasi()
    {
        $data = $this->Ceriawisata_model->getDestinasiLanding();
        echo json_encode($data);
    }
}
