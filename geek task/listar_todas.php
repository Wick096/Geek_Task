<?php

  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $nomeBanco = "dbbase_geek";



  $conn = mysqli_connect( $servidor, $usuario, $senha, $nomeBanco );

  if( !$conn ) {
    die( "Erro de conexão com localhost, o seguinte erro ocorreu ->".mysql_error() );
  }

  

  $query =  "SELECT * FROM serie_anime ";

  $result = $conn->query($query);

?>
<!DOCTYPE html>

  <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Geek Task</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="./style/style_teste.css">
        
        <style>
          body{
            background-color:#A9A9A9;
          }
          </style>

    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

<div class="collapse navbar-collapse">

  <ul class="navbar-nav mr-auto">

    <li class="nav-item">
      <a class="nav-link" href="index.html">Home</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="adicionarSerie.html">Adicionar Série/Anime</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="alterar.php">Alterar Série/Anime</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="listar_todas.php">Listar todas as Série/Anime</a>
    </li>

    <li class="nav-item active">
      <a class="nav-link" href="listar.html">Listar uma Série/Anime</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="apagar.html">Remover uma Série/Anime</a>
    </li>

  </ul>

</div>

</nav>

<table class='table' border=1>

  <tr>
    <th> Nome </th>
    <th> ID </th>
    
  </tr>

       <?php

         
            while($linha=$result->fetch_assoc()){
              echo "<tr> <td> " . $linha["nome"] . "</td>" .
              "<td>" . $linha["id"] . "</td>" .
              
              "</tr>";
            }

      ?>

  </table>

    </body>

</html>