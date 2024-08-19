<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


 $routes->get("/login/tela-login","LoginController::login",["as"=>"login.tela"]);
 $routes->post("/login/onLogin","LoginController::onLogin",["as"=>"login.onLogin"]);
 $routes->get("/login/onLogout","LoginController::onLogout",["as"=>"login.onLogout"]);

$routes->get("/usuario/listar","UsuarioController::listar",["as"=>"usuario.listar"]);
$routes->get("/usuario/inserir","UsuarioController::inserir",["as"=>"usuario.inserir"]);
$routes->get("/usuario/editar/(:num)","UsuarioController::editar/$1",["as"=>"usuario.editar"]);
$routes->post("/usuario/onSave","UsuarioController::onSave",["as"=>"usuario.onSave"]);
$routes->get("/usuario/onDelete/(:num)","UsuarioController::onDelete/$1",["as"=>"usuario.onDelete"]);


$routes->get("/categoria-servico/listar","CategoriaServicoController::listar",["as"=>"categoria-servico.listar","filter"=>"auth"]);
$routes->get("/categoria-servico/inserir","CategoriaServicoController::inserir",["as"=>"categoria-servico.inserir","filter"=>"auth"]);
$routes->get("/categoria-servico/editar/(:num)","CategoriaServicoController::editar/$1",["as"=>"categoria-servico.editar","filter"=>"auth"]);
$routes->post("/categoria-servico/onSave","CategoriaServicoController::onSave",["as"=>"categoria-servico.onSave","filter"=>"auth"]);
$routes->get("/categoria-servico/onDelete/(:num)","CategoriaServicoController::onDelete/$1",["as"=>"categoria-servico.onDelete","filter"=>"auth"]);


$routes->get("/estado/listar","EstadoController::listar",["as"=>"estado.listar"]);
$routes->get("/estado/inserir","EstadoController::inserir",["as"=>"estado.inserir"]);
$routes->get("/estado/editar/(:any)","EstadoController::editar/$1",["as"=>"estado.editar/$1"]);
$routes->post("/estado/onSave","EstadoController::onSave",["as"=>"estado.onSave"]);
$routes->get("/estado/onDelete/(:any)","EstadoController::onDelete/$1",["as"=>"estado.onDelete"]);

$routes->get("/categoria-peca/listar","CategoriaPecaController::listar",["as"=>"categoria-peca.listar","filter"=>"auth"]);
$routes->get("/categoria-peca/inserir","CategoriaPecaController::inserir",["as"=>"categoria-peca.inserir","filter"=>"auth"]);
$routes->get("/categoria-peca/editar/(:any)","CategoriaPecaController::editar/$1",["as"=>"categoria-peca.editar","filter"=>"auth"]);
$routes->post("/categoria-peca/onSave","CategoriaPecaController::onSave",["as"=>"categoria-peca.onSave"]);
$routes->get("/categoria-peca/onDelete/(:any)","CategoriaPecaController::onDelete/$1",["as"=>"categoria-peca.onDelete","filter"=>"auth"]);

$routes->get("/categoria-maquinario/listar","CategoriaMaquinarioController::listar",["as"=>"categoria-maquinario.listar","filter"=>"auth"]);
$routes->get("/categoria-maquinario/inserir","CategoriaMaquinarioController::inserir",["as"=>"categoria-maquinario.inserir","filter"=>"auth"]);
$routes->get("/categoria-maquinario/editar/(:any)","CategoriaMaquinarioController::editar/$1",["as"=>"categoria-maquinario.editar","filter"=>"auth"]);
$routes->post("/categoria-maquinario/onSave","CategoriaMaquinarioController::onSave",["as"=>"categoria-maquinario.onSave","filter"=>"auth"]);
$routes->get("/categoria-maquinario/onDelete/(:any)","CategoriaMaquinarioController::onDelete/$1",["as"=>"categoria-maquinario.onDelete","filter"=>"auth"]);

$routes->get("/marca/listar","MarcaController::listar",["as"=>"marca.listar","filter"=>"auth"]);
$routes->get("/marca/inserir","MarcaController::inserir",["as"=>"marca.inserir","filter"=>"auth"]);
$routes->get("/marca/editar/(:any)","MarcaController::editar/$1",["as"=>"marca.editar","filter"=>"auth"]);
$routes->post("/marca/onSave","MarcaController::onSave",["as"=>"marca.onSave","filter"=>"auth"]);
$routes->get("/marca/onDelete/(:any)","MarcaController::onDelete/$1",["as"=>"marca.onDelete","filter"=>"auth"]);


$routes->get('/',"Home::home",["as"=>"home"]);
