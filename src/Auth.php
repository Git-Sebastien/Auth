<?php 
namespace App;

use \PDO;
use App\PDOconnect as BDD;


class Auth{

    public static function login($username ='',$password ='') 
    {
         //Connnection a la BDD
        $pdo = BDD::PDOconnect();

        $query = $pdo->prepare('SELECT username, password FROM users WHERE username = :username ');
        $query->execute(["username"=> $username]);
        $query->setFetchMode(PDO::FETCH_OBJ);
        $user = $query->fetch();

        if($user === false ){
            return null;
        }   

        if($username === $user->username && password_verify($password,$user->password)){
            session_start();
            $_SESSION['auth'] = $user->username;
            header('Location:/index.php?login='.$user->username.'');
            
        }
    }
}