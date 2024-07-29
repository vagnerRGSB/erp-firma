<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6 w-100">
      <div class="card">
        <div class="card-body">
          <h2 class="h2 card-title text-center">Listagem de Estado</h2>

          <div class="mt-1 mb-1">
            <a class="btn btn-primary" href=<?= url_to("estado.inserir") ?>><i class="bi bi-plus"></i> Estado</a>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th class="text-start">Nome Estado</th>
                <th colspan="2" class="text-start">Sigla Estado</th>
              </tr>
            </thead>
            <?php foreach ($itens as $item) : ?>
              <tr>
                <th class="text-start mb-1 col"><?php echo $item["nome"] ?></th>
                <th class="text-start mb-1 col"><?php echo $item["sigla"] ?></th>
                <th class="text-end mb-1 col g-2">
                  <a class="btn btn-warning mb-1 lg-3" href="<?= base_url("estado/editar/" . $item["idEstado"]) ?>"> <i class="bi bi-pen"></i> Editar</a>
                  <a class="btn btn-danger mb-1 lg-3" href="<?= base_url("estado/onDelete/" . $item["idEstado"]) ?>"> <i class="bi bi-trash"></i> Excluir</a>
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