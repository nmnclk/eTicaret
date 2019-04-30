<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index()
	{

        //$query = $this->db->get('kullanici')->row(); //tek sonuç için kullanıcalak metot


        $rows = $this->db->get('ilan')->result(); //select *from kullanıici

        $viewdata = array("rows" => $rows);

        $this->load->view('welcome_message',$viewdata);
    }
}

