<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Pago cliente</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <a class="navbar-brand" href="#"><strong class="card text-white bg-secondary mb-3">SISTEMA DE GESTION DE POLIZA</strong></a>
  </div>

  <div class="navbar-collapse collapse w-300 order-3 dual-collapse2">
        <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-sm">
      <div id="accordion" >
  <div class="card">
    <div class="card text-white bg-secondary mb-3" id="headingOne">
      <h5 class="mb-0">
        <a class="card text-white bg-secondary mb-3" id="ocultar_div" data-toggle="collapse" data-target="#collapseOne" aria-hidden="true" aria-controls="collapseOne">
          Datos del Cliente
        </a>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <h5 class="mb-0">
        <button class="btn btn-link" id="#" data-toggle="collapse">
          Datos Cliente
        </button><br>
      </h5>  
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card text-white bg-secondary mb-3" id="headingTwo">
      <h5 class="mb-0">
        <a class="card text-white bg-secondary mb-3" id="ocultar_div1" data-toggle="collapse" data-target="#collapseTwo" aria-hidden="true" aria-controls="collapseTwo">
          Poliza del Cliente
        </a>
      </h5>      
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
      	<h5 class="mb-0">
        <button class="btn btn-link" id="gestionar_pago_btn" data-toggle="collapse">
          Gestionar pago
        </button><br>
        <button class="btn btn-link" id="consultar_estado_cuenta_btn" data-toggle="collapse">
          Consultar estado de cuenta
        </button>
      </h5>  
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card text-white bg-secondary mb-3" id="headingTwo">
      <h5 class="mb-0">
        <a class="card text-white bg-secondary mb-3" data-toggle="modal" data-target="#exampleModal">
  		  Salir
		</a>
      </h5>      
    </div>
  </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mensaje</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Desea salir de Softpoliza?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary">Si</button>
      </div>
    </div>
  </div>
</div>  
</div>
</div>
<div class="col-sm">
  <div id="gestionar_pago_div" style="display: none;">
   <strong>GESTIONAR PAGO</strong>
   <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Numero de poliza</th>
      <th scope="col">Fecha de poliza</th>
      <th scope="col">Estado de poliza</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><button class="btn btn-link" id="pago_detalle_btn" data-toggle="collapse">Poliza E5666213</button></td>
      <td>15/11/2016</td>
      <td>Pendiente</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><button class="btn btn-link" id="" data-toggle="collapse">Poliza E4796300</button></td>
      <td>10/01/2017</td>
      <td>Pendiente</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><button class="btn btn-link" id="" data-toggle="collapse">Poliza E2211247</button></td>
      <td>20/02/2016</td>
      <td>Pendiente</td>
    </tr>
  </tbody>
</table>
  </div>
  <div id="consultar_estado_cuenta_div" style="display: none;">
   <strong>CONSULTAR ESTADO CUENTA</strong>
  </div>
</div>
</div>
</div>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#ocultar_div").click(function(){
   $("#gestionar_pago_div").hide();
  $("#consultar_estado_cuenta_div").hide();
  });
  $("#ocultar_div1").click(function(){
   $("#gestionar_pago_div").hide();
  $("#consultar_estado_cuenta_div").hide();
  });

  $("#gestionar_pago_btn").click(function(){
    $("#gestionar_pago_div").show();
    $("#consultar_estado_cuenta_div").hide();
  });
  $("#consultar_estado_cuenta_btn").click(function(){
    $("#consultar_estado_cuenta_div").show();
    $("#gestionar_pago_div").hide();
  });
  $("#pago_detalle_btn").click(function(){
    location.href = "pago.php";
  });
});
</script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>