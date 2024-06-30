<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/',"Home::homeMaster",["as"=>"master"]);
$routes->get("/home/login", "Home::login",["as"=>"login"]);

$routes->get("/categorias-usuarios/list","CategoriaUsuarioController::list",["as"=>"categoria-usuario.list"]);
$routes->get("/categorias-usuarios/insert","CategoriaUsuarioController::formInsert",["as"=>"categoria-usuario.insert"]);
$routes->get("/categorias-usuarios/update","CategoriaUsuarioController::formUpdate",["as"=>"categoria-usuario.update"]);

$routes->get("/usuarios/list","UsuarioController::list",["as"=>"usuario.list"]);
$routes->get("/usuarios/insert","UsuarioController::formInsert",["as"=>"usuario.insert"]);
$routes->post("/usuarios/update/(:any)","UsuarioController::formUpdate/$1",["as"=>"usuario.update"]);
$routes->post("/usuarios/onSave","UsuarioController::onSave",["as"=>"usuario.onSave"]);
$routes->post("/usuarios/onDelete/(:any)","UsuarioCOntroller::onDelete/$1",["as"=>"usuario.onDelete"]);

$routes->get("/clientes/list","ClienteController::list",["as"=>"cliente.list"]);
$routes->post("/clientes/insert","ClienteController::formInsert",["as"=>"cliente.insert"]);
$routes->post("/clientes/update","ClienteController::formUpdate",["as"=>"cliente.update"]);
