<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<body style="background-color: #00420c;">

<div class="container">
	
		<div class="col-md-12">
			TESTE
		</div>
		
	<div class="pagina">					
		
			<div class="div_login">
				<form action='<?php echo base_url('usuario/login_model');?>' method="POST">
				<div class="row">
					<div class="col-md-12">
						<label for="usuario" >Prontuário </label><br>
						<input class="form-control" type="text" name="prontuario">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label for="senha">Senha</label><br>
						<input class="form-control" type="text" name="senha">
					</div>
				</div>

				<div class="row">
					 <div class="col-md-12">
					 		<input type="submit" id="login_entrar" class="btn btn-primary" value="Entrar" name="entrar">
					 </div>
				</div>
				<div class="row">
					 <div class="col-md-6">
					 		<input type="button" class="btn btn-link" value="Esqueci Minha senha" name="esqueci_senha">
					 </div>
					 <div class="col-md-6">
							<a href="<?php echo base_url('usuario/cadastro');?>"  class="btn btn-link">Registre</a>

					 </div>

				</div>
				</form>
			</div>
		
	</div>
</div>

</body>
</html>