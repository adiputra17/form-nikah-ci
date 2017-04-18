<?php
class NikahModel extends ci_model{
	function insert(
			 $lain, $pengantinpria, $pengantinwanita, $bapakpria, $bapakwanita, $ibupria, $ibuwanita, $saksipria, $saksiwanita
		){

		//lain
		$this->db->insert('lain',$lain);
		// pengantin
		$this->db->insert('pengantinpria',$pengantinpria);
		$this->db->insert('pengantinwanita',$pengantinwanita);
		// bapak
		$this->db->insert('bapakpria',$bapakpria);
		$this->db->insert('bapakwanita',$bapakwanita);
		// ibu
		$this->db->insert('ibupria',$ibupria);
		$this->db->insert('ibuwanita',$ibuwanita);
		// saksi
		$this->db->insert('saksipria',$saksipria);
		$this->db->insert('saksiwanita',$saksiwanita);
	}
}
