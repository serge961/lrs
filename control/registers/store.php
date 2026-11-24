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

    if(!Validate::string($password, 7, 255)){
        $errors['password']= 'Password must be between 7 and 255';
    }


    if(!empty ($errors)) {
        view("/registers/create.view.php",[
            'heading'=>'Create Note!',
            'errors'=>$errors
        ]);
    }


    $user = App::resolve(Database::class) ->query('SELECT * FROM users WHERE email = :email', ['email' => $email])->find();
   
    if($user){
        header("Location: /");
        exit();
    }else{

        $result = App::resolve(Database:: class)-> query ('INSERT INTO users(email, password) VALUES(:email, :password)',[
            'email' => $email, 
            'password' => password_hash($password, PASSWORD_BCRYPT),
            ]);

        login($user);

    }


    