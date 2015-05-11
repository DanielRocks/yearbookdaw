<?php

if(isset($_COOKIE['loginAutomatico'])){
   header("Location: ./VerificarLogin.php");
}
else if(isset($_COOKIE['loginYearbook']))
	$nomeUser = $_COOKIE['loginYearbook'];
	else $nomeUser="";
	
include_once("../modelos/cabecalho_login.html");
require_once("./conf/confBD.php");
#include_once 'yearbook.php';
?>

    <div class="container">

      <div class="starter-template">
        <form class="form-signin" role="form" method="post" action="./verificarLogin.php">
        <h3 class="form-signin-heading">Yearbook - Login</h3>
        <input type="text" class="form-control" placeholder="Login" name="login" value="<?php echo $nomeUser?>"required autofocus>
        <input type="password" class="form-control" placeholder="Senha" name="passwd" required>
        <label>
          <input type="checkbox"  name="lembrarLogin" value="loginAutomatico"> Permanecer conectado
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
		<br>
		<button class="btn btn-lg btn-success btn-block" type="button" onclick="javascript:window.location.href='./cadastroUsuario.php'">Cadastrar-se</button>
      </form>
      </div>

    </div><!-- /.container -->
	
	<div class="container" align="center">
			<?php
				try{
					// instancia objeto PDO, conectando no mysql
					$conexao = conn_mysql();
		
				
						// instrução SQL básica (sem restrição de nome)
						$SQLSelect = 'SELECT * FROM dbo.participantes';
	
			
						//prepara a execução da sentença
						$operacao = $conexao->prepare($SQLSelect);
						$operacao->execute();
					

					//captura TODOS os resultados obtidos
					$resultados = $operacao->fetchAll();
		
					// fecha a conexão (os resultados já estão capturados)
					$conexao = null;
					foreach($resultados as $contatosEncontrados){		//para cada elemento do vetor de resultados...
						echo'<img height="80" width="80" class="img-rounded" src="fotos/'. utf8_decode($contatosEncontrados['arquivoFoto']) .'"></img>';
					}
				} //try
			catch (PDOException $e)
			{
				// caso ocorra uma exceção, exibe na tela
				echo "Erro!: " . $e->getMessage() . "<br>";
				die();
			}
		?>
	</div>

<?php
include_once("./modelos/rodape_html.html");
?>