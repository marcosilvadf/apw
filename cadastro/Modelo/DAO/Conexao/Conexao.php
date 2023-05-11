<?php

abstract class Conexao{
    private static $instance;

    /**
    ** @return PDO
    */

    public static function getInstance(){
        try{
            if(!isset(self::$instance)){
                self::$instance = new PDO('mysql:host=127.0.0.1;dbname=cadastro;charset=utf8', 'root', '');
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return self::$instance;
        }catch(PDOException $e){
           echo $e->getMessage();
        }
    }
}

// abstract class Conexao {

//     public static function getInstance() {
//         $dsn = 'mysql:host=localhost;dbname=cadastro';
//         $user = 'root';
//         $pass = '';
//         try {
//             $pdo = new PDO($dsn, $user, $pass);
//             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//             return $pdo;
//         } catch (PDOException $exc) {
//             echo $exc->getMessage();
//         }
//     }

// }