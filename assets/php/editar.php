<?php
    include("conexao.php"); 
    $id = $_GET['id'];
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" href="../img/fivicon.png">
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

  

  <?php 
  
  $query = "SELECT * FROM filme WHERE filme_id = $id ";
  $result = mysqli_query($conexao, $query);

  while($exibir =  mysqli_fetch_array($result)) {
    ?>


    <div id="form_edit">
      <div class="col-12">
        <form action="editar_dados.php?id=<?php echo $exibir['filme_id'];?>" method="POST">
          <div class="form-group">
            <label for="Numero">Numero: </label>
            <input type="text"  disabled=""  class="form-control" name="numero" value="<?php echo $exibir['filme_id'];?>">
          </div>
          <div class="form-group">
            <label for="Nome">Nome</label>
            <input type="text" class="form-control" name="nome" value="<?php echo $exibir['filme_nome'];?>">
          </div>
          <div class="form-group">
            <label for="Data">Data de Lançamento</label>
            <input type="text" class="form-control" name="data" value="<?php echo $exibir['filme_dataLancamento'];?>">
          </div>
          <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
      </div>
    </div>

 <?php } ?>


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

  <script src="../js/jquery-3.6.0.min.js"> </script>
  <script src="../js/form-editar.js"> </script>



</body>

</html>