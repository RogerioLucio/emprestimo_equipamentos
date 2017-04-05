<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Equipamentos</title>
</head>
<body>
	<div class="container">
		
		<div class="pagina-equipamentos">					
			
				<div class="div_login">
					<form action='<?php echo base_url('equipamentos/cadastro');?>' method="POST">
						<div class="row">
							<div class="col-md-12">
								<label for="patrimonio" >Patrimônio </label><br>
								<input class="form-control" type="text" name="patrimonio">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="status">Status</label><br>
								<input class="form-control" type="text" name="status">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="status">Categoria</label><br>
								<input class="form-control" type="text" name="categoria">
							</div>
						</div>
						<div class="row">
							 <div class="col-md-12">
							 		<input type="submit" id="login_entrar" class="btn btn-primary" value="Cadastrar" name="entrar">
							 </div>
						</div>
					</form>
				</div>
		</div>
	</div>
</body>
</html>