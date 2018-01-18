<?php
class UserController{
    public function actionRegister(){

        $name = '';
        $email = '';
        $password = '';

        $result = false;


        if (isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;


            if (!User::checkName($name)) {
                $errors[] = 'имя не должно быть короче 2-х символов';
           }


            if (!User::checkEmail($email)) {

                $errors[] = 'не правильный email';
            }


            if (!User::checkPassword($password)) {

                $errors[] = 'пароль не должен быть короче 6-ти символов';
            }

            if (User::checkEmailExists($email)){
               $errors[] = 'Такой email уже используется';
            }
            if ($errors == false) {
                $result = User::register($name, $email, $password);

            }

        }
        if (isset($_POST['submit']) AND $result == true) {
            $this->actionLogin();
            return true;
        }


        require_once (ROOT . '/views/user/register.php');
        return true;

    }

    public function actionLogin(){

        $email = '';
        $password = '';
        $permission = '';

        if (isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;



            if (!User::checkEmail($email)) {

                $errors[] = 'не правильный email';
            }

            if (!User::checkPassword($password)) {

                $errors[] = 'пароль не должен быть короче 6-ти символов';
            }
            $userId = USER::checkUserData($email, $password);

            if ($userId == false) {
            $errors[] = 'Неправильные даные для входа на сайт';
            }
            else{
                User::auth($userId);
                header("Location: /cabinet/");
            }
        }
        require_once (ROOT . '/views/user/login.php');
        return true;

    }

    public function actionLogout(){
        session_start();
        unset($_SESSION['user']);
        header("Location: /");
    }
}