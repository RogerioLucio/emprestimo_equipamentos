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

	function select(){
		$patrimonio = $this->input->post('num_patrimonio');
		$query = $this->db->get_where('equipamento', array('patrimonio_equipamento' => $patrimonio), 1);
		$equipamento = null; 
		foreach ($query->result() as $row) {
			$equipamento = $row;
		}
		return $equipamento;
				
	}

	function update(){
		$data = $this->input->post('Campos');

		$equipamento = array(
			array(
				'patrimonio_equipamento' => $data['patrimonio_equipamento'],
				'status_equipamento' => $data['status_equipamento'],
				'id_categoria' => $data['id_categoria']

				)
			);	
				
		$retorno = $this->db->update_batch('equipamento', $equipamento, 'patrimonio_equipamento');
		return $retorno;

	}


	function delete(){
		$patrimonio = $this->input->post('patrimonio');
		$retorno = $this->db->delete('equipamento' , array('patrimonio' => $patrimonio));
		return $retorno;

	}


}