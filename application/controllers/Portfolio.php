<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Portfolio extends CI_Controller {
        public function index() {
            $data=array(
                'title' =>  'Portfolio - Remecconn',
                'isi'   =>  'tampilan-web/portfolio_view'
            );
            $this->load->view('layout/wrapper',$data);
        }
    }