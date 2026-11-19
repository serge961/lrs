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
$routes->get('/notes', 'control/notes/index.php');
$routes->get('/note', 'control/notes/show.php');
$routes->delete('/note', 'control/notes/destroy.php');
$routes->post('/note', 'control/notes/store.php');
$routes->get('/notes/create', 'control/notes/create.php');
$routes->get('/contact', 'control/contact.php');