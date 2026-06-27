<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="#">Admin SENA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
          <li class="nav-item">
            <a class="nav-link" href="{{ route('computer.computador') }}">Computador</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{ route('course.registro') }}">Curso</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{ route('teacher.registro') }}">Instructor</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('areas.create') }}">Área</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('trainingcenters.registrar') }}">Centro Formación</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Aprendices
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('Aprendice.registro') }}">Registrar Aprendiz</a></li>
            </ul>
          </li>

        </ul>
        
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
          <button class="btn btn-light" type="submit">Hola</button>
        </form>
      </div>
    </div>
</nav>