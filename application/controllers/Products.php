<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Products extends CI_Controller {
        public function index() {
            $data=array(
                'title' =>  'Products - Remecconn',
                'isi'   =>  'tampilan-web/products_view'
            );
            $this->load->view('layout/wrapper',$data);
        }
    }