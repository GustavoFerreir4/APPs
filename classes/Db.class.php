<?php

class Db{
    #DataBase connection info:
    private $host = "localhost";
    private $name = "techfinder";
    private $user = "gustadev";
    private $password = "Gust4Fer1106";
    public $pdo;

    #methods
    protected function db(){
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->name;
        $this->pdo = new PDO($dsn, $this->user, $this->password);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $this->pdo;
    }

}
