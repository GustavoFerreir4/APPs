<?php

class Login extends Db{
    private $userid = null;
    private $password = null;

    public function __construct($userid, $password){
        $this->userid = $userid;
        $this->password = $password;
    }

    #methods
    public function checkUser(){
        $pdo = $this->db();
        $result = $pdo->prepare('SELECT * FROM users WHERE name = ?');
        $result->execute([$this->userid]);
        $result = $result->fetch();
        
       return $result;
    }

    public function checkPassword(){
        $result = $this->checkUser();
        if($result){
            if($result['password'] == $this->password){
               return  true;
            }else{
                return false;
            }
        }else{
            return "";
        }

    }

}  
