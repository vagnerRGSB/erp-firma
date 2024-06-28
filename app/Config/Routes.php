<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/',"Home::index",["as"=>"master"]);
$routes->get("/home/login", "Home::login",["as"=>"login"]);

$routes->get("/categorias-usuarios/list","CategoriaUsuarioController::list",["as"=>"categoria-usuario.list"]);
$routes->get("/categorias-usuarios/insert","CategoriaUsuarioController::formInsert",["as"=>"categoria-usuario.insert"]);
$routes->get("/categorias-usuarios/update","CategoriaUsuarioController::formUpdate",["as"=>"categoria-usuario.update"]);

$routes->get("/usuarios/list","UsuarioController::list",["as"=>"usuario.list"]);
$routes->get("/usuarios/insert","UsuarioController::formInsert",["as"=>"usuario.insert"]);
$routes->get("/usuarios/update","UsuarioController::formUpdate",["as"=>"usuario.update"]);

$routes->get("/clientes/list","ClienteController::list",["as"=>"cliente.list"]);
$routes->get("/clientes/insert","ClienteController::formInsert",["as"=>"cliente.insert"]);
$routes->get("/clientes/update","ClienteController::formUpdate",["as"=>"cliente.update"]);
