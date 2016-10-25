<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Mesin_rotomolding extends CI_Controller {
        public function index() {
            $data=array(
                'title' =>  'Rotomolding - Remecconn',
                'isi'   =>  'tampilan-web/mesin-rotomolding_view'
            );
            $this->load->view('layout/wrapper',$data);
        }
    }