<?php
/* 
return [
    '/' => 'index.php',
    '/about'=> 'about.php',
    '/notes'=> 'notes/index.php',
    '/note'=> 'notes/show.php',
    '/notes/create'=> 'notes/create.php',
    '/contact'=>'contact.php',
];
 */

$routes->get('/', 'index.php');
$routes->get('/about', 'about.php');

$routes->get('/notes', 'notes/index.php')->only('auth');
$routes->get('/note', 'notes/show.php')->only('auth');
$routes->delete('/note', 'notes/destroy.php')->only('auth');
$routes->post('/note', 'notes/store.php')->only('auth');

$routes->get('/notes/create', 'notes/create.php')->only('auth');
$routes->get('/notes/edit', 'notes/edit.php')->only('auth');
$routes->patch('/note', 'notes/update.php')->only('auth');

$routes->get('/contact', 'contact.php');

$routes->get('/register', 'registers/create.php')->only('guest');
$routes->post('/register','registers/store.php')->only('guest');

$routes->get('/login', 'session/create.php' )->only('guest');
$routes->post('/session', 'session/store.php' )->only('guest');
$routes->delete('/session', 'session/destroy.php' )->only('auth');