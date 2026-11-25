<?php
    namespace Http\Forms;
    use Core\Validate;

    class LoginForm {
        protected $errors;

        public function validate($email, $password) {

            if(!Validate::email($email)){
              $this->errors['email']='Invalid email';
            }

            if(!Validate::string($password, 7, 255)){
               $this->errors['password']= 'Password must be between 7 and 255';
             }

            return empty($this -> errors);
        }

        public function errors(){
            
            return $this->errors;
        }

        public function error($key, $message){
            $this->errors[$key] = $message;
        }


    }