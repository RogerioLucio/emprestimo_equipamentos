<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EquipamentoController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	

	/**
	* Recebe o post e faz a validação e redireciona para a página caso o usuário não se logou com sucesso
	*/
	public function cadastro(){

		$this->load->model('Equipamento_Model');
		$this->form_validation->set_rules('patrimonio','Patrimonio','required');
		$this->form_validation->set_rules('status','Status','required');
		$this->form_validation->set_rules('categoria','Categoria','required');
		if($this->form_validation->run() == TRUE){
			$resultado = $this->Equipamento_Model->insert();
			if($resultado == null){
				echo "ERRO";
			}else{
				redirect('equipamento/viewCadastro');
			}
		}else{
			echo validation_errors();
		}
		
		
	}

	public function atualiza(){
		$this->load->model('Equipamento_Model');

			$resultado = $this->Equipamento_Model->update();
			if($resultado == 0){
				$mensagem = 'Ocorreu um erro.';
			}else{
				$mensagem = 'Atualizado com sucesso!';
			}		

		$mensagem = json_encode($mensagem);
		
			echo $mensagem;
	}

	public function select(){
		$this->load->model('Equipamento_Model');
		$resultado = $this->Equipamento_Model->select(); 
		$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('equipamento/equipamento_cadastro', $resultado);
	}

	public function viewCadastro(){
		$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('equipamento/equipamento_cadastro');
	}

 	public function sucesso(){
 		echo "Equipamento cadastrado com Sucesso =p!";
 	}
}
