<?= $this->extend("layouts/temaLogado") ?>
<?= $this->section("script")?>

<?= $this->endSection() ?>
<?= $this->section("conteudo")?>
<?= $this->extend("layouts/temaLogado") ?>
<?= $this->section("script") ?>

<?= $this->endSection() ?>
<?= $this->section("conteudo") ?>

<div class="border">
    <h3 class="h3 m-3 text-center">Formulário Edição de Maquinário</h3>
    <div class="container">
        <form action="<?= url_to("maquinario.onSave") ?>" method="post">
            <div class="row row-cols-1">
                <div class="col-8 mt-3 mb-3">
                    <input type="hidden" name="idMaquinario" value="<?=$maquinario->idMaquinario?>">
                    <label class="form-label" for="nome">Nome Maquinário <span class="text-danger fs-6">(Campo obrigatório)</span></label>
                    <input class="form-control" type="text" name="nome" id="nome" aria-describedby="info-nome"
                    value="<?=$maquinario->nome?>">
                    <div class="text-label" id="info-nome" name="info-nome">
                        <span class="text-danger">Erro</span>
                    </div>
                </div>
            </div>
            <button class="btn btn-success mb-3" type="submit">Gravar</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
<?= $this->section("javascript") ?>

<?= $this->endSection() ?>
<?= $this->endSection() ?>
<?= $this->section("javascript")?>

<?= $this->endSection() ?>