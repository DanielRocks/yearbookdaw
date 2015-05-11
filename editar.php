<?php
require_once("./authSession.php");  
require_once("./conf/confBD.php");
include_once("../modelos/cabecalho_yearbook.html");
?>
<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript" src="funcoes.js"></script>

<div class="container">
      <div class="starter-template">
        <h3 class="sub-header">Yearbook - Editar Participante</h3>    
      </div>
<?php
try{
	// se não foram passados 3 parâmetros na requisição, desvia para a mensagem de erro
	// "previne" acesso direto à página
	if(count($_GET)!=1){
		header("Location:./erroEdicao.php");
		die();
	}        
	
	$login = utf8_encode(htmlspecialchars($_SESSION['login']));
	$nomeCompleto = utf8_encode(htmlspecialchars($_GET['contato']));
	
	$conexao = conn_mysql();
		

		// instrução SQL básica (sem restrição de nome)
		$SQLSelect = 'SELECT * FROM participantes WHERE login=? AND nomeCompleto=?';
		
		//prepara a execução da sentença
		$operacao = $conexao->prepare($SQLSelect);					  
				
		//executa a sentença SQL com o valor passado por parâmetro
		$pesquisar = $operacao->execute(array($login, $nomeCompleto));
		
		//captura TODOS os resultados obtidos
		$resultados = $operacao->fetchAll();
?>
		 <form role="form" method="post" action="./editarContato.php">
			  <div class="form-group">
				<label for="InputNome">Nome:</label>
				<input type="text" class="form-control" id="InputNome" name="nomeCompleto" required autofocus value="<?php echo $resultados[0]['nomeCompleto']?>">
			  </div>
			  <div class="form-group">
				<label for="InputEmail">E-mail:</label>
				<input type="email" class="form-control" id="InputEmail" name="email" value="<?php echo $resultados[0]['email']?>">
			  </div>
			  <div>
				<label for "InputEstado">Estado:</label>
				<select name="uf" id="uf" onchange="buscaCidades(this.value)" class="form-control" placeholder="">
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
				<input type="file" name="fileName" id="fileName" placeholder="Escolha um arquivo" size="40">
			  </div>
			  
			  <button type="submit" class="btn btn-default">Confirmar</button>
		 </form>

	 </div>

	  
	  
    </div><!-- /.container -->
<?php
}		//fim do try
catch (PDOException $e)
{
    // caso ocorra uma exceção, exibe na tela
    echo "Erro!: " . $e->getMessage() . "<br>";
    die();
}

include_once("../modelos/rodape_bdcompleto.html");
?>