<?php 

use Core\Database;
use Core\Validate;
use Core\App;

    $email = $_POST['email'];
    $password=$_POST['password'];

    $errors= [];

    if(!Validate::email($email)){
        $errors['email']='Invalid email';
    }


    if(!Validate::string($password)){
        $errors['password']= 'Пароль указан не верно';
    }




    $user = App::resolve(Database::class) ->query('SELECT * FROM users WHERE email = :email', ['email' => $email])->find();
   
    if(!$user){
        $errors['email'] .= 'Пользователь не найден';
    }else{
    
        if(!password_verify($password, $user['password'])){
            $errors['password'] = 'Пароль указан не верно';
            };
    };

    if(!empty ($errors)) {
        view("/session/create.view.php",[
            'heading'=>'Log In',
            'errors'=>$errors
        ]);
    };

    login($user);
