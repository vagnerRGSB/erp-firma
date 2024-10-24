<?= $this->extend("layouts/temaLogado") ?>

<?= $this->section("script") ?>

<?= $this->endSection() ?>

<?= $this->section("conteudo") ?>

<div class="border m-3">
    <h3 class="h3 text-center"> Lista de Marcas </h3>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col" class="text-start">Código Identificado</th>
                <th scope="col" class="text-start">Nome Marca</th>
                <th scope="col" class="text-end">
                    <a class="btn btn-primary btn-sm" href="<?= url_to("marca.inserir") ?>"> <i class="bi bi-plus"></i> Inserir</a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($marcas)) : ?>
                <?php foreach($marcas as $marca) : ?>
                    <tr>
                        <td scope="row"><?= esc($marca->idMarca) ?></th>
                        <td>            <?=esc($marca->nome)?></td>
                        <td class="text-end">
                            <a class="btn btn-warning btn-sm" href="<?= base_url("/marca/editar/".$marca->idMarca)?>"> <i class="bi bi-pen"></i> Editar</a>
                            <a class="btn btn-danger btn-sm" href="<?= base_url("/marca/onDelete/".$marca->idMarca) ?>"> <i class="bi bi-trash"></i> Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <thead></thead>
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