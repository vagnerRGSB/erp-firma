<div class=container>
    <div>
        <h1 class="h1"> Formulário Estado </h1>
    </div>

    <form action="<?= url_to("estado.onSave") ?>" method="post">

        <div class="mb-3 col-6">
            <label for="nome" class="form-label">Nome Estado</label>
            <input name="nome" type="text" class="form-control" id="nome" aria-describedby="nomeHelp">
            <div id="nomeHelp" class="form-text"></div>
        </div>

        <div class="mb-3 col-3">
            <label for="sigla" class="form-label">Sigla Estado</label>
            <input name="sigla" type="text" class="form-control" id="sigla" aria-describedby="siglaHelp">
            <div id="siglaHelp" class="form-text"></div>
        </div>


        <div>
            <button class="btn btn-success" type="submit"><i class="bi bi-floppy"></i> Salvar</button>
        </div>
    </form>

</div>