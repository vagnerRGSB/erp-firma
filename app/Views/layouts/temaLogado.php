<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Sistema V. Tornos</title>

    <?= $this->renderSection("script") ?>
</head>
<body>

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
           Gestão Sobre
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= url_to("categoria-servico.listar") ?>"> <i class="bi bi-list"></i> Lista categorias serviços prestados</a></li>
            <li><a class="dropdown-item" href="<?= url_to("usuario.listar") ?>"> <i class="bi bi-list"></i> Lista de usuários do sistema</a></li>
            <li><a class="dropdown-item" href="#"> <i class="bi bi-list"></i> Lista de clientes</a></li>
            <li><a class="dropdown-item" href="<?= url_to("marca.listar") ?>"> <i class="bi bi-list"></i> Lista de Marcas</a></li>

          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Localizações
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= url_to("estado.listar") ?>"><i class="bi bi-list"></i> Lista Estados</a></li>
            <li><a class="dropdown-item" href="<?= url_to("cidade.listar") ?>"> <i class="bi bi-list"></i> Lista de cidades</a></li>
            <li><a class="dropdown-item" href="#"> <i class="bi bi-list"></i> Lista de localidades Cidades</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Peças
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= url_to("categoria-peca.listar") ?>"> <i class="bi bi-list"></i> Categorias Peças</a></li>
            <li><a class="dropdown-item" href="#">Especificações Peças</a></li>
            <li><a class="dropdown-item" href="#">Peças e Fabricantes</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Equipamentos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= url_to("categoria-maquinario.listar") ?>"> <i class="bi bi-list"></i> Lista de categoria Maquinarios</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-list"></i> Lista de Modelos das Marcas dos Maquinarios</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Olá,<?php if(session()->has("logado")): ?>
                <?= session()->get("logado")["nome"] ?>
            <?php endif; ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= url_to("usuario.editarMeuPerfil") ?>"> Editar meu perfil</a></li>
            <li><a class="dropdown-item" href="<?= url_to("login.onLogout") ?>"> Finalizar seção </a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>

<div>
<?= $this->renderSection("conteudo") ?>

<?= $this->renderSection("javascript") ?>
</div>


<script defer src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>

