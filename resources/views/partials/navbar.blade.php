
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <!-- <span class="fas fa-motorcycle fa-2x"></span> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">
            <span class="fas fa-home"></span>
              Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page"  href="{{ url('/licencias') }}">
            <span class="fas  fa-id-card"></span>
             Licencias</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="fas fa-list-alt"></span>  Estadisticas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ url('/repuestos') }}">otros</a></li>
            <li><a class="dropdown-item" href="{{ url('/serviciotecnico') }}">otras</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{ url('/pqrs') }}">otres</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/sobrenosotros') }}">
            <span class=" fas fa-users"></span>  Sobre Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/contacto') }}">
            <span class="fas fa-id-card"></span>  Contactos</a>
        </li>
      </ul>
      <ul></ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-light " type="submit">
        <span class="fas fa-search"></span></button>
      </form>


</nav>
