<div class="container">
    <div>
        <h1 class="h1 mt-5"> Formulário Marca </h1>
    </div>

    <form action="<?= url_to("marca.onSave") ?>" method="post">

        <div class="mb-3 col-6">
            <label for="nome" class="form-label">Nome Marca</label>
            <input name="nome" type="text" class="form-control" id="nome" aria-describedby="nomeHelp">
            <div id="nomeHelp" class="form-text"></div>
        </div>
        <div>
            <button class="btn btn-success" type="submit"><i class="bi bi-floppy"></i> Salvar</button>
        </div>
    </form>

</div>