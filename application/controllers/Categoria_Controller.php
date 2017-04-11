
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_Controller extends CI_Controller {
	

	public function getCategorias(){
		$this->load->model('Categoria_Model');
		$categorias = $this->Categoria_Model->getCategorias();
		echo json_encode($categorias);
				
	}

	public function getById(){
		$id_categoria = $this->input->post('id_categoria');
		$this->load->model('Categoria_Model');
		$resultado = $this->Categoria_Model->getById($id_categoria);

		echo json_encode($resultado);
	}

}


