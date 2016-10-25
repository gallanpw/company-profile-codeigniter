<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Contact extends CI_Controller {
        
        //public function __construct() {
            //parent::__construct();
            //$this->load->helper(array('form','url'));
            //$this->load->library(array('session', 'form_validation', 'email'));
        //}
        
        public function index() {
            $data=array(
                'title' =>  'Contact Us - Remecconn',
                'isi'   =>  'tampilan-web/contact_view'
            );
            
            $this->load->view('layout/wrapper',$data);
            $data = array();
            //$this->load->view('tampilan-web/contact_view', $data);
        }
        
        public function sendmessage() {
            $sender_email = $_REQUEST['email'];
            $sender_name = $_REQUEST['author'];
            $sender_subject = $_REQUEST['subject'];
            $sender_msg = $_REQUEST['text'];
            $recepient_email = 'salesdistindo8@gmail.com'; //diperlukan
            $recepient_cc = ''; //optional, bisa dikosongkan
            $recepient_bcc = ''; //optional, bisa dikosongkan
     
            $this->load->library('email'); // mengambil library email, untuk fungsi-fungsi email
            $this->load->library('parser'); // digunakan jika kita menggunakan metode templating
            $data = array(); // parameter yang akan dilemparkan ke view untuk isi/content
     
            $this->email->from($sender_email, $sender_name); // inisialisasi pengirim yang didapat dari Form
            $this->email->to($recepient_email); // email penerima
     
            if ($recepient_cc != '') {
                $this->email->cc($recepient_cc);
            }
            if ($recepient_bcc != '') {
                $this->email->bcc($recepient_bcc);
            }
            if (($sender_email == '') || ($sender_name == '') || ($sender_subject == '') || ($sender_msg == '')) {
                $data = array('main_view' => 'contacts', 'judulpages' => 'JUDUL PADA TAG TITLE', 'hasil' => 'false');
            } else {
                $this->email->subject($sender_subject);
                $this->email->message($sender_msg);
     
                if ($this->email->send()) { //proses pengiriman email
                    $data = array('main_view' => 'contacts', 'judulpages' => 'JUDUL PADA TAG TITLE PADA TEMPLATE', 'hasil' => 'true');
                }
            }
            //echo $this->email->print_debugger(); // digunakan jika kita ingin mengetahui detail pengiriman, mungkin bisa dikatakan resi :))
            //$this->parser->parse('template/f/templatecontact', $data); //data dilemparkan ke template yang sudah disediakan, dalam hal ini bisa diganti menggunakan $this->load->view('namaview');
            // atau
            //$this->load->view('tampilan-web/contact_view', $data);
        }
        
    }