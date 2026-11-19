<?php
use Core\Database;
use Core\App;

/* $config = require base_path('config.php');

$db=new Database($config['database']); */

$db = App::container() -> resolve(Database::class); 

$curentUserId=1;

$note = $db -> query ("SELECT * FROM notes WHERE id = :id",['id'=> $_POST['id']])->findOrFail();
authorize($note['user_id'] === $curentUserId);

$db->query("DELETE FROM notes WHERE id = :id", ['id' =>$note['id']]);
header("Location: /notes");
exit;


/* view("/notes/show.view.php",[
'heading' => "My Note",    
'note'=>$note
]); */