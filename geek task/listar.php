<?php

  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $nomeBanco = "dbbase_geek";

  $id = $_POST['num'];

  $conn = mysqli_connect( $servidor, $usuario, $senha, $nomeBanco );

  if( !$conn ) {
    die( "Erro de conexão com localhost, o seguinte erro ocorreu ->".mysql_error() );
  }

  

  $query =  "SELECT * FROM serie_anime WHERE id='$id'";

  $result = $conn->query($query);

?>
<!DOCTYPE html>

  <html lang="en">

    <head>
    <title>Geek Task</title>

      <meta charset="utf-8">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

      <link rel="stylesheet" type="text/css" href="./style/style_pages.css">

      

     

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
            <a class="nav-link" href="listar_todas.php">Listar todas as Séries/Anime</a>
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

      <table class='table' border=1 >

        <tr>
          <th> Nome </th>
          <th> ID </th>
         
       <?php



          $linha = $result->fetch_assoc(); 
            
          {
            echo "<tr> <td>" . $linha["nome"] . "</td>" .
            "<td>" . $linha["id"] . "</td>" .
            
            "</tr>";
          }
      ?>

      </table>

    </body>


</html>