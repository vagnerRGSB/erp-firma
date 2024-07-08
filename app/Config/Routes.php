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

$routes->get("/cidade/listar","CidadeController::listar",["as"=>"cidade.listar"]);
$routes->get("/cidade/inserir","CidadeController::inserir",["as"=>"cidade.inserir"]);
$routes->get("/cidade/editar/(:any)","CidadeController::editar/$1",["as"=>"cidade.editar"]);


$routes->get('/',"Home::onLoginHome",["as"=>"home"]);
$routes->get("/home/login", "Home::pageLogin",["as"=>"pagLogin"]);

