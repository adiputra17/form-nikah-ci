<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NikahController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('NikahModel');
		$this->load->helper('url');
		$this->load->helper('html');
    	$this->load->helper('form');
    	$this->load->helper('directory');
    }

	public function index(){
		// $this->load->view('nikah/create');
		$this->load->view('nikah/home');
	}

	public function create(){
		// $this->load->view('nikah/home');
		$this->load->view('nikah/create');
	}

	public function list(){
		$this->load->view('nikah/list');
	}

	public function showList(){
		$data['id'] = $_POST['id'];
		$this->load->view('nikah/showList', $data);
	}

	function insert(){
		
		$lain=array(
			'warga'=>$_POST['warga'],
			'tanggal'=>$_POST['tanggal'],
			'hari'=>$_POST['hari'],
			'jam'=>$_POST['jam']
		);
		$pengantinpria=array(
			'pria11'=>$_POST['pria11'],
			'pria12'=>$_POST['pria12'],
			'pria13'=>$_POST['pria13'],
			'pria14'=>$_POST['pria14'],
			'pria15'=>$_POST['pria15'],
			'pria16'=>$_POST['pria16'],
			'pria17'=>$_POST['pria17'],
			'pria18'=>$_POST['pria18'],
			'pria19'=>$_POST['pria19'],
			'pria110'=>$_POST['pria110'],
			'pria111'=>$_POST['pria111']
		);
		$pengantinwanita=array(
			'wanita11'=>$_POST['wanita11'],
			'wanita12'=>$_POST['wanita12'],
			'wanita13'=>$_POST['wanita13'],
			'wanita14'=>$_POST['wanita14'],
			'wanita15'=>$_POST['wanita15'],
			'wanita16'=>$_POST['wanita16'],
			'wanita17'=>$_POST['wanita17'],
			'wanita18'=>$_POST['wanita18'],
			'wanita19'=>$_POST['wanita19'],
			'wanita110'=>$_POST['wanita110'],
			'wanita111'=>$_POST['wanita111']
		);
		$bapakpria=array(
			'pria21'=>$_POST['pria21'],
			'pria22'=>$_POST['pria22'],
			'pria23'=>$_POST['pria23'],
			'pria24'=>$_POST['pria24'],
			'pria25'=>$_POST['pria25'],
			'pria26'=>$_POST['pria26'],
			'pria27'=>$_POST['pria27']
		);
		$bapakwanita=array(
			'wanita21'=>$_POST['wanita21'],
			'wanita22'=>$_POST['wanita22'],
			'wanita23'=>$_POST['wanita23'],
			'wanita24'=>$_POST['wanita24'],
			'wanita25'=>$_POST['wanita25'],
			'wanita26'=>$_POST['wanita26'],
			'wanita27'=>$_POST['wanita27']
		);
		$ibupria=array(
			'pria31'=>$_POST['pria31'],
			'pria32'=>$_POST['pria32'],
			'pria33'=>$_POST['pria33'],
			'pria34'=>$_POST['pria34'],
			'pria35'=>$_POST['pria35'],
			'pria36'=>$_POST['pria36'],
			'pria37'=>$_POST['pria37']
		);
		$ibuwanita=array(
			'wanita31'=>$_POST['wanita31'],
			'wanita32'=>$_POST['wanita32'],
			'wanita33'=>$_POST['wanita33'],
			'wanita34'=>$_POST['wanita34'],
			'wanita35'=>$_POST['wanita35'],
			'wanita36'=>$_POST['wanita36'],
			'wanita37'=>$_POST['wanita37']
		);
		$saksipria=array(
			'pria41'=>$_POST['pria41'],
			'pria42'=>$_POST['pria42'],
			'pria43'=>$_POST['pria43'],
			'pria44'=>$_POST['pria44'],
			'pria45'=>$_POST['pria45'],
			'pria46'=>$_POST['pria46'],
			'pria47'=>$_POST['pria47']
		);
		$saksiwanita=array(
			'wanita41'=>$_POST['wanita41'],
			'wanita42'=>$_POST['wanita42'],
			'wanita43'=>$_POST['wanita43'],
			'wanita44'=>$_POST['wanita44'],
			'wanita45'=>$_POST['wanita45'],
			'wanita46'=>$_POST['wanita46'],
			'wanita47'=>$_POST['wanita47']
		);

		//insert to DB
		$this->NikahModel->insert(
			$lain,
			$pengantinpria, $pengantinwanita, 
			$bapakpria, $bapakwanita, 
			$ibupria, $ibuwanita, 
			$saksipria, $saksiwanita
		);

		//for 'lain'
		$rank0 = "SET @rank0 = 0";
		$this->db->query($rank0);
		$rankLain = "update lain a join (select lainid, @rank0:=@rank0+1 as rank0 from lain order by lainid) b on a.lainid = b.lainid set a.lainid = b.rank0";
		$this->db->query($rankLain);

		//for 'pengantinpria'
		$rank1 = "SET @rank1 = 0";
		$this->db->query($rank1);
		$rankPengantinpria = "update pengantinpria a join (select priaid, @rank1:=@rank1+1 as rank1 from pengantinpria order by priaid) b on a.priaid = b.priaid set a.priaid = b.rank1";
		$this->db->query($rankPengantinpria);
		
		//for 'pengantinwanita'
		$rank2 = "SET @rank2 = 0";
		$this->db->query($rank2);
		$rankPengantinwanita = "update pengantinwanita a join (select wanitaid, @rank2:=@rank2+1 as rank2 from pengantinwanita order by wanitaid) b on a.wanitaid = b.wanitaid set a.wanitaid = b.rank2";
		$this->db->query($rankPengantinwanita);

		//for 'BapakPria'
		$rank3 = "SET @rank3 = 0";
		$this->db->query($rank3);
		$rankBapakPria = "update bapakpria a join (select pria2id, @rank3:=@rank3+1 as rank3 from bapakpria order by pria2id) b on a.pria2id = b.pria2id set a.pria2id = b.rank3";
		$this->db->query($rankBapakPria);

		//for 'BapakWanita'
		$rank4 = "SET @rank4 = 0";
		$this->db->query($rank4);
		$rankBapakWanita = "update bapakwanita a join (select wanita2id, @rank4:=@rank4+1 as rank4 from bapakwanita order by wanita2id) b on a.wanita2id = b.wanita2id set a.wanita2id = b.rank4";
		$this->db->query($rankBapakWanita);

		//for 'IbuPria'
		$rank5 = "SET @rank5 = 0";
		$this->db->query($rank5);
		$rankIbuPria = "update ibupria a join (select pria3id, @rank5:=@rank5+1 as rank5 from ibupria order by pria3id) b on a.pria3id = b.pria3id set a.pria3id = b.rank5";
		$this->db->query($rankIbuPria);

		//for 'IbuWanita'
		$rank6 = "SET @rank6 = 0";
		$this->db->query($rank6);
		$rankIbuWanita = "update ibuwanita a join (select wanita3id, @rank6:=@rank6+1 as rank6 from ibuwanita order by wanita3id) b on a.wanita3id = b.wanita3id set a.wanita3id = b.rank6";
		$this->db->query($rankIbuWanita);

		//for 'IbuPria'
		$rank7 = "SET @rank7 = 0";
		$this->db->query($rank7);
		$rankSaksiPria = "update saksipria a join (select pria4id, @rank7:=@rank7+1 as rank7 from saksipria order by pria4id) b on a.pria4id = b.pria4id set a.pria4id = b.rank7";
		$this->db->query($rankSaksiPria);

		//for 'IbuWanita'
		$rank8 = "SET @rank8 = 0";
		$this->db->query($rank8);
		$rankSaksiWanita = "update saksiwanita a join (select wanita4id, @rank8:=@rank8+1 as rank8 from saksiwanita order by wanita4id) b on a.wanita4id = b.wanita4id set a.wanita4id = b.rank8";
		$this->db->query($rankSaksiWanita);


		//redirect('NikahController','refresh');
		$this->load->view('nikah/show');
	}


	function convert_to_pdf(){
		define("DOMPDF_ENABLE_HTML5PARSER", true);
		define("DOMPDF_ENABLE_FONTSUBSETTING", true);
		define("DOMPDF_UNICODE_ENABLED", true);
		define("DOMPDF_DPI", 120);
		define("DOMPDF_ENABLE_REMOTE", true);
        // load dompdf
        $this->load->helper('dompdf');
        //load content html
        $html = $this->load->view('nikah/show', '', true);
        // create pdf using dompdf
        $filename = 'Form_Kawin';
        $paper = 'letter';
        //$set_paper = array(0,0,12*72,12*72);
        $orientation = 'potrait';
        // $dompdf->loadHtml($html);
        // $dompdf->render();
        pdf_create($html, $filename, $paper, $orientation);
    }
}
