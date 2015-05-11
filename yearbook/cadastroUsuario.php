<?php
include_once("../modelos/cabecalho_login.html");
?>

<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript" src="funcoes.js"></script>
    <div class="container">

      <div>
        
        
		 <form role="form" method="post" enctype="multipart/form-data" action="./cadastroNovoUsuario.php" class="form-signin">
		 <h3 class="form-signin-heading">Yearbook<br> Cadastro de Participante</h3>
			  <div class="form-group">
				<label for="InputNome">Nome Completo:</label>
				<input type="text" class="form-control" id="InputNome" name="nomeCompleto" placeholder="Nome completo" required autofocus>
			  </div>
			  <div>
				<label for "InputEmail">E-Mail:</label>
				<input type="text" class="form-control" id="InputEmail" name="email" placeholder="E-mail" required>
			  </div>
			  
			  <div>
				<label for "InputEstado">Estado:</label>
				<select name="uf" id="uf" class="form-control" onchange="buscaCidades(this.value)"  onload="buscaEstados()>
				<option value="AC">AC</option>
				<option value="AL">AL</option>
				<option value="AM">AM</option>
				<option value="AP">AP</option>
				<option value="BA">BA</option>
				<option value="CE">CE</option>
				<option value="DF">DF</option>
				<option value="ES">ES</option>
				<option value="GO">GO</option>
				<option value="MA">MA</option>
				<option value="MG">MG</option>
				<option value="MS">MS</option>
				<option value="MT">MT</option>
				<option value="PA">PA</option>
				<option value="PB">PB</option>
				<option value="PE">PE</option>
				<option value="PI">PI</option>
				<option value="PR">PR</option>
				<option value="RJ">RJ</option>
				<option value="RN">RN</option>
				<option value="RO">RO</option>
				<option value="RR">RR</option>
				<option value="RS">RS</option>
				<option value="SC">SC</option>
				<option value="SE">SE</option>
				<option value="SP">SP</option>
				<option value="TO">TO</option>
				</select>
			  </div>
			  
			  <div>			  
				<label for "InputCidade">Cidade:</label>
				<input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade">

			  </div>
			  
			  <div>
				<label for "InputFoto">Foto:</label>
				<input type="file" name="arquivoFoto" id="fileName" placeholder="Escolha um arquivo" size="40">
			  </div>
			  
			  <div class="form-group">
				<label for="InputDescricao">Descrição:</label>
				<textarea class="text" id="InputDescricao" rows="4" name="descricao" placeholder="Escreva sobre você"></textarea>
			  </div>
			  
			  <div class="form-group">
			  <label for="InputLogin">Login:</label>
				<input type="text" class="form-control" id="InputLogin" name="login" placeholder="Login desejado" required>
			  </div>
			  <div class="form-group">
				<label for="InputSenha">Senha:</label>
				<input type="password" class="form-control" id="InputSenha" name="passwd" placeholder="Senha (4 a 8 caracteres)">
			  </div>
			  <div class="form-group">
				<label for="InputSenhaConf">Confirmação de Senha:</label>
				<input type="password" class="form-control" id="InputSenhaConf" name="passwd2" placeholder="Confirme a senha">
			  </div>

			  <button type="submit" class="btn btn-primary">Cadastrar</button>
			  
			  <a class="btn btn-large" href="../yearbook"><h3>Voltar</h3></a>
		 </form>

	 </div>

	  
	  
    </div><!-- /.container -->

<?php
include_once("modelos/rodape_html.html");
?>