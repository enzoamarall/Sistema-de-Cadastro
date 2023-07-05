<!DOCTYPE html>
<html lang="en">
<html>
  <head>
  <html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ano',  'Valor de Compra de Cesta Basica'],
         <?php
         require_once "conn.php";

         $query = "SELECT * FROM graphiccestabasicaenzomiguel";
         $stmt = $conn->prepare($query);
         $stmt->execute();
         $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
         foreach ($list as $item) :
        
        ?>

          ['<?= $item ['yearenzomiguel'];?>',<?= $item ['valueenzomiguel'];?>],      
         <?php endforeach; ?>       
        ]);

        var options = {
          title: 'Poder compra(Quantidade cestas basicas)',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
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
    <div id="curve_chart" style="width: 900px; height: 500px; position: absolute; 
	left: 90px; /* posiciona a 90px para a esquerda */ 
	top: 70px; /* posiciona a 70px para baixo */
	}"></div>

<div class="container mt-3" style="position: absolute; left: 100px;top: 670px;">
    <button style="background-color: ciano; border-color: ciano;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adminPanelModal" onclick="window.location.href = 'listCesta.php';">Painel ADM Cesta Basica</button>
    <button style="background-color: green; border-color: green" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerValueModal" onclick="window.location.href = 'cadastroCesta.php';">Cadastrar valor Cesta Basica</button>
    <button style="background-color: gray; border-color: gray;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerValueModal" onclick="window.location.href = 'bootstrap.php';">Retornar ao Menu</button>
  </div>

              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>           
  </body>
</html>
