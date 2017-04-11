<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Equipamentos</title>
	<script src="<?php echo base_url('assets/js/equipamentos/equipamentos_atualiza.js')?>"></script>
</head>
<body>
	<div class="container">
		
		<div class="pagina-equipamentos">					
			
				<div class="div_login">
					<form action='<?php echo base_url('equipamento/cadastro');?>' method="POST">
						<div class="row">
							<div class="col-md-12">
								<label for="patrimonio" >Patrimônio </label><br>
								<input class="form-control" type="text" name="patrimonio" value="<?php if(isset($patrimonio_equipamento)) echo $patrimonio_equipamento?>" <?php if(isset($patrimonio_equipamento)) echo 'disabled'?>>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="status">Status</label><br>
								<input class="form-control" type="text" name="status" value="<?php if(isset($status_equipamento))echo $status_equipamento?>">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="categoria">Categoria</label><br>
								<select name="categoria" id="getCategorias" <?php if(isset($id_categoria)) echo 'disabled'?> >
									<option value="<?php if(isset($id_categoria))echo $id_categoria?>" selected></option>
								</select>
								<!-- <input class="form-control" type="text" name="categoria" value="<?php if(isset($id_categoria))echo $id_categoria?>"> -->
							</div>
						</div>
						<div class="row">
							 <div class="col-md-12">
							 		<input type="submit" class="btn btn-primary" value="Cadastrar" name="cadastrar" <?php if(isset($patrimonio_equipamento)) echo 'disabled'?>>
							 		<input type="hidden" name="base_url" value="<?php echo base_url()?>" />
							 		<input type="button" class="btn btn-primary" id="atualizar" value="Atualizar" />
							 </div>
						</div>
					</form>
				</div>
		</div>
	</div>
</body>
</html>