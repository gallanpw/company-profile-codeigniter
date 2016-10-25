<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Ice_crusher extends CI_Controller {
        public function index() {
            $data=array(
                'title' =>  'Ice Crusher - Remecconn',
                'isi'   =>  'tampilan-web/ice-crusher_view'
            );
            $this->load->view('layout/wrapper',$data);
        }
    }