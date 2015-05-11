<?php
require_once("./authSession.php");  
include_once("../modelos/cabecalho_yearbook.html");
?>

   <div class="container">

      <div class="starter-template">
        <h3 class="sub-header">Participantes</h3>    
      </div>
        
		 <form role="form" method="post" action="./inserirContato.php">
			  <div class="form-group">
				<label for="InputNome">Nome:</label>
				<input type="text" class="form-control" id="InputNome" name="nomeCompleto" placeholder="Nome Completo" required autofocus>
			  </div>
			  <div class="form-group">
				<label for="InputFoto">Foto:</label>
				<input type="image" class="form-control" id="InputFoto" name="foto" placeholder="foto" height="100" width="100">
			  </div>
			  
			  
			  <button type="submit" class="btn btn-default">Cadastrar</button>
		 </form>

	 </div>

	  
	  
    </div><!-- /.container -->

<?php
include_once("../modelos/rodape_yearbook.html");
?>