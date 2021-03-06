<?php
include_once ('app/Controller/Controller.php');
include_once ('app/Model/User.php');
include_once ('app/Controller/Auth.php');
include_once ('components/Notification/Notification.php');

class Login extends Controller{

    public function login() {
        $this->view("Login");
    }

    public function recover(){
        $emailRecover = $_POST['emailRecover'];
        $data = User::equalsUser($emailRecover);
        $message = '<html>
                        <head>
                        <title>Cartunings | Recuperação de senha</title>
                        </head>
                        <body>
                        <p>Acesse o link para recuperar sua senha!</p>
                        <a href="http://localhost:8888/recoverPass?email='.hash_hmac('ripemd160',$email,'secret').'" target="_blank">Recuperar senha</a>
                        </body>
                    </html>';
        $subject = "Recuperar senha!";
        $message = wordwrap($message, 70, "\r\n");
        $headers = array(
            'From' => $data['email'],
            'Reply-To' => "noreply@cartunings.com.br",
            'X-Mailer' => 'PHP/' . phpversion()
        );
        // http://phpbrasil.com/phorum/read.php?1,107532  /corrigir erro de envio SMTP
        mail($user,$subject, $message,$headers);
        header('Location: ../Login');
        hash('sha256',$email);
    }

    public function recoverPass(){
        $email  = $_GET['email'];
        // if(!isset($email)){ 
        //     header('Location: ../Login');
        //     die();
        // }
        
        $newPassword = $_POST['newpassword'];
        $newPasswordConfirmation = $_POST['newpasswordConfirmation'];

        $this->view('Recover');

        // $db = Database::getConnection();
        // $sql = $db->prepare('UPDATE User SET password = :password WHERE email = :email');

        // $sql->bindValue(':password',password_hash($newPassword,PASSWORD_BCRYPT));
        // $sql->bindValue(':email',$email);
        // $sql->execute();
       
    }

    public function registerUser(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name       = $_POST['name'];
            $email      = $_POST['email'];
            $password   = $_POST['password'];
            $password1  = $_POST['password1'];

            if(!isset($name) && !isset($email) && !isset($password) && !isset($password1)){
                $this->view("Login");
                die();
            }else if($password != $password1){
                $this->view("Login");
                Notification::View("Senha não são iguais!","key","--color-feedback-negative-4");
                die();
            }

            $user = new User($name,$email,$password);

            $db = Database::getConnection();
            $equals = $user->equalsUser($user->getEmail());

            if($equals){
                $this->view("Login");
                Notification::View("Usuário já cadastrado!","info","--color-feedback-negative-4");
                die();
            }

            $query = $db->prepare('INSERT INTO User(name,email,password) VALUES(:name,:email,:password)');
            $query->bindValue(':name',$user->getName());
            $query->bindValue(':email',$user->getEmail());
            $query->bindValue(':password',$user->getPassword());
            $query->execute();
            Notification::View("Usuário cadastrado com sucesso!","check","--color-feedback-positive-4");
            $this->view("Login");
        }
    }

}

?>