<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');
$routes->get('producto', 'Home::producto');
$routes->get('blog', 'Home::blog');


/*rutas del Registro de Usuarios */
$routes->get('/registro', 'usuario_controller::create');
$routes->post('/enviar-form', 'usuario_controller::formValidation');

/*rutas del Login */
$routes->get('/login', 'login_controller::index');
$routes->post('/enviarlogin', 'login_controller::auth');
$routes->get('/panel', 'Panel_controller::index',['filter'=> 'auth']);
$routes->get('/logout', 'login_controller::logout');


