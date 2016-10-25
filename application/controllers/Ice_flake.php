<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Ice_flake extends CI_Controller {
        public function index() {
            $data=array(
                'title' =>  'Ice Flake - Remecconn',
                'isi'   =>  'tampilan-web/ice-flake_view'
            );
            $this->load->view('layout/wrapper',$data);
        }
    }