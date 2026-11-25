<?php 

use Core\Authenticator;
use Http\Forms\LoginForm;

    $email = $_POST['email'];
    $password=$_POST['password'];

    $login = new LoginForm();
  

    if($login->validate($email, $password)){
         
        if((new Authenticator)-> attempt($email, $password)){
        
            redirect('/');

        }

        $login -> error('email', 'Invalid email or password');
    }
           view("/session/create.view.php",
        ['heading'=>'Log In',
        'errors'=>$login->errors()]);

    


   
