<?= $this->extend("layouts/temaLogado") ?>
<?= $this->section("script") ?>

<?= $this->endSection() ?>
<?= $this->section("conteudo") ?>

<div class="border m-3">
    <h1 class="h1 text-center">Formulário Inserção de Modelo</h1>
    <div class="container">
        <form action="<?= url_to("modelo.onSave") ?>" method="post"></form>
        <div class="row row-cols-2">
            <div class="col-6 mt-3 mb-3">
                <label for="idMaquinario" class="form-label">Selecione maquinário <span class="text-danger fs-6">(campo obrigatório)</span></label>
                <select name="idMaquinario" id="idMaquinairo" class="form-select" aria-describedby="info-idMaquinario">
                    <option value="">Selecione maquinário já cadastrado</option>
                    <?php foreach ($maquinarios as $maquinario) : ?>
                        <option value="<?= esc($maquinario->idMaquinario) ?>"><?= esc($maquinario->nomeMaquinario) ?></option>
                    <?php endforeach; ?>
                </select>
                <div name="info-idMaquinario" id="info-idMaquinario">
                    <span class="text-danger form-label sf-6">informação</span>
                </div>
            </div>
            <div class="col-6 mt-3 mb-3">
                <label for="idMarca" class="form-label">Selecione marca <span class="text-danger fs-6">(campo obrigatório)</span></label>
                <select name="idMarca" id="idMarca" class="form-select" aria-describedby="info-idMarca">
                    <option value="">Selecione marca já cadastrada</option>
                    <?php foreach($marcas as $marca) : ?>
                        <option value="<?= esc($marca->idMarca)  ?>"><?= esc($marca->nomeMarca) ?></option>
                    <?php endforeach ?>
                </select>
                <div name="info-idMarca" id="info-idMarca">
                        <span class="text-danger form-label sf-6">
                            Informação
                        </span>
                </div>
            </div>
        </div>
        
    </div>
</div>

<?= $this->endSection() ?>
<?= $this->section("javascript") ?>

<?= $this->endSection() ?>