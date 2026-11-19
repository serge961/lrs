<?php

use Core\Database;
use Core\App;

$config = require base_path('config.php');

$db=App::resolve(Database::class);

$curentUserId=1;


$note=$db->query("SELECT * FROM notes WHERE id = :id",['id'=>$_GET["id"]])->findOrFail();



authorize($note['user_id'] === $curentUserId);


    view("/notes/edit.view.php",[
       'heading'=>'Edit Note!',
       'note' =>$note['body'],
       'id'=>$note['id'],
       'errors'=>[]
]);