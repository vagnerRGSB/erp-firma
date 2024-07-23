<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get("/usuario/listar","UsuarioController::listar",["as"=>"usuario.listar"]);
$routes->get("/usuario/inserir","UsuarioController:inserir",["as"=>"usuario.inserir"]);
$routes->get("/usuario/editar/(:num)","UsuarioController:editar/$1",["as"=>"usuario.editar"]);
$routes->post("/usuario/onSave","UsuarioController::onSave",["as"=>"usuario.onSave"]);
$routes->get("/usuario/onDelete/(:num)","UsuarioController::onDelete",["as"=>"usuario.onDelete"]);


$routes->get("/categoria-servico/listar","CategoriaServicoController::listar",["as"=>"categoria-servico.listar"]);
$routes->get("/categoria-servico/inserir","CategoriaServicoController::inserir",["as"=>"categoria-servico.inserir"]);
$routes->get("/categoria-servico/editar/(:num)","CategoriaServicoController::editar/$1",["as"=>"categoria-servico.editar"]);
$routes->post("/categoria-servico/onSave","CategoriaServicoController::onSave",["as"=>"categoria-servico.onSave"]);
$routes->get("/categoria-servico/onDelete/(:num)","CategoriaServicoController::onDelete/$1",["as"=>"categoria-servico.onDelete"]);


$routes->get("/estado/listar","EstadoController::listar",["as"=>"estado.listar"]);
$routes->get("/estado/inserir","EstadoController::inserir",["as"=>"estado.inserir"]);
$routes->get("/estado/editar/(:any)","EstadoController::editar/$1",["as"=>"estado.editar/$1"]);
$routes->post("/estado/onSave","EstadoController::onSave",["as"=>"estado.onSave"]);
$routes->get("/estado/onDelete/(:any)","EstadoController::onDelete/$1",["as"=>"estado.onDelete"]);

$routes->get("/categoria-peca/listar","CategoriaPecaController::listar",["as"=>"categoria-peca.listar"]);
$routes->get("/categoria-peca/inserir","CategoriaPecaController::inserir",["as"=>"categoria-peca.inserir"]);
$routes->get("/categoria-peca/editar/(:any)","CategoriaPecaController::editar/$1",["as"=>"categoria-peca.editar"]);
$routes->post("/categoria-peca/onSave","CategoriaPecaController::onSave",["as"=>"categoria-peca.onSave"]);
$routes->get("/categoria-peca/onDelete/(:any)","CategoriaPecaController::onDelete/$1",["as"=>"categoria-peca.onDelete"]);

$routes->get("/categoria-maquinario/listar","CategoriaMaquinarioController::listar",["as"=>"categoria-maquinario.listar"]);
$routes->get("/categoria-maquinario/inserir","CategoriaMaquinarioController::inserir",["as"=>"categoria-maquinario.inserir"]);
$routes->get("/categoria-maquinario/editar/(:any)","CategoriaMaquinarioController::editar/$1",["as"=>"categoria-maquinario.editar"]);
$routes->post("/categoria-maquinario/onSave","CategoriaMaquinarioController::onSave",["as"=>"categoria-maquinario.onSave"]);
$routes->get("/categoria-maquinario/onDelete/(:any)","CategoriaMaquinarioController::onDelete/$1",["as"=>"categoria-maquinario.onDelete"]);

$routes->get("/marca/listar","MarcaController::listar",["as"=>"marca.listar"]);
$routes->get("/marca/inserir","MarcaController::inserir",["as"=>"marca.inserir"]);
$routes->get("/marca/editar/(:any)","MarcaController::editar/$1",["as"=>"marca.editar"]);
$routes->post("/marca/onSave","MarcaController::onSave",["as"=>"marca.onSave"]);
$routes->get("/marca/onDelete/(:any)","MarcaController::onDelete/$1",["as"=>"marca.onDelete"]);


$routes->get('/',"Home::onLoginHome",["as"=>"home"]);

$routes->get("/login/tela-login","LoginController::login",["as"=>"login.tela"]);


