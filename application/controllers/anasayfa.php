<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class anasayfa extends CI_Controller {

    public function index()
    {

        $this->load->view('anasayfa_view');
    }
}

