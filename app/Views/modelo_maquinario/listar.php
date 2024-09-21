<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6 w-100">

      <?php if (session()->has("success")) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Cadastro ou atualização realizado com Sucesso:</strong><?= session()->getFlashdata("success") ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>

      <div class="card">
        <div class="card-body">
          <h2 class="card-title text-center">Listagem de Modelo de Maquinários</h2>

          <div class="mt-1 mb-1">
            <a class="btn btn-primary" href="<?= url_to("modelo_maquinario.inserir") ?>"><i class="bi bi-plus"></i> Usuário</a>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th class="text-start">Nome Modelo Maquinário</th>
                <th class="text-start">Categoria Maquinário</th>
                <th colspan="2" class="text-start">Marca Maquinário</th>
              </tr>
            </thead>
            <?php foreach ($itens as $item) : ?>
              <tr>
                <th class="text-start mb-1 col"><?= $item["nome"] ?></th>
                <th class="text-start mb-1 col"><?= $item["nome"] ?></th>
                <th class="text-end mb-1 col g-2">
                  <a class="btn btn-warning mb-1 lg-3" href="<?= base_url("usuario/editar/".$item["idUsuario"])?>"> <i class="bi bi-pen"></i> Editar</a>
                  <a class="btn btn-danger mb-1 lg-3" href="<?= base_url("usuario/onDelete/".$item["idUsuario"])?>"> <i class="bi bi-trash"></i> Excluir</a>
                </th>
              </tr>
            <?php endforeach; ?>
            <thead></thead>
          </table>
          <div class="container">
            <?= $pager->links(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>