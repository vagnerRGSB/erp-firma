<?= $this->extend("layouts/temaLogado") ?>
<?= $this->section("script") ?>

<?= $this->endSection() ?>
<?= $this->section("conteudo") ?>

<div class="border m-3">
    <h3 class="h3 text-center">Lista de Modelos</h3>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col" class="text-start">Código</th>
                <th scope="col" class="text-start">Maquinário</th>
                <th scope="col" class="text-start">Marca</th>
                <th scope="col" class="text-start">Nome modelo</th>
                <th>
                    <a class="btn btn-primary btn-sm" href="<?= url_to("modelo.inserir") ?>"> <i class="bi bi-plus"></i> Inserir</a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($modelos)) : ?>
                <?php foreach ($modelos as $modelo) : ?>
                    <tr>
                        <td scope="row"><?= esc($modelo->idModelo) ?></td>
                        <td><?= esc($modelo->nomeMaquinario) ?></td>
                        <td><?= esc($modelo->nomeMarca) ?></td>
                        <td><?= esc($modelo->nomeModelo) ?></td>
                        <td class="text-end">
                            <a class="btn btn-warning btn-sm" href="<?= base_url("/modelo/editar/" . $modelo->idModelo) ?>"> <i class="bi bi-pen"></i> Editar</a>
                            <a class="btn btn-danger btn-sm" href="<?= base_url("/modelo/onDelete/" . $modelo->idModelo) ?>"> <i class="bi bi-trash"></i> Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td scope="row" colspan="3" class="text-center">Nenhuma marca foi encontrada</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <div class="m-3">
        <?= $pager->links(); ?>
    </div>
</div>

<?= $this->endSection() ?>
<?= $this->section("javascript") ?>

<?= $this->endSection() ?>