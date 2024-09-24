<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6 w-100">
            <div class="card">
                <div class="card-body">
                    <h2 class="h2 card-title text-center">Cadastrar Modelo Maquinários</h2>
                    <form action="<?= url_to("modelo-maquinario.onSave") ?>" method="post">

                        <div class="mb-3 col-12">
                            <select name="idMarca" id="marca_id" aria-describedby="marcaHelp" >
                                <option selected>Selecione marca especifica</option>
                                <?php foreach($marcas as $marca) : ?>
                                    <option value="<?= $marca["idMarca"] ?>"><?= $marca["nome"] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div id="marcaHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3 col-12">
                            <select name="idCategoriaMaquinario" id="idCategoriaMaquinario">
                                <option selected>Selecione categoria de maquinário</option>
                                <?php foreach($categorias as $categoria) : ?>
                                    <option value="<?= $categoria["idCategoriaMaquinario"]?>"><?= $categoria["nome"] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div id="nomeHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="nome" class="form-label">Modelo</label>
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