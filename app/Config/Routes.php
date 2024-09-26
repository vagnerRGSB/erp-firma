<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get("/login/tela-login", "LoginController::login", [
    "as" => "login.tela"
]);
$routes->post("/login/onLogin", "LoginController::onLogin", [
    "as" => "login.onLogin"
]);
$routes->get("/login/onLogout", "LoginController::onLogout", [
    "as" => "login.onLogout"
]);

/** 1 PECA SERVICO */
$routes->get("/peca-servico/listar","PecaServicoController::listar", [
    "as"=>"peca-servico.listar",
    "filter"=>"auth"
]);
$routes->get("/peca-servico/inserir","PecaServicoController::inserir", [
    "as"=>"peca-servico.inserir",
    "filter"=>"auth"
]);
$routes->get("/peca-servico/editar/(:num)","PecaServicoController::listar/$1", [
    "as"=>"peca-servico.editar",
    "filter"=>"auth"
]);
$routes->post("/peca-servico/onSave","PecaServicoController::onSave", [
    "as"=>"peca-servico.onSave",
    "filter"=>"auth"
]);
$routes->get("/peca-servico/onDelete/(:num)","PecaServicoController::onDelete/$1", [
    "as"=>"peca-servico.onDelete",
    "filter"=>"auth"
]);

/** 2 SERVICO */
$routes->get("/servico/listar","ServicoController::listar",[
    "as"=>"servico.listar",
    "filter"=>"auth"
]);
$routes->get("/servico/inserir","ServicoController::inserir",[
    "as"=>"servico.inserir",
    "filter"=>"auth"
]);
$routes->get("/servico/editar/(:num)","ServicoController::listar/$1",[
    "as"=>"servico.editar",
    "filter"=>"auth"
]);
$routes->post("/servico/onSave","ServicoController::onSave",[
    "as"=>"servico.onSave",
    "filter"=>"auth"
]);
$routes->get("/servico/onDelete/(:num)","ServicoController::onDelete/$1",[
    "as"=>"servico.listar",
    "filter"=>"auth"
]);


/** 3 ORCAMENTO */
$routes->get("/orcamento-servico/listar","OrcamentoServicoController::listar", [
    "as"=>"orcamento-servico.listar",
    "filter"=>"auth"
]);
$routes->get("/orcamento-servico/inserir","OrcamentoServicoController::inserir", [
    "as"=>"orcamento-servico.inserir",
    "filter"=>"auth"
]);
$routes->get("/orcamento-servico/editar/(:num)","OrcamentoServicoController::editar/$1", [
    "as"=>"orcamento-servico.editar",
    "filter"=>"auth"
]);
$routes->post("/orcamento-servico/onSave","OrcamentoServicoController::onSave", [
    "as"=>"orcamento-servico.onSave",
    "filter"=>"auth"
]);
$routes->get("/orcamento-servico/onDelete/(:num)","OrcamentoServicoController::onDelete", [
    "as"=>"orcamento-servico.onDelete",
    "filter"=>"auth"
]);


/** 4 INSCRICAO CLIENTE */
$routes->get("/inscricao-cliente/listar","InscricaoClienteController::listar", [
    "as"=>"inscricao-cliente.listar",
    "filter"=>"auth"
]);
$routes->get("/inscricao-cliente/inserir","InscricaoClienteController::inserir", [
    "as"=>"inscricao-cliente.inserir",
    "filter"=>"auth"
]);
$routes->get("/inscricao-cliente/editar/(:num)","InscricaoClienteController::editar/$1", [
    "as"=>"inscricao-cliente.editar",
    "filter"=>"auth"
]);
$routes->post("/inscricao-cliente/onSave","InscricaoClienteController::onSave", [
    "as"=>"inscricao-cliente.onSave",
    "filter"=>"auth"
]);
$routes->get("/inscricao-cliente/onDelete/(:num)","InscricaoClienteController::listar/$1", [
    "as"=>"inscricao-cliente.onDelete",
    "filter"=>"auth"
]);

/** 5 CLIENTE */
$routes->get("/cliente/listar","ClienteController::listar", [
    "as"=>"cliente.listar",
    "filter"=>"auth"
]);
$routes->get("/cliente/inserir","ClienteController::inserir", [
    "as"=>"cliente.inserir",
    "filter"=>"auth"
]);
$routes->get("/cliente/editar/(:num)","ClienteController::editar/$1", [
    "as"=>"cliente.listar",
    "filter"=>"auth"
]);
$routes->post("/cliente/onSave","ClienteController::onSave", [
    "as"=>"cliente.onSave",
    "filter"=>"auth"
]);
$routes->get("/cliente/onDelete/(:num)","ClienteController::onDelete/$1", [
    "as"=>"cliente.onDelete",
    "filter"=>"auth"
]);


