<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6 w-100">
            <div class="card">
                <div class="card-body">
                    <h2 class="h2 card-title text-center">Cadastrar Marca</h2>
                    <form action="<?= url_to("marca.onSave") ?>" method="post">

                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome Marca</label>
                            <input name="nome" type="text" class="form-control" id="nome" aria-describedby="nomeHelp">
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