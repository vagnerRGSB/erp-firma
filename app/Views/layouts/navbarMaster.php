<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href=<?= url_to("master"); ?>> <i class="bi bi-house"></i> Gestor</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-list"></i> Usuários
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href=<?=url_to("categoria-usuario.list")?>><i class="bi bi-list"></i> Lista Categoria de Usuários</a></li>
            <li><a class="dropdown-item" href=<?=url_to("usuario.list");?>><i class="bi bi-list"></i> Lista de Usuário</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href=<?=url_to("cliente.list")?>><i class="bi bi-list"></i> Clientes</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-list"></i> Lista de Orçamentos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>