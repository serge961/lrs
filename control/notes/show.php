<?php
use Core\Database;
use Core\App;


$_SESSION['lastname'] = 'Orlov';
$db = App::resolve(Database::class);

$curentUserId=1;


$note=$db->query("SELECT * FROM notes WHERE id = :id",['id'=>$_GET["id"]])->findOrFail();



authorize($note['user_id'] === $curentUserId);


view("/notes/show.view.php",[
'heading' => "My Note",    
'note'=>$note
]);