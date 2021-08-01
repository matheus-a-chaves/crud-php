<?php

    include("assets/php/conexao.php");
  
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" href="assets/img/fivicon.png">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>


</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <button id="btn_form_cad" type="button" class="mx-4 btn btn-primary">Cadastrar</button>
        </ul>
      </div>
    </nav>
  </header>


  <div class="container ">


   <div id="form_cad">
     <div class="col-12">
      <form action="assets/php/cadastro.php" method="POST">
        <div class="form-group">
          <label for="Numero">Numero</label>
          <input type="text" class="form-control" name="numero"
            placeholder="Número do Filme">
        </div>
        <div class="form-group">
          <label for="Nome">Nome</label>
          <input type="text" class="form-control" name="nome" placeholder="Nome do Filme">
        </div>
        <div class="form-group">
          <label for="Data">Data de Lançamento</label>
          <input type="text" class="form-control" name="data" placeholder="Data de Lançamento">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
    </div>
      
  </div>

    <div class="row">

      <div class="col-12 mg-top ">
        <div class="row ">

          <table class="table">
            <thead class="thead-dark">

              <tr>
                <th scope="col">Número</th>
                <th scope="col">Nome</th>
                <th scope="col">Lançamento</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
              </tr>
 
            </thead>
            <tbody>
              <?php
    $query = "SELECT * FROM filme";
    $result = mysqli_query($conexao,$query);
  

    while( $exibir =  mysqli_fetch_array($result)) {
    ?>
              <tr>
                <td scope="row">
                  <?php echo $exibir['filme_id'];?>
                </td>
                <td>
                  <?php echo $exibir['filme_nome'];?>
                </td>
                <td>
                  <?php echo $exibir['filme_dataLancamento'];?>
                </td>
                <td><a href="assets/php/editar.php?id=<?php echo $exibir['filme_id'];?>"><img width="20px"
                      src="assets/img/editar.png"></a></td>
                <td><a href="assets/php/deletar.php?id=<?php echo $exibir['filme_id'];?>"><img width="20px"
                      src="assets/img/lixeira.png"></a></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>

        </div>
      </div>
    </div>


  </div>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>

  <script src="assets/js/jquery-3.6.0.min.js"> </script>
  <script src="assets/js/form-cadastro.js"> </script>




</body>

</html>