<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6 w-100">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center">Editar Perfil</h2>
                    <form action="<?= url_to("usuario.onSave") ?>" method="post">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Senha Atual</label>
                            <input type="password" class="form-control" id="senhaAtual" name="senhaAtual" required>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="password" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha" required>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="confirmaSenha" class="form-label">Confirme a Senha</label>
                                <input type="password" class="form-control" id="confirmPassword" name="confirmaSenha" required>
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
