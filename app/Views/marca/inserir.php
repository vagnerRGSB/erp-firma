<?= $this->extend("layouts/temaLogado") ?>
<?= $this->section("script") ?>

<?= $this->endSection() ?>
<?= $this->section("conteudo") ?>

<div class="border m-3">
    <h1 class="h1 text-center">Formulário de Inserção de Marca</h1>

    <div class="container">
        <form action="<?= url_to("marca.onSave") ?>" method="post">
            <div class="row row-cols-1">
                <div class="col-6 mt-3 mb-3">
                    <label class="form-label" for="nome">Nome da marca <span class="text-danger fs-6"> (campo obrigatório)</span> </label>
                    <input class="form-control" type="text" name="nome" id="nome" aria-describedby="info-nome">
                    <div class="" id="info-nome" name="info-nome">
                        <span class="text-danger"> <?= session()->getFlashdata("marca")["nome"] ?? "" ?></span>
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