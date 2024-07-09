<div class="container bg-light mt-2 mb-2">
  <div class="mt-1 mb-1">
    <h1 class="h1">Lista Categorias de Máquinarios</h1>
  </div>
  <div class="mt-1 mb-1">
    <a class="btn btn-primary" href="<?= url_to("categoria-maquinario.inserir") ?>"><i class="bi bi-plus"></i> Categoria Maquinario</a>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th colspan="2" class="text-start">Nome Categoria Maquinario</th>
      </tr>
    </thead>
    <?php foreach ($itens as $item) : ?>
        <tr>
          <th class="text-start mb-1 col"><?php echo $item["nome"] ?></th>
          <th class="text-end mb-1 col g-2">
            <a class="btn btn-warning mb-1 lg-3" href="<?= base_url("categoria-maquinario/editar/" . $item["idCategoriaMaquinario"]) ?>"> <i class="bi bi-pen"></i> Editar</a>
            <a class="btn btn-danger mb-1 lg-3" href="<?= base_url("categoria-maquinario/onDelete/". $item["idCategoriaMaquinario"]) ?>"> <i class="bi bi-trash"></i> Excluir</a>
          </th>
        </tr>
    <?php endforeach; ?>
    <thead></thead>
  </table>
  <div class="container">
    <?= $pager->links(); ?>
  </div>
</div>