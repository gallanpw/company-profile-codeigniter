<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Jasa_giling extends CI_Controller {
        public function index() {
            $data=array(
                'title' =>  'Jasa Giling - Remecconn',
                'isi'   =>  'tampilan-web/jasa-giling_view'
            );
            $this->load->view('layout/wrapper',$data);
        }
    }