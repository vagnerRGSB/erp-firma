<main class="container">
<h1 class="fs-3"><?= $title ?></h1>
<div class="row g-1">
    <div class="lg-3 md-4">
        <a class="btn btn-primary" href=<?=url_to("cliente.insert")?>><i class="bi bi-plus"></i> Clientes</a>
    </div>
</div>
<table class="table">
    <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Tipo Certificado</th>
            <th>Cpf-Cnpj</th>
            <th><i class="bi bi-pencil"><i class="bi bi-menu-up"></i> Ações</i></th>
        </tr>
    </thead>
</table>
</main>