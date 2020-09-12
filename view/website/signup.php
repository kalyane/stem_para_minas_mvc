<link rel="stylesheet" href="assets/css/forms.css">

<div class="container contact">
	<h1>Cadastre-se</h1>

	<form id="cadastro" method="post" action="requests.php?classe=usuario&acao=cadastrar">
		<div class="row">
		    <div class="form-group col-sm-6">
		      <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome">
		    </div>
		    <div class="form-group col-sm-6">
		      <input type="text" id="sobrenome" name="sobrenome" class="form-control" placeholder="Sobrenome">
		    </div>
		</div>
	  <div class="form-group">
	    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
	  </div>
	  <div class="row">
		    <div class="form-group col-sm-6">
		      <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
		    </div>
		    <div class="form-group col-sm-6">
		      <input type="password" class="form-control" id="senha2" name="senha2" placeholder="Confirmar senha">
		    </div>
		</div>
	  <button type="submit" class="btn">Cadastre-se</button> ou faca <a href="#">Login</a>
	</form>
</div>