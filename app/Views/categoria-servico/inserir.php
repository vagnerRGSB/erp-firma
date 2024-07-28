<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6 w-100">
            <div class="card">
                <div class="card-body">
                    <h2 class="h2 card-title text-center">Cadastrar Categoria de Serviço</h2>
                    <form action="<?= url_to("categoria-servico.onSave") ?>" method="post">

                        <div class="mb-3 col-6">
                            <label for="nome" class="form-label">Nome Categoria Peça</label>
                            <input name="nome" type="text" class="form-control" id="nome" aria-describedby="nomeHelp">
                            <div id="nomeHelp" class="form-text"></div>
                        </div>

                        <div class="mb-3 col-3">
                            <label for="horaCobrada" class="form-label">Valor ser cobrado por hora</label>
                            <input type="text" name="horaCobrada" class="form-control" id="horaCobrada" aria-describedby="horaCobradaHelp" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                            <div id="horaCobradaHelp" class="form-text"></div>
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