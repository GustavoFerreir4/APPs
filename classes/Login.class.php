<?php

class Login extends Db{
    private $userid = null;
    private $password = null;

    public function __construct($userid, $password){
        $this->userid = $userid;
        $this->password = $password;
    }

    #methods
    public function findUser(){
        $stmt = $this->db();
        $stmt = $stmt->prepare("SELECT * FROM users WHERE 'name' = :uid or 'email' = :uid");
        $stmt->execute(['uid'=>$this->userid]);
        $result = $stmt->fetch();
        
        echo $result;
    }}  