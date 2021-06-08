<html lang = "pt-br">

	<head>

		<title>Geek Task</title>

		<meta charset="utf-8">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		 <link rel="stylesheet" type="text/css" href="./style/style_teste.css">

		 <style>
			body{
				background-color: #4F4F4F;
			}
		</style>

	</head>

	<body>

		<nav class="navbar navbar-expand-lg navbar-light bg-light">

	      <div class="collapse navbar-collapse" >

	        <ul class="navbar-nav mr-auto">

	          <li class="nav-item">
	            <a class="nav-link" href="index.html">Home</a>
	          </li>

	          <li class="nav-item ">
	            <a class="nav-link" href="adicionarSerie.html">Adicionar Série/Anime</a>
	          </li>

	          <li class="nav-item active">
	            <a class="nav-link" href="alterar.php">Alterar Série/Anime</a>
	          </li>

	          <li class="nav-item">
	            <a class="nav-link" href="listar_todas.php">Listar todas as Séries/Anime</a>
	          </li>

	          <li class="nav-item">
	            <a class="nav-link" href="listar.html">Listar uma Série/Anime</a>
	          </li>

	          <li class="nav-item">
	            <a class="nav-link" href="apagar.php">Remover uma Série/Anime</a>
	          </li>

	        </ul>

	      </div>

	    </nav>

		<div id="content" class="mx-auto">

	        <form class="form-row" method="POST" action="" style="margin-bottom: 85px;">

				

		          <div class="col-sm-12">
		            <label for="nome">Nome</label>
		            <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o novo nome da série (Irá Substituir o atual nome!)">
		          </div>

		          <div class="col-sm-12">
		            <label for="num">ID da Série</label>
		            <input type="number" class="form-control" id="num" name="num" placeholder="Insira o ID da série que você deseja alterar">
		          </div>

		          <div class="form-group col-md-12">
		              <button class="btn btn-primary" type="submit" name="Alterar">Alterar</button>
		          </div>

		      </form>

	    </div>

	</body>

</html>

<?php

if(isset($_POST["Alterar"])){

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeBanco = "dbbase_geek";

    $nome = $_POST['nome'];
    $id = $_POST['num'];
    

    $conn = mysqli_connect($servidor, $usuario, $senha, $nomeBanco);

    if(!$conn) {
        die("Erro de conexão com localhost, o seguinte erro ocorreu ->".mysql_error());
    }


    $query =  "SELECT * FROM serie_anime WHERE id='$id'";

     $result = $conn->query($query);

     if ($result->num_rows > 0){
        $up = "UPDATE serie_anime SET nome = '$nome' WHERE id = '$id'";

        if ($conn->query($up) === TRUE) {

            echo "<script>alert('Série/Anime alterada com sucesso'); location= 'listar_todas.php';</script>";
    
        } else {
    
            die("Erro!");
    
        }

     } 

} 

?>

