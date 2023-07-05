<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <style>
        .modal{
            width: 300px;
        }
        .modal-content{
            width: 300px;
        }
        .list-group-item:hover{
            background-color: rgba(59, 57, 57, 0.164)!important;
        }

    </style>
</head>
<body>
    <!-- As a heading -->
<nav class="navbar navbar- light bt-light shadow">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Menu Gráficos</span>
      
        <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <span class="navbar-toggler-icon"></span>
    </button>

 </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Menu Gráficos</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <ul class="list-group list-group-flush">
            <li class="list-group-item"> <a href="./bootstrap.php">Home</a></li>
            <li class="list-group-item"> <a href="./index.php">Gráfico Gasolina</a></li>
            <li class="list-group-item"> <a href="./dolar.php">Gráfico Dolar</li>
            <li class="list-group-item"> <a href="./carro.php">Gráfico Carro</li>
            <li class="list-group-item"> <a href="./cesta.php">Gráfico Cesta básica</li>
            <li class="list-group-item"> <a href="./pib.php">Gráfico PIB Brasileiro</li>
            <li class="list-group-item"> <a href="./processador.php">Gráfico Processador Xeon</li>




            <li class="list-group-item"> <a href="./referencia.php">Referências</a></li>
        </ul>

      </div>
    </div>
  </div>
</div>






</body>
</html>