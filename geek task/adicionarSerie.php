<?php

//Criar conexão com o banco
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $nomeBanco = "dbbase_geek";
  //$conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);
  $nome = $_POST['nome'];
  $id = $_POST['num'];
  


  $conn = mysqli_connect($servidor, $usuario, $senha, $nomeBanco);

  if(!$conn) {
    die("Erro de conexão com localhost, o seguinte erro ocorreu ->".mysql_error());
  }

  //Passar o comando sql para inserir a tabela

  $query = "INSERT INTO serie_anime (nome, id) VALUES ('$nome', '$id')";

  if(!$conn->query($query)) {
  	echo "erro!";
  } else {
    echo "<script>alert('Cadastro realizado com sucesso'); location= 'adicionarSerie.html';</script>";
  }



?>