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
    return view("/notes/edit.view.php",[
       'heading'=>'Update Note!',
       'errors'=>$errors,
       'id'=> $_POST['id'],
       'note'=>$_POST['note']
       ]);
}

$db->query("UPDATE notes SET body = :body WHERE id = :id", 
[
    'body'=>$_POST['note'],
    'id' => $_POST['id']
]);

header('location: /notes');
exit();