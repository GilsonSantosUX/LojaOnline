<?php
include_once ('app/Controller/Controller.php');
include_once ('app/Model/User.php');
include_once ('app/Controller/Auth.php');

class Login extends Controller{

    public function login() {
        $this->view("Login");
    }

    public function registerUser(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            Auth::resetSessionNotification();
            $name       = $_POST['name'];
            $email      = $_POST['email'];
            $password   = $_POST['password'];
            $password1  = $_POST['password1'];

            if(!isset($name) && !isset($email) && !isset($password) && !isset($password1)){
                $this->view("Login");
                die();
            }else if($password != $password1){
                $this->view("Login");
                $_SESSION['notification-register-pass-err'] = true;
                die();
            }

            $user = new User($name,$email,$password);

            $db = Database::getConnection();
            $equals = $user->equalsUser($user->getEmail());

            if($equals){
                $this->view("Login");
                $_SESSION['notification-register-err'] = true;
                die();
            }

            $query = $db->prepare('INSERT INTO User(name,email,password) VALUES(:name,:email,:password)');
            $query->bindValue(':name',$user->getName());
            $query->bindValue(':email',$user->getEmail());
            $query->bindValue(':password',$user->getPassword());
            $query->execute();
            $_SESSION['notification-register'] = true;
            $this->view("Login");
        }
    }

}

?>