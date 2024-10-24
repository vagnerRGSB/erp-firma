<?= $this->extend("layouts/temaLogado") ?>
<?= $this->section("script") ?>

<?= $this->endSection() ?>
<?= $this->section("conteudo") ?>

<div class="border m-3">
    <h1 class="h1 text-center">Formulário Inserção de Modelo</h1>
    <div class="container">
        <form action="<?= url_to("modelo.onSave") ?>" method="post">
        <div class="row row-cols-2">
            <div class="col mt-3 mb-3">
                <label for="idMaquinario" class="form-label">Selecione maquinário <span class="text-danger fs-6">(campo obrigatório)</span></label>
                <select name="idMaquinario" id="idMaquinairo" class="form-select" aria-describedby="info-idMaquinario">
                    <?php foreach ($maquinarios as $maquinario) : ?>
                        <option value="<?= esc($maquinario->idMaquinario) ?>"
                     <?= ($maquinario->idMaquinario==$modelo->idMaquinario) ? "selected" : "" ?>   > <?= esc($maquinario->nome) ?></option>
                    <?php endforeach; ?>
                </select>
                <div name="info-idMaquinario" id="info-idMaquinario">
                    <span class="text-danger form-label sf-6">informação</span>
                </div>
            </div>
            <div class="col mt-3 mb-3">
                <label for="idMarca" class="form-label">Selecione marca <span class="text-danger fs-6">(campo obrigatório)</span></label>
                <select name="idMarca" id="idMarca" class="form-select" aria-describedby="info-idMarca">
                    <?php foreach ($marcas as $marca) : ?>
                        <option value="<?= esc($marca->idMarca)?>"
                        <?= ($marca->idMarca==$modelo->idMarca ? "selected" : "") ?> > <?= esc($marca->nome) ?></option>
                    <?php endforeach ?>
                </select>
                <div name="info-idMarca" id="info-idMarca">
                    <span class="text-danger form-label sf-6">
                        Informação
                    </span>
                </div>
            </div>
        </div>
        <div class="row row-cols-1">
            <div class="col-12 mt-3 mb-3">
                <label class="form-label" for="nome">Nome modelo <span class="text-danger fs-6">(Campo obrigatório)</span></label>
                <input class="form-control" type="text" name="nome" id="nome" aria-describedby="info-nome"
                value="<?= esc($modelo->nome) ?>">
                <div class="text-label" id="info-nome" name="info-nome">
                    <span class="text-danger">Informação</span>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mb-3">Salvar</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
<?= $this->section("javascript") ?>

<?= $this->endSection() ?>