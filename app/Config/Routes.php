<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get("/","HomeController::principal",["as"=>"home.principal"]);

$routes->get("/marca/listar","MarcaController::listar",["as"=>"marca.listar"]);
$routes->get("/marca/inserir","MarcaController::inserir",["as"=>"marca.inserir"]);
$routes->get("/marca/editar/(:num)","MarcaController::editar/$1");
$routes->post("/marca/onSave","MarcaController::onSave",["as"=>"marca.onSave"]);
$routes->get("/marca/onDelete/(:num)","MarcaController::onDelete/$1",["as"=>"marca.onDelete"]);

$routes->get("/maquinario/listar","MaquinarioController::listar",["as"=>"maquinario.listar"]);
$routes->get("/maquinario/inserir","MaquinarioController::inserir",["as"=>"maquinario.inserir"]);
$routes->get("/maquinario/editar/(:num)","MaquinarioController::editar/$1");
$routes->post("/maquinario/onSave","MaquinarioController::onSave",["as"=>"maquinario.onSave"]);
$routes->get("/maquinario/onDelete/(:num)","MaquinarioController::onDelete/$1",["as"=>"maquinario.onDelete/"]);

$routes->get("/modelo/listar","ModeloController::listar",["as"=>"modelo.listar"]);
$routes->get("/modelo/inserir","ModeloController::inserir",["as"=>"modelo.inserir"]);
$routes->get("/modelo/editar/(:num)","ModeloController::editar/$1");
$routes->post("/modelo/onSave","ModeloController::onSave",["as"=>"modelo.onSave"]);
$routes->get("/modelo/onDelete/(:num)","ModeloController::onDelete/$1");

