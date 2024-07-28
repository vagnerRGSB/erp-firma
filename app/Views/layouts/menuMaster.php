<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href=<?= url_to("home") ?>><i class="bi bi-house"></i> V. Tornos</a>
    <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon bg-body"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-people"></i> Gestão Sobre
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= url_to("categoria-servico.listar") ?>"> <i class="bi bi-list"></i> Lista categorias serviços prestados</a></li>
            <li><a class="dropdown-item" href="<?= url_to("usuario.inserir") ?>"> <i class="bi bi-list"></i> Lista de usuários do sistema</a></li>
            <li><a class="dropdown-item" href="<?= url_to("usuario.editar") ?>"> <i class="bi bi-list"></i> Lista de clientes</a></li>
            <li><a class="dropdown-item" href="<?= url_to("marca.listar") ?>"> <i class="bi bi-list"></i> Lista de Marcas</a></li>

          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-geo-alt"></i> Sobre Localização
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= url_to("estado.listar") ?>"><i class="bi bi-list"></i> Lista Estados</a></li>
            <li><a class="dropdown-item" href="#"> <i class="bi bi-list"></i> Lista de cidades</a></li>
            <li><a class="dropdown-item" href="#"> <i class="bi bi-list"></i> Lista de localidades Cidades</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-collection"></i> Sobre Peças
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
            <li><a class="dropdown-item" href="<?= url_to("categoria-maquinario.listar") ?>"> <i class="bi bi-list"></i> Lista de categoria Maquinarios</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-list"></i> Lista de Modelos das Marcas dos Maquinarios</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ola,
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= url_to("login.tela") ?>"> Tela Login</a></li>
            <li><a class="dropdown-item" href="#"> Editar meu perfil</a></li>
            <li><a class="dropdown-item" href="#"> Finalizar seção </a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>