<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get("/estado/listar","EstadoController::listar",["as"=>"estado.listar"]);
$routes->get("/estado/inserir","EstadoController::inserir",["as"=>"estado.inserir"]);
$routes->get("/estado/editar/(:any)","EstadoController::editar/$1",["as"=>"estado.editar"]);
$routes->post("/estado/onSave","EstadoController::onSave",["as"=>"estado.onSave"]);


$routes->get('/',"Home::onLoginHome",["as"=>"home"]);
$routes->get("/home/login", "Home::pageLogin",["as"=>"pagLogin"]);

