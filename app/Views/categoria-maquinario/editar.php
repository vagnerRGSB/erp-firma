<div class=container>
    <div>
        <h1 class="h1"> Formulário Categoria Máquinario </h1>
    </div>

    <form action="<?= url_to("categoria-maquinario.onSave") ?>" method="post">

        <div class="mb-3 col-6">
            <input type="hidden" name="idCategoriaMaquinario" value="<?= $item["idCategoriaMaquinario"] ?>">
        </div>

        <div class="mb-3 col-6">
            <label for="nome" class="form-label">Nome Categoria Maquinario</label>
            <input name="nome" type="text" class="form-control" id="nome" aria-describedby="nomeHelp"
            value="<?= $item["nome"] ?>">
            <div id="nomeHelp" class="form-text"></div>
        </div>
        <div>
            <button class="btn btn-success" type="submit"><i class="bi bi-floppy"></i> Salvar</button>
        </div>
    </form>

</div>