<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Pullverizer_mill extends CI_Controller {
        public function index() {
            $data=array(
                'title' =>  'Pullverizer Mill - Remecconn',
                'isi'   =>  'tampilan-web/pullverizer-mill_view'
            );
            $this->load->view('layout/wrapper',$data);
        }
    }