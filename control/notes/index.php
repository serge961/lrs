<?php
use Core\Database;
use Core\App;

/* $config = require base_path('config.php');
$db=new Database($config['database']);
 */

$db = App::resolve(Database::class);

$notes=$db->query("SELECT * FROM notes WHERE id >= 1",[])->get();


view("notes/index.view.php",[
    'heading'=>"My Notes!",
    'notes'=>$notes
    ]);