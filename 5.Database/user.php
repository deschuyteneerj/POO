<?php
class User
{
    private $id,$username,$email,$password,$connected;

    function __construct($username, $password){
            $this->username = $username;
            $this->password = sha1($password);
    }

    static function addUSer($id,$username,$email,$password,$connected){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        } else {
            return "Please enter a correct email.";
        }

        if (filter_var($connected, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) !== null) {
            $connected = filter_var($connected, FILTER_SANITIZE_STRING);
        } else {
            return "This is not a boolean value.";
        }
        $connect = DataBase::connect("localhost", "database_exercise3", "root", "Password_1");
        $query = $connect->prepare("INSERT INTO users VALUES (:id,:username,:email,:password,:connected);");
        $query->execute(array(':id'=> NULL, ':username'=> $username, ':email'=> $email, ':password' => sha1($password), ':connected'=>$connected));
    }

    function loginUser(){
        $connect = DataBase::connect("localhost", "database_exercise3", "root", "Password_1");
        $check = $connect->query("SELECT * FROM users WHERE username = '".$this->username."' AND password = '".$this->password."';");
        if ($check != false) {
            while ($data=$check->fetch()){
                $this->id = $data['id'];
                $this->email = $data["email"];
                $this->$connected = $data["connected"];
            }
            session_start();
            $_SESSION["user"] = $this->$username;
            $_SESSION["password"] = sha1($this->$password);
            $this->connected = 1;
        }
    }

    function logoutUser(){
        unset($_SESSION);
        session_destroy();
        $this->connected = 0;
    }

    function updateUsername($newUsername){
        $connect = DataBase::connect("localhost", "database_exercise3", "root", "Password_1");
        $query = $connect->prepare("UPDATE users SET username= :username WHERE id= :id;");
        $query->execute(array(':username'=> $newUsername, ':id'=> $this->id));
        $this->username = $newUsername;
    }

    function updateEmail($newEmail){
        $connect = DataBase::connect("localhost", "database_exercise3", "root", "Password_1");
        $query = $connect->prepare("UPDATE users SET email= :email WHERE id= :id;");
        $query->execute(array(':email'=> $newEmail, ':id'=> $this->id));
        $this->email = $newEmail;
    }

    function deleteUser(){
        $connect = DataBase::connect("localhost", "database_exercise3", "root", "Password_1");
        $query = $connect->prepare("DELETE FROM users WHERE id=:id;");
        $query->execute(array(':id'=> $this->id));
    }
}
?>