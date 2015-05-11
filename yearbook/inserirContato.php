<?php
require_once("./authSession.php");
require_once("./conf/confBD.php");
include_once("../modelos/cabecalho_yearbook.html");
try
{
	// se não foram passados 3 parâmetros na requisição, desvia para a mensagem de erro
	// "previne" acesso direto à página
	if(count($_POST)!=3){
		header("Location:./erroInsercao.php");
		die();
	}
	//se existem os parâmetros...
	else{
		//instancia objeto PDO, conectando-se ao mysql
		$conexao = conn_mysql();
		
		//captura valores do vetor POST
		//utf8_encode para manter consistência da codificação utf8 nas páginas e no banco
		$nome = utf8_encode(htmlspecialchars($_POST['nomeCompleto']));
		$email = utf8_encode(htmlspecialchars($_POST['email']));
		$cid = utf8_encode(htmlspecialchars($_POST['cidade']));
		$desc = utf8_encode(htmlspecialchars($_POST['descricao']));
		$foto = utf8_encode(htmlspecialchars($_POST['arquivoFoto']));
		$login = utf8_encode(htmlspecialchars($_SESSION['login']));

		
		// cria instrução SQL parametrizada
		$SQLInsert = 'INSERT INTO participantes (login, nomeCompleto, email, cidade, descricao, arquivoFoto)
			  		  VALUES (?,?,?,?,?,?)';
					  
		//prepara a execução
		$operacao = $conexao->prepare($SQLInsert);					  
		
		//executa a sentença SQL com os parâmetros passados por um vetor
		$inserir = $operacao->execute(array($login, $nome, $email, $cid, $desc, $foto));
		
		// fecha a conexão ao banco
		$conexao = null;
		
		//verifica se o retorno da execução foi verdadeiro ou falso,
		//imprimindo mensagens ao cliente
		if ($inserir){
			 echo'<div class="starter-template">';
			 echo "<h3 class=\"sub-header\">Cadastro efetuado com sucesso.</h3>\n";
			 echo "<p class=\"lead\"><a href=\"./inserir.php\">Inserir outro contato</a></p>\n";
		}
		else {
			echo "<h1>Erro na operação.</h1>\n";
				$arr = utf8_decode($operacao->errorInfo());		//mensagem de erro retornada pelo SGBD
				echo "<p>$arr[2]</p>";							//deve ser melhor tratado em um caso real
			    echo "<p><a href=\"./inserir.php\">Retornar</a></p>\n";
		}
    }
}
catch (PDOException $e)
{
    // caso ocorra uma exceção, exibe na tela
    echo "Erro!: " . $e->getMessage() . "<br>";
    die();
}

include_once("../modelos/cabecalho_yearbook.html");

?>