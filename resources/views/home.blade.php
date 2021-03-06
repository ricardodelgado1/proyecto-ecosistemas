@extends('layouts.master')
@section('title')
Inicio
@endsection

@section('content')
<hr>

<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/4.4.jpg" class="d-block w-100 h-20" alt="1">
    </div>
    <div class="carousel-item">
      <img src="/img/3.3.jpg" class="d-block w-100 h-20" alt="2">
    </div>
    <div class="carousel-item">
      <img src="/img/6.6.jpg" class="d-block w-100 h-20" alt="3">
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<br>
<div class="container">
<h2 class="bg-success">CLASES DE LICENCIAS</h2>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col ">
       <div class="card" >
        <img src="/img/1.1.jpg" class="card-img-top" alt="imagen1">
        <div class="card-body">
            <h5 class="card-title">Ambiental Ordinaria</h5>
            <p class="card-text">Es la otorgada por la autoridad ambiental competente y en la cual se establecen
                los requisitos, condiciones y obligaciones que el beneficiario de la licencia ambiental debe cumplir
                para prevenir, mitigar, compensar y manejar los efectos ambientales del proyecto, obra o actividad
                autorizada, sin disponer sobre el otorgamiento de los permisos, autorizaciones o concesiones para el
                uso, aprovechamiento o movilizaci??n de los recursos naturales renovables.</p>

        </div>
       </div>
    </div>
    <div class="col">
      <div class="card" >
        <img src="/img/2.2.jpg" class="" alt="imagen2">
        <div class="card-body">
            <h5 class="card-title">Ambiental Unica</h5>
            <p class="card-text">Es la otorgada por la autoridad ambiental competente y que, a solicitud del peticionario,
                incluye los permisos, autorizaciones o concesiones, necesarios para el desarrollo del proyecto,
                obra o actividad. La vigencia de estos permisos, concesiones y autorizaciones de acuerdo con su naturaleza,
                 podr?? ser la misma de la licencia ambiental</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
      <div class="card">
        <img src="/img/5.5.jpg" class="card-img-top" alt="imagen3">
        <div class="card-body">
            <h5 class="card-title">Ambiental Global</h5>
            <p class="card-text"> La licencia ambiental global puede ser ordinaria o ??nica. Es de competencia exclusiva del
                Ministerio del Medio Ambiente, y en virtud de ella se autorizan todas las obras o actividades relacionadas
                con la explotaci??n de campos petrol??feros y de gas.</p>
        </div>
       </div>
    </div>
  </div>
</div>

<br>


<div class="container">
<hr>
 <div class="row">
    <div class="col">
       <h1>LICENCIA AMBIENTAL</h1>
       <p class="lead">
       Las licencias ambientales aseguran que las actividades
        humanas y econ??micas se ajusten a requerimientos
        ecol??gicos y de esta forma se constituye en un mecanismo
        clave para promover el desarrollo sostenible.
        Se trata de un instrumento de coordinaci??n, planificaci??n,
        prevenci??n y gesti??n, mediante el cual el Estado colombiano
        cumple diversos mandatos constitucionales como la
        protecci??n de los recursos naturales y el medio ambiente,
        la conservaci??n de ??reas de especial importancia ecol??gica,
        la prevenci??n y control del deterioro ambiental y la funci??n
        ecol??gica de la propiedad. Es a la vez un mecanismo t??cnico
        y participativo que involucra a las comunidades.

        </p>
    </div>
    <div class="col">
       <p class="lead">
           <br>
        La licencia ambiental deber?? obtenerse previamente
        a la iniciaci??n del proyecto, obra o actividad y en ella
        se definen los t??rminos y obligaciones a los que debe
        ajustarse el proyecto obra o actividad en relaci??n con
        la prevenci??n, mitigaci??n, correcci??n, compensaci??n y
        manejo de sus efectos ambientales13.
        Con el fin de garantizar un manejo ambiental integral
        y coordinado de los proyectos, obras o actividades
        sometidos a licencia ambiental, ??sta lleva incluidos los
        permisos, concesiones y autorizaciones para el uso,
        aprovechamiento y afectaci??n de los recursos naturales
        renovables (p.ej. permisos de aprovechamiento
        forestal, concesiones de aguas, permisos de emisiones
        atmosf??ricas, etc.), siempre y cuando ??stos sean
        solicitados por el interesado.
        </p>
    </div>

 </div>


</div>
@endsection