/** 6 PECA */
$routes->get("/peca/listar","PecaController::listar",[
    "as"=>"peca.listar",
    "filter"=>"auth"
]);
$routes->get("/peca/inserir","PecaController::inserir",[
    "as"=>"peca.inserir",
    "filter"=>"auth"
]);
$routes->get("/peca/editar/(:num)","PecaController::editar/$1",[
    "as"=>"peca.editar",
    "filter"=>"auth"
]);
$routes->post("/peca/onSave","PecaController::onSave",[
    "as"=>"peca.onSave",
    "filter"=>"auth"
]);
$routes->get("/peca/onDelete/(:num)","PecaController::onDelete",[
    "as"=>"peca.onDelete",
    "filter"=>"auth"
]);


/** 7 SERIE MODELO */
$routes->get("/serie-modelo/listar","SerieModeloController::listar", [
    "as"=>"serie-modelo.listar",
    "filter"=>"auth"
]);
$routes->get("/serie-modelo/inserir","SerieModeloController::inserir", [
    "as"=>"serie-modelo.inserir",
    "filter"=>"auth"
]);
$routes->get("/serie-modelo/editar/(:num)","SerieModeloController::listar/$1", [
    "as"=>"serie-modelo.editar",
    "filter"=>"auth"
]);
$routes->post("/serie-modelo/onSave","SerieModeloController::onSave", [
    "as"=>"serie-modelo.onSave",
    "filter"=>"auth"
]);
$routes->get("/serie-modelo/onDelete/(:num)","SerieModeloController::listar/$1", [
    "as"=>"serie-modelo.onDelete",
    "filter"=>"auth"
]);


/** 8 LOCALIDADE */
$routes->get("/localidade/listar","LocalidadeController::listar", [
    "as"=>"localidade.listar",
    "filter"=>"auth"
]);
$routes->get("/localidade/inserir","LocalidadeController::inserir", [
    "as"=>"localidade.inserir",
    "filter"=>"auth"
]);
$routes->get("/localidade/editar/(:num)","LocalidadeController::editar/$1", [
    "as"=>"localidade.editar",
    "filter"=>"auth"
]);
$routes->post("/localidade/onSave","LocalidadeController::onSave", [
    "as"=>"localidade.onSave",
    "filter"=>"auth"
]);
$routes->get("/localidade/onDelete/(:num)","LocalidadeController::onDelete/$1", [
    "as"=>"localidade.onDelete",
    "filter"=>"auth"
]);


/** 9 CIDADE */
$routes->get("/cidade/listar", "CidadeController::listar", [
    "as"=>"cidade.listar",
    "filter"=>"auth"
]);
$routes->get("/cidade/inserir", "CidadeController::inserir", [
    "as"=>"cidade.inserir",
    "filter"=>"auth"
]);
$routes->get("/cidade/editar/(:num)", "CidadeController::editar/$1", [
    "as"=>"cidade.editar",
    "filter"=>"auth"
]);
$routes->post("/cidade/onSave", "CidadeController::onSave", [
    "as"=>"cidade.onSave",
    "filter"=>"auth"
]);
$routes->get("/cidade/onDelete/(:num)", "CidadeController::onDelete/$1", [
    "as"=>"cidade.onDelete",
    "filter"=>"auth"
]);

/** 10 ESPECIFICACAO PEÇA */
$routes->get("/especificacao/listar","EspecificacaoController::listar", [
    "as"=>"especificacao.listar",
    "filter"=>"auth"
]);
$routes->get("/especificacao/inserir","EspecificacaoController::inserir", [
    "as"=>"especificacao.inserir",
    "filter"=>"auth"
]);
$routes->get("/especificacao/editar/(:num)","EspecificacaoController::editar/$1", [
    "as"=>"especificacao.editar",
    "filter"=>"auth"
]);
$routes->post("/especificacao/onSave","EspecificacaoController::onSave", [
    "as"=>"especificacao.onSave",
    "filter"=>"auth"
]);
$routes->get("/especificacao/onDelete/(:num)","EspecificacaoController::onDelete/$1", [
    "as"=>"especificacao.onDelete",
    "filter"=>"auth"
]);


/** 11 MODELO MAQUINARIO */
$routes->get("/modelo-maquinario/listar", "ModeloMaquinarioController::listar", [
    "as" => "modelo-maquinario.listar",
    "filter" => "auth"
]);
$routes->get("/modelo-maquinario/inserir", "ModeloMaquinarioController::inserir", [
    "as"=>"modelo-maquinario.inserir",
    "filter" => "auth"
]);
$routes->get("/modelo-maquinario/editar", "ModeloMaquinarioController::editar", [
    "as" => "modelo-maquinario.editar",
    "filter" => "auth"
]);
$routes->post("/modelo-maquinario/onSave", "ModeloMaquinarioController::onSave", [
    "as"=>"modelo-maquinario.onSave",
    "filter"=>"auth"
]);


