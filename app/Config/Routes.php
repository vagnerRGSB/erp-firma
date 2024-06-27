<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get("/usuarios/list","UsuarioController::list",["as"=>"usuario.list"]);
$routes->post("/usuarios/formInsert","UsuarioController::formInsert",["as"=>"usuario.insert"]);
$routes->post("/usuarios/formUpdate","UsuarioController::formUpdate",["as"=>"usuario.update"]);
