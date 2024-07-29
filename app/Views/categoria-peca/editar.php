<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6 w-100">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center">Editar Categoria Peça</h2>
                    <form action="<?= url_to("categoria-peca.onSave") ?>" method="post">

                        <div class="mb-3 col-2">
                            <input type="hidden" name="idCategoriaPeca" value="<?= $item["idCategoriaPeca"] ?>">
                        </div>

                        <div class="mb-3 col-6">
                            <label for="nome" class="form-label">Nome Categoria Peça</label>
                            <input name="nome" type="text" class="form-control" id="nome" aria-describedby="nomeHelp" value=<?= $item["nome"] ?>>
                            <div id="nomeHelp" class="form-text"></div>
                        </div>
                        <div>
                            <button class="btn btn-success" type="submit"><i class="bi bi-floppy"></i> Salvar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>