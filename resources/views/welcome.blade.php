<!DOCTYPE html>
<html>
<head>
    <title>Lista de Películas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<style>
body{
  background-color: #000; 
}
 
.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px; 
  background-color: white;
}

.row {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.col-md-4 {
  width: 31.33%; 
  padding: 10px;
}

.movie-card {
  background-color: white ;
  border-radius: 5px;
  padding: 20px; 

  text-align: center;
}

.movie-title {
  margin-top: 10px;
  font-size: 20px;
  font-weight: bold;
}

.movie-description {
  margin-top: 10px;
}

.movie-image {
  width: 100%;
  height: auto;
  border-radius: 5px;
}

.movie-details {
  margin-top: 20px;
}

.btn {
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  cursor: pointer;
}

.btn:hover {
  opacity: 0.8;
}


.modal-content {
  border-radius: 10px;
}

.modal-header {
  background-color: #f8f9fa;
  border-radius: 10px 10px 0 0;
}

.modal-title {
  color: #333;
  font-size: 24px;
  font-weight: bold;
}

.modal-body {
  padding: 20px;
}

.modal-footer {
  background-color: #f8f9fa;
  border-top: 1px solid #dee2e6;
  border-radius: 0 0 10px 10px;
}

.btn-primary {
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
}

.btn-primary:hover {
  opacity: 0.8;
}

input[type="text"] {
  width: 100%;
  padding: 8px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

input[type="text"]:focus {
  outline: none; 
}
</style>
</head>
<body>
    
  
 
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="movie-card">
        <img class="movie-image" src="img/lamonja.jpg" alt="La monja" id="lucha">
        <div class="movie-details">
          <h3 class="movie-title">La Monja</h3> 
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >Vender</button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="movie-card">
        <img class="movie-image" src="img/blackphone.jpg" alt="The Black Phone" id="lucha1">
        <div class="movie-details">
          <h3 class="movie-title">The Black Phone</h3> 
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Vender</button>
        </div>
      </div>
    </div> 
    <div class="col-md-4">
      <div class="movie-card">
        <img class="movie-image" src="img/avengers.jpg" alt="Avengers" id="lucha3">
        <div class="movie-details">
          <h3 class="movie-title">Avengers 2</h3> 
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">Vender</button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="movie-card">
        <img class="movie-image" src="img/rocky.jpg" alt="Rocky" id="lucha4">
        <div class="movie-details">
          <h3 class="movie-title">Rocky <Var></Var></h3> 
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4">Vender</button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="movie-card">
        <img class="movie-image" src="img/deatpol.jpg" alt="Deadpool 2" id="lucha5">
        <div class="movie-details">
          <h3 class="movie-title">Deadpool 2</h3> 
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal5">Vender</button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="movie-card">
        <img class="movie-image" src="img/ted.jpg" alt="Ted" id="lucha6">
        <div class="movie-details">
          <h3 class="movie-title">Ted</h3> 
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal6">Vender</button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="movie-card">
        <img class="movie-image" src="img/quepasoayer.jpg" alt="¿Qué pasó ayer?" id="lucha7">
        <div class="movie-details">
          <h3 class="movie-title">¿Qué pasó ayer II?</h3> 
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal7">Vender</button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="movie-card">
        <img class="movie-image" src="img/lossimpson.jpg" alt="Los Simpson" id="lucha8">
        <div class="movie-details">
          <h3 class="movie-title">Los Simpson</h3> 
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal8">Vender</button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="movie-card">
        <img class="movie-image" src="img/rickymorty.jpg" alt="Rick y Morty" id="lucha9">
        <div class="movie-details">
          <h3 class="movie-title">Rick and  Morty</h3> 
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal9">Vender</button>
        </div>
      </div>
    </div>
  </div>
</div>


<form  action="{{ route('libros.store')}}" method="post">
    
  
@csrf
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Pelicula 1</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body " > 
        Nombre: <input type="text" name="nombre" id="nombre" readonly ><br>
        Entradas: <input type="text" name="boletos" id="boletos"><br><br>
        Precio: <input type="text" name="precio" id="precio" value="370" readonly ><br><br>
        <button type="button" id="calcularprecio" class="btn btn-primary">Calcular Precio</button><br><br>
        Total a pagar: <input type="text" name="total" id="total"  readonly><br>
        Pagar con: <input type="text" name="pago" id="pago"><br><br>
        <button type="button" id="cambio" class="btn btn-primary">Cambio</button><br><br>
        El cambio es <input type="text" name="cambio"id="recibicambio" readonly ><br>

      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
</form>


<form  action="{{ route('libros.store')}}" method="post">
    
  
@csrf
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Pelicula 2</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body " > 
        Nombre: <input type="text" name="nombre" id="nombre1" readonly ><br>
        Entradas: <input type="text" name="boletos" id="boletos1"><br><br>
        Precio: <input type="text" name="precio" id="precio1" value="150" readonly ><br><br>
        <button type="button" id="calcularprecio1" class="btn btn-primary">Calcular Precio</button><br><br>
        Total a pagar: <input type="text" name="total" id="total1" readonly><br>
        Pagar con: <input type="text" name="pago" id="pago1"><br><br>
        <button type="button" id="cambio1" class="btn btn-primary">Cambio</button><br><br>
        El cambio es <input type="text" name="cambio"id="recibicambio1"  readonly><br>

      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
</form>

<form  action="{{ route('libros.store')}}" method="post">
    
  
@csrf
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Pelicula 3</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body " > 
        Nombre: <input type="text" name="nombre" id="nombre3" readonly ><br>
        Entradas: <input type="text" name="boletos" id="boletos3"><br><br>
        Precio: <input type="text" name="precio" id="precio3" value="110" readonly ><br><br>
        <button type="button" id="calcularprecio3" class="btn btn-primary">Calcular Precio</button><br><br>
        Total a pagar: <input type="text" name="total" id="total3" readonly><br>
        Pagar con: <input type="text" name="pago" id="pago3"><br><br>
        <button type="button" id="cambio3" class="btn btn-primary">Cambio</button><br><br>
        El cambio es <input type="text" name="cambio"id="recibicambio3" readonly ><br>

      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
</form>


<form  action="{{ route('libros.store')}}" method="post">
    
@csrf
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Pelicula 4</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body " > 
        Nombre: <input type="text" name="nombre" id="nombre4"  readonly><br>
        Entradas: <input type="text" name="boletos" id="boletos4"><br><br>
        Precio: <input type="text" name="precio" id="precio4" value="490" readonly ><br><br>
        <button type="button" id="calcularprecio4" class="btn btn-primary">Calcular Precio</button><br><br>
        Total a pagar: <input type="text" name="total" id="total4" readonly><br>
        Pagar con: <input type="text" name="pago" id="pago4"><br><br>
        <button type="button" id="cambio4" class="btn btn-primary">Cambio</button><br><br>
        El cambio es <input type="text" name="cambio"id="recibicambio4"  readonly><br>

      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
</form>


<form  action="{{ route('libros.store')}}" method="post">
    
@csrf
<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Pelicula 5</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body " > 
        Nombre: <input type="text" name="nombre" id="nombre5" readonly ><br>
        Entradas: <input type="text" name="boletos" id="boletos5"><br><br>
        Precio: <input type="text" name="precio" id="precio5" value="50"  readonly><br><br>
        <button type="button" id="calcularprecio5" class="btn btn-primary">Calcular Precio</button><br><br>
        Total a pagar: <input type="text" name="total" id="total5" readonly><br>
        Pagar con: <input type="text" name="pago" id="pago5"><br><br>
        <button type="button" id="cambio5" class="btn btn-primary">Cambio</button><br><br>
        El cambio es <input type="text" name="cambio"id="recibicambio5"readonly  ><br>

      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
</form>

<form  action="{{ route('libros.store')}}" method="post">
    
@csrf
<div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Pelicula 6</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body " > 
        Nombre: <input type="text" name="nombre" id="nombre6" readonly ><br>
        Entradas: <input type="text" name="boletos" id="boletos6"><br><br>
        Precio: <input type="text" name="precio" id="precio6" value="210"  readonly><br><br>
        <button type="button" id="calcularprecio6" class="btn btn-primary">Calcular Precio</button><br><br>
        Total a pagar: <input type="text" name="total" id="total6" readonly><br>
        Pagar con: <input type="text" name="pago" id="pago6"><br><br>
        <button type="button" id="cambio6" class="btn btn-primary">Cambio</button><br><br>
        El cambio es <input type="text" name="cambio"id="recibicambio6"  readonly><br>

      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
</form>

<form  action="{{ route('libros.store')}}" method="post">
    
@csrf
<div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Pelicula 7</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body " > 
        Nombre: <input type="text" name="nombre" id="nombre7"  readonly><br>
        Entradas: <input type="text" name="boletos" id="boletos7"><br><br>
        Precio: <input type="text" name="precio" id="precio7" value="90" readonly ><br><br>
        <button type="button" id="calcularprecio7" class="btn btn-primary">Calcular Precio</button><br><br>
        Total a pagar: <input type="text" name="total" id="total7"readonly ><br>
        Pagar con: <input type="text" name="pago" id="pago7"><br><br>
        <button type="button" id="cambio7" class="btn btn-primary">Cambio</button><br><br>
        El cambio es <input type="text" name="cambio"id="recibicambio7"  readonly><br>

      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
</form>

<form  action="{{ route('libros.store')}}" method="post">
    
@csrf
<div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Pelicula 8</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body " > 
        Nombre: <input type="text" name="nombre" id="nombre8"  readonly><br>
        Entradas: <input type="text" name="boletos" id="boletos8"><br><br>
        Precio: <input type="text" name="precio" id="precio8" value="250" readonly  ><br><br>
        <button type="button" id="calcularprecio8" class="btn btn-primary">Calcular Precio</button><br><br>
        Total a pagar: <input type="text" name="total" id="total8" readonly><br>
        Pagar con: <input type="text" name="pago" id="pago8"><br><br>
        <button type="button" id="cambio8" class="btn btn-primary">Cambio</button><br><br>
        El cambio es <input type="text" name="cambio"id="recibicambio8" readonly  ><br>

      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
</form>

<form  action="{{ route('libros.store')}}" method="post">
    
@csrf
<div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Pelicula 9</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body " > 
        Nombre: <input type="text" name="nombre" id="nombre9" readonly ><br>
        Entradas: <input type="text" name="boletos" id="boletos9"><br><br>
        Precio: <input type="text" name="precio" id="precio9" value="310" readonly ><br><br>
        <button type="button" id="calcularprecio9" class="btn btn-primary">Calcular Precio</button><br><br>
        Total a pagar: <input type="text" name="total" id="total9" readonly><br>
        Pagar con: <input type="text" name="pago" id="pago9"><br><br>
        <button type="button" id="cambio9" class="btn btn-primary">Cambio</button><br><br>
        El cambio es <input type="text" name="cambio"id="recibicambio9"readonly  ><br>

      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
</form>
    

 

 

 


<script>
function asignarValores(botonId, imagenId, nombreId) {
  var boton = document.querySelector(`button[data-bs-target="${botonId}"]`);
  var imagen = document.getElementById(imagenId);

  boton.addEventListener('click', function() {
    var nombre = imagen.alt;
    document.getElementById(nombreId).value = nombre;
  });
}

asignarValores('#exampleModal', 'lucha', 'nombre');
asignarValores('#exampleModal2', 'lucha1', 'nombre1');
asignarValores('#exampleModal3', 'lucha3', 'nombre3');
asignarValores('#exampleModal4', 'lucha4', 'nombre4');
asignarValores('#exampleModal5', 'lucha5', 'nombre5');
asignarValores('#exampleModal6', 'lucha6', 'nombre6');
asignarValores('#exampleModal7', 'lucha7', 'nombre7');
asignarValores('#exampleModal8', 'lucha8', 'nombre8');
asignarValores('#exampleModal9', 'lucha9', 'nombre9');
</script>


<script>
 // Obtener referencias a las cajas de texto y al botón
 function asignarEventos(btnId, entradasId, precioId, totalId) {
  var btn = document.getElementById(btnId);
  var entradasInput = document.getElementById(entradasId);
  var precioInput = document.getElementById(precioId);
  var totalInput = document.getElementById(totalId);

  btn.addEventListener("click", function() {
    var entradas = parseFloat(entradasInput.value);
    var precio = parseFloat(precioInput.value);

    if (!isNaN(entradas) && !isNaN(precio)) {
      var total = entradas * precio;
      totalInput.value = total;
    }
  });
}

asignarEventos("calcularprecio", "boletos", "precio", "total");
asignarEventos("calcularprecio1", "boletos1", "precio1", "total1");
asignarEventos("calcularprecio3", "boletos3", "precio3", "total3");
asignarEventos("calcularprecio4", "boletos4", "precio4", "total4");
asignarEventos("calcularprecio5", "boletos5", "precio5", "total5");
asignarEventos("calcularprecio6", "boletos6", "precio6", "total6");
asignarEventos("calcularprecio7", "boletos7", "precio7", "total7");
asignarEventos("calcularprecio8", "boletos8", "precio8", "total8");
asignarEventos("calcularprecio9", "boletos9", "precio9", "total9");
</script>




 
<script>
 
var totalapagarInput = document.getElementById("total");
var pagarconInput = document.getElementById("pago");
var recibicambioInput = document.getElementById("recibicambio");
var calcularBtn = document.getElementById("cambio");

// Escuchar el evento 'click' en el botón
calcularBtn.addEventListener("click", calcularCambio);

// Función para calcular el cambio
// Función para calcular el cambio
function calcularCambio() {
  var totalapagar = parseFloat(totalapagarInput.value);
  var pagarcon = parseFloat(pagarconInput.value);

  if (!isNaN(totalapagar) && !isNaN(pagarcon)) {
    if (pagarcon < totalapagar) {
      // Mostrar alerta si el pago es menor al total
      alert("El pago es menor al total a pagar");
    } else {
      var cambio = pagarcon - totalapagar;

      // Actualizar el valor de la caja de texto 'recibicambio'
      recibicambioInput.value = cambio;
    }
  }
}



var totalapagarInput1 = document.getElementById("total1");
var pagarconInput1 = document.getElementById("pago1");
var recibicambioInput1 = document.getElementById("recibicambio1");
var calcularBtn1 = document.getElementById("cambio1");

// Escuchar el evento 'click' en el botón
calcularBtn1.addEventListener("click", calcularCambio1);

// Función para calcular el cambio
// Función para calcular el cambio
function calcularCambio1() {
  var totalapagar1 = parseFloat(totalapagarInput1.value);
  var pagarcon1 = parseFloat(pagarconInput1.value);

  if (!isNaN(totalapagar1) && !isNaN(pagarcon1)) {
    if (pagarcon1 < totalapagar1) {
      // Mostrar alerta si el pago es menor al total
      alert("El pago es menor al total a pagar");
    } else {
      var cambio1 = pagarcon1 - totalapagar1;

      // Actualizar el valor de la caja de texto 'recibicambio'
      recibicambioInput1.value = cambio1;
    }
  }
}


var totalapagarInput3 = document.getElementById("total3");
var pagarconInput3 = document.getElementById("pago3");
var recibicambioInput3 = document.getElementById("recibicambio3");
var calcularBtn3 = document.getElementById("cambio3");

// Escuchar el evento 'click' en el botón
calcularBtn3.addEventListener("click", calcularCambio3);

// Función para calcular el cambio
// Función para calcular el cambio
function calcularCambio3() {
  var totalapagar3 = parseFloat(totalapagarInput3.value);
  var pagarcon3 = parseFloat(pagarconInput3.value);

  if (!isNaN(totalapagar3) && !isNaN(pagarcon3)) {
    if (pagarcon3 < totalapagar3) {
      // Mostrar alerta si el pago es menor al total
      alert("El pago es menor al total a pagar");
    } else {
      var cambio3 = pagarcon3 - totalapagar3;

      // Actualizar el valor de la caja de texto 'recibicambio'
      recibicambioInput3.value = cambio3;
    }
  }
}

var totalapagarInput4 = document.getElementById("total4");
var pagarconInput4 = document.getElementById("pago4");
var recibicambioInput4 = document.getElementById("recibicambio4");
var calcularBtn4 = document.getElementById("cambio4");

// Escuchar el evento 'click' en el botón
calcularBtn4.addEventListener("click", calcularCambio4);

// Función para calcular el cambio
// Función para calcular el cambio
function calcularCambio4() {
  var totalapagar4 = parseFloat(totalapagarInput4.value);
  var pagarcon4 = parseFloat(pagarconInput4.value);

  if (!isNaN(totalapagar4) && !isNaN(pagarcon4)) {
    if (pagarcon4 < totalapagar4) {
      // Mostrar alerta si el pago es menor al total
      alert("El pago es menor al total a pagar");
    } else {
      var cambio4 = pagarcon4 - totalapagar4;

      // Actualizar el valor de la caja de texto 'recibicambio'
      recibicambioInput4.value = cambio4;
    }
  }
}


var totalapagarInput5 = document.getElementById("total5");
var pagarconInput5 = document.getElementById("pago5");
var recibicambioInput5 = document.getElementById("recibicambio5");
var calcularBtn5 = document.getElementById("cambio5");

// Escuchar el evento 'click' en el botón
calcularBtn5.addEventListener("click", calcularCambio5);

// Función para calcular el cambio
// Función para calcular el cambio
function calcularCambio5() {
  var totalapagar5 = parseFloat(totalapagarInput5.value);
  var pagarcon5 = parseFloat(pagarconInput5.value);

  if (!isNaN(totalapagar5) && !isNaN(pagarcon5)) {
    if (pagarcon5 < totalapagar5) {
      // Mostrar alerta si el pago es menor al total
      alert("El pago es menor al total a pagar");
    } else {
      var cambio5 = pagarcon5 - totalapagar5;

      // Actualizar el valor de la caja de texto 'recibicambio'
      recibicambioInput5.value = cambio5;
    }
  }
}

var totalapagarInput6 = document.getElementById("total6");
var pagarconInput6 = document.getElementById("pago6");
var recibicambioInput6 = document.getElementById("recibicambio6");
var calcularBtn6 = document.getElementById("cambio6");

// Escuchar el evento 'click' en el botón
calcularBtn6.addEventListener("click", calcularCambio6);

// Función para calcular el cambio
// Función para calcular el cambio
function calcularCambio6() {
  var totalapagar6 = parseFloat(totalapagarInput6.value);
  var pagarcon6 = parseFloat(pagarconInput6.value);

  if (!isNaN(totalapagar6) && !isNaN(pagarcon6)) {
    if (pagarcon6 < totalapagar6) {
      // Mostrar alerta si el pago es menor al total
      alert("El pago es menor al total a pagar");
    } else {
      var cambio6 = pagarcon6 - totalapagar6;

      // Actualizar el valor de la caja de texto 'recibicambio'
      recibicambioInput6.value = cambio6;
    }
  }
}


var totalapagarInput7 = document.getElementById("total7");
var pagarconInput7 = document.getElementById("pago7");
var recibicambioInput7 = document.getElementById("recibicambio7");
var calcularBtn7 = document.getElementById("cambio7");

// Escuchar el evento 'click' en el botón
calcularBtn7.addEventListener("click", calcularCambio7);

// Función para calcular el cambio
// Función para calcular el cambio
function calcularCambio7() {
  var totalapagar7 = parseFloat(totalapagarInput7.value);
  var pagarcon7 = parseFloat(pagarconInput7.value);

  if (!isNaN(totalapagar7) && !isNaN(pagarcon7)) {
    if (pagarcon7 < totalapagar7) {
      // Mostrar alerta si el pago es menor al total
      alert("El pago es menor al total a pagar");
    } else {
      var cambio7 = pagarcon7 - totalapagar7;

      // Actualizar el valor de la caja de texto 'recibicambio'
      recibicambioInput7.value = cambio7;
    }
  }
}

var totalapagarInput8 = document.getElementById("total8");
var pagarconInput8 = document.getElementById("pago8");
var recibicambioInput8 = document.getElementById("recibicambio8");
var calcularBtn8 = document.getElementById("cambio8");

// Escuchar el evento 'click' en el botón
calcularBtn8.addEventListener("click", calcularCambio8);

// Función para calcular el cambio
// Función para calcular el cambio
function calcularCambio8() {
  var totalapagar8 = parseFloat(totalapagarInput8.value);
  var pagarcon8 = parseFloat(pagarconInput8.value);

  if (!isNaN(totalapagar8) && !isNaN(pagarcon8)) {
    if (pagarcon8 < totalapagar8) {
      // Mostrar alerta si el pago es menor al total
      alert("El pago es menor al total a pagar");
    } else {
      var cambio8 = pagarcon8 - totalapagar8;

      // Actualizar el valor de la caja de texto 'recibicambio'
      recibicambioInput8.value = cambio8;
    }
  }
}

var totalapagarInput9 = document.getElementById("total9");
var pagarconInput9 = document.getElementById("pago9");
var recibicambioInput9 = document.getElementById("recibicambio9");
var calcularBtn9 = document.getElementById("cambio9");

// Escuchar el evento 'click' en el botón
calcularBtn9.addEventListener("click", calcularCambio9);

// Función para calcular el cambio
// Función para calcular el cambio
function calcularCambio9() {
  var totalapagar9 = parseFloat(totalapagarInput9.value);
  var pagarcon9 = parseFloat(pagarconInput9.value);

  if (!isNaN(totalapagar9) && !isNaN(pagarcon9)) {
    if (pagarcon9 < totalapagar9) {
      // Mostrar alerta si el pago es menor al total
      alert("El pago es menor al total a pagar");
    } else {
      var cambio9 = pagarcon9 - totalapagar9;

      // Actualizar el valor de la caja de texto 'recibicambio'
      recibicambioInput9.value = cambio9;
    }
  }
}

</script> 
</body>
</html>


