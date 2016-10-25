<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Jasa_polyurethane extends CI_Controller {
        public function index() {
            $data=array(
                'title' =>  'Jasa Polyurethane - Remecconn',
                'isi'   =>  'tampilan-web/jasa-polyurethane_view'
            );
            $this->load->view('layout/wrapper',$data);
        }
    }