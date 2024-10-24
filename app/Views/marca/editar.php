<?= $this->extend("layouts/temaLogado") ?>
<?= $this->section("script") ?>

<?= $this->endSection() ?>
<?= $this->section("conteudo") ?>


    <?php if (session()->getFlashdata("success")): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata("success") ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata("delete")): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata("delete") ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata("errors")): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata("errors") ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

<div class="border m-3">
    <h1 class="h1 text-center">Formulário de Edição de Marca</h1>

    <div class="container">
        <form action="<?= url_to("marca.onSave") ?>" method="post">
            <input type="hidden" name="idMarca" value="<?= $marca->idMarca ?>">
            <div class="row row-cols-1">
                <div class="col-6 mt-3 mb-3">
                    <label class="form-label" for="nome">Nome da marca <span class="text-danger fs-6"> (campo obrigatório)</span> </label>
                    <input class="form-control" type="text" name="nome" id="nome" aria-describedby="info-nome"
                        value="<?= $marca->nome ?>">
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