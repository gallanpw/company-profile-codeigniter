<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Biji_plastik extends CI_Controller {
        public function index() {
            $data=array(
                'title' =>  'Biji Plastik - Remecconn',
                'isi'   =>  'tampilan-web/biji-plastik_view'
            );
            $this->load->view('layout/wrapper',$data);
        }
    }