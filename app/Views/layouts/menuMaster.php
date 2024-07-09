<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href=<?= url_to("home") ?>>Gestor</a>
    <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon bg-body"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">

      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-people"></i> Pessoas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#"> <i class="bi bi-list"></i> Lista de usuários do sistema</a></li>
            <li><a class="dropdown-item" href="#"> <i class="bi bi-list"></i> Lista de clientes</a></li>
            <li><a class="dropdown-item" href="#"> <i class="bi bi-list"></i> Lista de Marcas</a></li>
          </ul>
        </li>
    
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-geo-alt"></i> Localização
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= url_to("estado.listar")?>"><i class="bi bi-list"></i> Lista Estados</a></li>
            <li><a class="dropdown-item" href="#"> <i class="bi bi-list"></i> Lista de cidades</a></li>
            <li><a class="dropdown-item" href="#"> <i class="bi bi-list"></i> Lista de localidades Cidades</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-collection"></i> Insumos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= url_to("categoria-peca.listar") ?>"> <i class="bi bi-list"></i> Categorias Peças</a></li>
            <li><a class="dropdown-item" href="#">Especificações Peças</a></li>
            <li><a class="dropdown-item" href="#">Peças e Fabricantes</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-gear"></i> Equipamentos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#"> <i class="bi bi-list"></i> Lista de categoria Maquinarios</a></li>
            <li><a class="dropdown-item" href="#">Lista de Modelos das Marcas dos Maquinarios</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      </ul>
    </div>
  </div>
</nav>