//** 12 USUARIO */
$routes->get("/usuario/listar", "UsuarioController::listar", [
    "as" => "usuario.listar",
    "filter" => "auth"
]);
$routes->get("/usuario/inserir", "UsuarioController::inserir", [
    "as" => "usuario.inserir",
    "filter" => "auth"
]);
$routes->get("/usuario/editar/(:num)", "UsuarioController::editar/$1", [
    "as" => "usuario.editarUsuario",
    "filter" => "auth"
]);
$routes->post("/usuario/onSave", "UsuarioController::onSave", [
    "as" => "usuario.onSave",
    "filter" => "auth"
]);
$routes->get("/usuario/onDelete/(:num)", "UsuarioController::onDelete/$1", [
    "as" => "usuario.onDelete",
    "filter" => "auth"
]);
$routes->get("/usuario/editarMeuPerfil", "UsuarioController::editarMeuPerfil", [
    "as" => "usuario.editarMeuPerfil",
    "filter" => "auth"
]);


/** 13  CATEGORIA SERVICO */
$routes->get("/categoria-servico/listar", "CategoriaServicoController::listar", [
    "as" => "categoria-servico.listar",
    "filter" => "auth"
]);
$routes->get("/categoria-servico/inserir", "CategoriaServicoController::inserir", [
    "as" => "categoria-servico.inserir",
    "filter" => "auth"
]);
$routes->get("/categoria-servico/editar/(:num)", "CategoriaServicoController::editar/$1", [
    "as" => "categoria-servico.editar",
    "filter" => "auth"
]);
$routes->post("/categoria-servico/onSave", "CategoriaServicoController::onSave", [
    "as" => "categoria-servico.onSave",
    "filter" => "auth"
]);
$routes->get("/categoria-servico/onDelete/(:num)", "CategoriaServicoController::onDelete/$1", [
    "as" => "categoria-servico.onDelete",
    "filter" => "auth"
]);


//** 14 ESTADO */
$routes->get("/estado/listar", "EstadoController::listar", [
    "as" => "estado.listar",
    "filter" => "auth"
]);
$routes->get("/estado/inserir", "EstadoController::inserir", [
    "as" => "estado.inserir",
    "filter" => "auth"
]);
$routes->get("/estado/editar/(:any)", "EstadoController::editar/$1", [
    "as" => "estado.editar/$1",
    "filter" => "auth"
]);
$routes->post("/estado/onSave", "EstadoController::onSave", [
    "as" => "estado.onSave",
    "filter" => "auth"
]);
$routes->get("/estado/onDelete/(:any)", "EstadoController::onDelete/$1", [
    "as" => "estado.onDelete",
    "filter" => "auth"
]);


/** 15 CATEGORIA PEÇA */
$routes->get("/categoria-peca/listar", "CategoriaPecaController::listar", [
    "as" => "categoria-peca.listar",
    "filter" => "auth"
]);
$routes->get("/categoria-peca/inserir", "CategoriaPecaController::inserir", [
    "as" => "categoria-peca.inserir",
    "filter" => "auth"
]);
$routes->get("/categoria-peca/editar/(:any)", "CategoriaPecaController::editar/$1", [
    "as" => "categoria-peca.editar",
    "filter" => "auth"
]);
$routes->post("/categoria-peca/onSave", "CategoriaPecaController::onSave", [
    "as" => "categoria-peca.onSave"
]);
$routes->get("/categoria-peca/onDelete/(:any)", "CategoriaPecaController::onDelete/$1", [
    "as" => "categoria-peca.onDelete",
    "filter" => "auth"
]);


/** 16 CATEGORIA MAQUINARIO */
$routes->get("/categoria-maquinario/listar", "CategoriaMaquinarioController::listar", [
    "as" => "categoria-maquinario.listar",
    "filter" => "auth"
]);
$routes->get("/categoria-maquinario/inserir", "CategoriaMaquinarioController::inserir", [
    "as" => "categoria-maquinario.inserir",
    "filter" => "auth"
]);
$routes->get("/categoria-maquinario/editar/(:any)", "CategoriaMaquinarioController::editar/$1", [
    "as" => "categoria-maquinario.editar",
    "filter" => "auth"
]);
$routes->post("/categoria-maquinario/onSave", "CategoriaMaquinarioController::onSave", [
    "as" => "categoria-maquinario.onSave",
    "filter" => "auth"
]);
$routes->get("/categoria-maquinario/onDelete/(:any)", "CategoriaMaquinarioController::onDelete/$1", [
    "as" => "categoria-maquinario.onDelete",
    "filter" => "auth"
]);


/** 17 MARCA PARA MAQUINARIO E PEÇA */
$routes->get("/marca/listar", "MarcaController::listar", [
    "as" => "marca.listar",
    "filter" => "auth"
]);
$routes->get("/marca/inserir", "MarcaController::inserir", [
    "as" => "marca.inserir",
    "filter" => "auth"
]);
$routes->get("/marca/editar/(:any)", "MarcaController::editar/$1", [
    "as" => "marca.editar",
    "filter" => "auth"
]);
$routes->post("/marca/onSave", "MarcaController::onSave", [
    "as" => "marca.onSave",
    "filter" => "auth"
]);
$routes->get("/marca/onDelete/(:any)", "MarcaController::onDelete/$1", [
    "as" => "marca.onDelete",
    "filter" => "auth"
]);


$routes->get('/', "Home::home", ["as" => "home", "filter" => "auth"]);
