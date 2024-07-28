<div class="container bg-light mt-2 mb-2">
  <div class="mt-1 mb-1">
    <h1 class="h1">Lista Usuários</h1>
  </div>
  <div class="mt-1 mb-1">
    <a class="btn btn-primary" href="#"><i class="bi bi-plus"></i> Usuário</a>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th class="text-start">Nome</th>
        <th colspan="2" class="text-start">E-mail</th>
      </tr>
    </thead>
    <?php foreach ($itens as $item) : ?>
        <tr>
          <th class="text-start mb-1 col"><?=$item["nome"] ?></th>
          <th class="text-start mb-1 col"><?=$item["email"] ?></th>
          <th class="text-end mb-1 col g-2">
            <a class="btn btn-warning mb-1 lg-3" href="#"> <i class="bi bi-pen"></i> Editar</a>
            <a class="btn btn-danger mb-1 lg-3" href="#"> <i class="bi bi-trash"></i> Excluir</a>
          </th>
        </tr>
    <?php endforeach; ?>
    <thead></thead>
  </table>
  <div class="container">
    <?= $pager->links(); ?>
  </div>
</div>