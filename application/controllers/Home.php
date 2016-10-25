<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Home extends CI_Controller {
        
        public function __construct() {
            parent::__construct();
        }
        
        public function index() {
            $data=array(
                'title'     =>  'Remeccon',
                'isi'       =>  'tampilan-web/index_home'
            );
            $this->load->view('layout/wrapper-home',$data); 
        }
    }