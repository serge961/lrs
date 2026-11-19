<?php
use Core\Database;
use Core\Validate;
use Core\App;

$db = App::resolve(Database::class);

$heading = "Create Note!";
 $errors=[];


if(! Validate::string( $_POST ["note"], 1, 1000)){

    $errors['note'] = "Длина значения поля должна быть в диапазоне от 1 до 1000 символов";
};

if(! empty($errors)){
    return view("/notes/create.view.php",[
       'heading'=>'Create Note!',
       'errors'=>$errors
       ]);
}

$db->query("INSERT INTO notes(body, user_id) VALUES(:body, :user_id)", 
[
    'body'=>$_POST["note"],
    'user_id' => 1
]);

header('location: /notes');
exit();