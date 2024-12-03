<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//Rutas al inicio - principal
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/inicio', 'Home::index');
$routes->get('/index', 'Home::index');
$routes->get('/principal', 'Home::index');

//Rutas al about - quienes somos
$routes->get('/about', 'About::index');
$routes->get('/quienes_somos', 'About::index');
$routes->get('/quienes-somos', 'About::index');
$routes->get('/nosotros', 'About::index');
$routes->get('/quienessomos', 'About::index');

//Rutas de informacion de contacto
$routes->get('/contact', 'Contacto::index');
$routes->get('/contacto', 'Contacto::index');
$routes->get('/contactar', 'Contacto::index');

//Rutas al términos y usos
$routes->get('/privacy_policy', 'Terminos::index');
$routes->get('/terms', 'Terminos::index');
$routes->get('/privacy', 'Terminos::index');
$routes->get('/terminos_y_usos', 'Terminos::index');
$routes->get('/terminos-y-usos', 'Terminos::index');
$routes->get('/terminos', 'Terminos::index');
$routes->get('/politica_de_privacidad', 'Terminos::index');
$routes->get('/privacidad', 'Terminos::index');

//Rutas al catálogo
$routes->get('/products', 'Catalogo::index');
$routes->get('/catalogo', 'Catalogo::index');
$routes->get('/productos', 'Catalogo::index');

//Rutas al apartado de consultas
$routes->get('/consultas', 'Consultas::index');