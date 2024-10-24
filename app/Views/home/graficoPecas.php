<?= $this->extend("layouts/temaLogado") ?>

<?= $this->section("script") ?>

<?= $this->endSection() ?>

<?= $this->section("conteudo") ?>

<div>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#"> <i class="bi bi-file-earmark"></i> Relatório mensal de serviços</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#"> <i class="bi bi-file-earmark"></i> Relatório peças comercializadas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#"> <i class="bi bi-graph-up-arrow"></i> Gestão empresarial V Tornos</a>
        </li>
    </ul>
</div>

<?= $this->endSection() ?>

<?= $this->section("javascript") ?>

<?= $this->endSection() ?>