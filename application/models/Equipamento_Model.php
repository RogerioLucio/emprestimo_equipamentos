<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Equipamento_Model extends CI_Model{
	

	function insert(){
		$patrimonio = $this->input->post('patrimonio');
		$status = $this->input->post('status');
		$categoria = $this->input->post('categoria');

		$this->db->set('patrimonio_equipamento' , $patrimonio);

		$this->db->set('status_equipamento' , $status);

		$this->db->set('id_categoria', $categoria);

		$retorno = $this->db->insert('equipamento');

		return $retorno;

	}

	function update(){
		$data = array(
			'status_equipamento' => $this->input->post('status_equipamento')
			);

		$retorno = $this->db->replace('equipamento' , $data);
		return $retorno;

	}

	function delete(){
		$patrimonio = $this->input->post('patrimonio');
		$retorno = $this->db->delete('equipamento' , array('patrimonio' => $patrimonio));
		return $retorno;

	}


}