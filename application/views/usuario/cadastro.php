<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<body style="background-color: #00420c;">

<div class="container">
	
		<div class="col-md-12">
			TESTE
		</div>
		
	<div class="pagina">					
		
			<div class="div_cadastro">
				<form action='<?php echo base_url('usuario/cadastro_model');?>' method="POST">
					<center><label class="label-cadastro">Cadastro de Usuário</label></center><br>
				<div class="row">
					<div class="col-md-6">
						<label for="usuario" class="label-cadastro">Prontuário </label><br>
						<input class="form-control" type="text" name="prontuario">
					</div>
					<div class="col-md-6">
						<label for="usuario" class="label-cadastro">Nome </label><br>
						<input class="form-control" type="text" name="nome">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label for="senha" class="label-cadastro">Senha</label><br>
						<input class="form-control" type="text" name="senha">
					</div>
					<div class="col-md-6">
						<label for="senha" class="label-cadastro">Rg</label><br>
						<input class="form-control" type="text" name="rg">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label for="senha" class="label-cadastro">Email</label><br>
						<input class="form-control" type="text" name="email">
					</div>
					<div class="col-md-6">
						<label for="senha" class="label-cadastro">Login</label><br>
						<input class="form-control" type="text" name="login">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label for="senha" class="label-cadastro">Cpf</label><br>
						<input class="form-control" type="text" name="cpf">
					</div>
					<div class="col-md-6">
						<label for="senha" class="label-cadastro">Data de Nascimento</label><br>
						<input class="form-control" type="text" name="data_nasc">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label for="senha" class="label-cadastro">Telefone</label><br>
						<input class="form-control" type="text" name="telefone">
					</div>
					<div class="col-md-6">
						<label for="senha" class="label-cadastro">Celular</label><br>
						<input class="form-control" type="text" name="celular">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label for="senha" class="label-cadastro">Observações</label><br>
						<input class="form-control" type="text" name="observacoes">
					</div>
					<div class="col-md-6">
						<label for="senha" class="label-cadastro">Sexo</label><br>
						<input class="form-control" type="text" name="sexo">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label  class="label-cadastro">Cargo</label><br>
							<select name="cargo" class="form-control ">
						        <?php foreach ($cargo as $item): ?>
						            <option value='<?=$item->id_cargo?>'>
						            <?= $item->nome_cargo?>
						            </option> 
						        <?php endforeach;?>
					       </select><br> 
					</div>
					<div class="col-md-6">
						<label  class="label-cadastro">Setor</label><br>
							 <select name="setor" class="form-control ">
						        <?php foreach ($setor as $item): ?>
						            <option value='<?=$item->id_setor?>'>
						            <?= $item->nome_setor?>
						            </option> 
						        <?php endforeach;?>
					       </select><br>
					</div>
				</div>
				
				<div class="row">
					 <div class="col-md-12 text-right">
					 		<input type="submit" id="login_entrar" class="btn btn-primary" value="Cadastrar" >
					 </div>
				</div>
				
				</form>
			</div>
		
	</div>
</div>

</body>
</html>