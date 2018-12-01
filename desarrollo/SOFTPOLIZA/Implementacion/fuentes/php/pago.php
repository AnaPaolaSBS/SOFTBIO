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
<div class="container" style="width: 100%;">
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
    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
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
        <a class="card text-white bg-secondary mb-3" data-toggle="modal" data-target="#exampleModal1">
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
        <h5 class="modal-title" id="exampleModalLabel">Datos del comprobante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Se grabo el pago con el numero de comprobante 001-19222200
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="aceptar_btn">Aceptar</button>
      </div>
    </div>
  </div>

</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <button type="button" class="btn btn-primary" id="salir_btn">Si</button>
      </div>
    </div>
  </div>
</div>   
</div>
</div>
<div class="col-sm">
  <div id="gestionar_pago_div">
<div class="container">
  <div class="row">
    <div class="col" style="border: solid;">
      <p style="font-weight: bold;">DATOS DE POLIZA</p>
      <p style="font-weight: bold; float: left;">Numero de poliza:</p><p>E5666213</p>
      <p style="font-weight: bold; float: left;">Tipo de moneda:</p><p>Soles</p>
      <p style="font-weight: bold; float: left;">Fecha Venci.:</p><p>15/11/2016</p>
      <p style="font-weight: bold; float: left;">Monto a pagar:</p><p>300.00</p>
    </div>
    <div class="col" style="border: solid;">
      <p style="font-weight: bold; float: left;">CRONOGRAMA DE PAGOS</p>
      <div class="form-check">
        <label class="form-check-label">
        <input type="checkbox" class="form-check-input" value="">15/11/2016
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
        <input type="checkbox" class="form-check-input" value="">15/12/2016
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
        <input type="checkbox" class="form-check-input" value="">15/01/2017
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
        <input type="checkbox" class="form-check-input" value="">15/02/2017
        </label>
      </div>
    </div>
    <div class="w-100" ></div>
    <div class="col" style="border: solid;">
      <p style="font-weight: bold; float: left;">DATOS DEL OPERADOR</p>
      <div class="form-group">
        <label for="exampleFormControlSelect1" style="font-weight: bold;">Nomb. Operador:</label>
        <select id="exampleFormControlSelect1" style="width: 90PX;">
          <option>MasterCard</option>
          <option>Visa</option>
        </select>
        <label for="exampleFormControlSelect1" style="width: 130px; font-weight: bold;">Medio de pago:</label>
        <select id="exampleFormControlSelect1" style="width: 90PX;">
          <option>Credito</option>
          <option>Debito</option>
        </select>
        <label for="exampleFormControlSelect1" style="width: 130px; font-weight: bold;">    Banco:        </label>
        <select id="exampleFormControlSelect1" style="width: 90PX;">
          <option>Interbank</option>
          <option>BCP</option>
          <option>B. Nacion</option>
        </select>
      </div>
    </div>
    <div class="col" style="border: solid;">
      <p style="font-weight: bold; float: left;">DATOS DE LA TARJETA</p>
      <form>
          <label for="exampleFormControlSelect1" style="font-weight: bold; width: 130px;">Numero:</label>
          <input type="text" style="width: 80px; height: 25px;"><br>
          <label for="exampleFormControlSelect1" style="font-weight: bold; width: 130px;">Titular:</label>
          <input type="text" style="width: 80px; height: 25px;"><br>
          <label for="exampleFormControlSelect1" style="font-weight: bold; width: 130px;">F. de caducidad:</label>
          <input type="text" style="width: 80px; height: 25px;"><br>
          <label for="exampleFormControlSelect1" style="font-weight: bold; width: 130px;">C. de seguridad:</label>
          <input type="password" style="width: 80px; height: 25px;"><br>
          <label for="exampleFormControlSelect1" style="font-weight: bold; width: 130px;">Monto a pagar:</label>
          <input type="text" style="width: 80px; height: 25px;"><br>
          <div class="modal-footer">
            <h5 class="mb-0">
              <a class="card text-white bg-secondary mb-3" style="float: left;" data-toggle="modal" data-target="#exampleModal" >Grabar</a>
              <a class="card text-white bg-secondary mb-3" data-toggle="modal">Cancelar</a>
          </h5>   
      </div>
      </form>  
    </div>
  </div>
</div>
</div>
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
  $("#salir_btn").click(function(){
    location.href = "inicio.php";
  });
  $("#aceptar_btn").click(function(){
    location.href = "inicio.php";
  });  
});
</script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>