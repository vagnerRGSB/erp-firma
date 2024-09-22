<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6 w-100">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center">Editar Usuário</h2>
                    <form action="<?= url_to("usuario.onSave") ?>" method="post">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" required
                            value="<?= $itens["nome"] ?>">
                            <div id="nomeHelp" class="form-text">
                                <?= session()->getFlashdata("errors")["nome"] ?? "" ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required
                            value="<?= $itens["email"] ?>">
                            <div id="nomeHelp" class="form-text">
                                <?= session()->getFlashdata("errors")["email"] ?? "" ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha" required
                                value="<?= $itens["senha"] ?>">
                                <div id="senhaHelp" class="form-text">
                                    <?= session()->getFlashdata("errors")["senha"] ?? "" ?>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 col-4">
                            <button type="submit" class="btn btn-success"><i class="bi bi-floppy"></i> Cadastrar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>