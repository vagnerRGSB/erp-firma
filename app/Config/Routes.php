<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get("/estado/listar","EstadoController::listar",["as"=>"estado.listar"]);
$routes->get("/estado/inserir","EstadoController::inserir",["as"=>"estado.inserir"]);

$routes->get('/',"Home::onLoginHome",["as"=>"home"]);
$routes->get("/home/login", "Home::pageLogin",["as"=>"pagLogin"]);

