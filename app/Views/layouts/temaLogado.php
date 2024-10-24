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
      <a class="navbar-brand" href="<?= url_to("home.principal") ?>"> <i class="bi bi-house"></i> V Tornos</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Operações para
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#"> <i class="bi bi-list"></i> maquinários para prestação de serviços</a></li>
              <li><a class="dropdown-item" href="#"> <i class="bi bi-list"></i> produtos para comercialização </a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> <i class="bi bi-list"></i> Gestão de endereços e localizações </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> <i class="bi bi-list"></i> Gestão de atendimento aos clientes </a>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Olá, nome da pessoa
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#"> <i class="bi bi-person-fill-gear"></i> Meus dados</a></li>
              <li><a class="dropdown-item" href="#"> <i class="bi bi-person-fill-gear"></i> Alterar senha</a></li>
              <li><a class="dropdown-item" href="#"> <i class="bi bi-list"></i> Membros do sistema</a></li>
              <li><a class="dropdown-item" href="#"> <i class="bi bi-person-walking"></i> Sair do sistema</a></li>
            </ul>
          </li>
        </ul>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            EM DESENVOLVIMENTO
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= url_to("marca.listar") ?>">LISTAR MARCA</a></li>
            <li><a class="dropdown-item" href="<?= url_to("marca.inserir") ?>">INSERIR MARCA</a></li>
            <li><a class="dropdown-item" href="<?= url_to("maquinario.listar") ?>">LISTAR MAQUINARIO</a></li>
            <li><a class="dropdown-item" href="<?= url_to("maquinario.inserir") ?>">INSERIR MAQUINARIO</a></li>
            <li><a class="dropdown-item" href="<?= url_to("modelo.listar") ?>">LISTAR MODELO</a></li>
            <li><a class="dropdown-item" href="<?= url_to("modelo.inserir") ?>">INSERIR MODELO</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

      </div>
    </div>
  </nav>

  <div class="container-lg">
        <div class="m-3">
      <?= $this->renderSection("conteudo") ?>
    </div>
  </div>

  <?= $this->renderSection("javascript") ?>
  <script defer src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>