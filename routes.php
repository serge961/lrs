<?php
/* 
return [
    '/' => 'control/index.php',
    '/about'=> 'control/about.php',
    '/notes'=> 'control/notes/index.php',
    '/note'=> 'control/notes/show.php',
    '/notes/create'=> 'control/notes/create.php',
    '/contact'=>'control/contact.php',
];
 */

$routes->get('/', 'control/index.php');
$routes->get('/about', 'control/about.php');

$routes->get('/notes', 'control/notes/index.php')->only('auth');
$routes->get('/note', 'control/notes/show.php')->only('auth');
$routes->delete('/note', 'control/notes/destroy.php')->only('auth');
$routes->post('/note', 'control/notes/store.php')->only('auth');

$routes->get('/notes/create', 'control/notes/create.php')->only('auth');
$routes->get('/notes/edit', 'control/notes/edit.php')->only('auth');
$routes->patch('/note', 'control/notes/update.php')->only('auth');

$routes->get('/contact', 'control/contact.php');

$routes->get('/register', 'control/registers/create.php')->only('guest');
$routes->post('/register','control/registers/store.php')->only('guest');

$routes->get('/login', 'control/session/create.php' )->only('guest');
$routes->post('/session', 'control/session/store.php' )->only('guest');
$routes->delete('/session', 'control/session/destroy.php' )->only('auth');