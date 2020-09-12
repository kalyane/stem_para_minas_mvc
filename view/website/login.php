<link rel="stylesheet" href="assets/css/forms.css">

<div class="container contact">
	<h1>Login</h1>

	<form action="requests.php?classe=usuario&acao=logar" method="post">
	  <div class="form-group">
	    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
	  </div>
	  <div class="form-group">
	    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
	  </div>
	  <button type="submit" class="btn">Entrar</button> ou <a href="#">Cadastre-se</a>
	</form>
</div>