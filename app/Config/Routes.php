<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get("/estado/listar","EstadoController::listar",["as"=>"estado.listar"]);
$routes->get("/estado/inserir","EstadoController::inserir",["as"=>"estado.inserir"]);
$routes->get("/estado/editar/(:any)","EstadoController::editar/$1",["as"=>"estado.editar"]);
$routes->post("/estado/onSave","EstadoController::onSave",["as"=>"estado.onSave"]);
$routes->get("/estado/onDelete/(:any)","EstadoController::onDelete/$1",["as"=>"estado.onDelete"]);

$routes->get("/categoria-peca/listar","CategoriaPecaController::listar",["as"=>"categoria-peca.listar"]);
$routes->get("/categoria-peca/inserir","CategoriaPecaController::inserir",["as"=>"categoria-peca.inserir"]);
$routes->get("/categoria-peca/editar/(:any)","CategoriaPecaController::editar/$1",["as"=>"categoria-peca.editar"]);
$routes->post("/categoria-peca/onSave","CategoriaPecaController::onSave",["as"=>"categoria-peca.onSave"]);
$routes->get("/categoria-peca/onDelete/(:any)","CategoriaPecaController::onDelete/$1",["as"=>"categoria-peca.onDelete"]);


$routes->get('/',"Home::onLoginHome",["as"=>"home"]);
$routes->get("/home/login", "Home::pageLogin",["as"=>"pagLogin"]);

