<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Profile extends CI_Controller {
        public function index() {
            $data=array(
                'title' =>  'Profile - Remecconn',
                'isi'   =>  'tampilan-web/profile_view'
            );
            $this->load->view('layout/wrapper',$data);
        }
    }