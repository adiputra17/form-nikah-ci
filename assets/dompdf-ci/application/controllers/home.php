<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index(){
		$this->load->view('dompdf');
	}
    
    function pdf_welcome_message(){
        // load dompdf
        $this->load->helper('dompdf');
        //load content html
        $html = $this->load->view('welcome_message', '', true);
        // create pdf using dompdf
        $filename = 'Message';
        $paper = 'A4';
        $orientation = 'potrait';
        pdf_create($html, $filename, $paper, $orientation);
    }
    
    function pdf_large_table(){
        // load dompdf
        $this->load->helper('dompdf');
        //load content html
        $html = $this->load->view('large_table', '', true);
        // create pdf using dompdf
        $filename = 'Large Table';
        $paper = 'A4';
        $orientation = 'potrait';
        pdf_create($html, $filename, $paper, $orientation);
    }
}
