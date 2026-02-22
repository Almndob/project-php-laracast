<?php
// connect into database ,and excute and query

class Database{

    public $connection;
    public $statement ;

    public function __construct($config, $username= 'root', $password = ''){
        //  $dsn = "mysql:host=localhost;port=3306;dbname=laracast;charset=utf8mb4";
        $dsn = 'mysql:' . http_build_query($config, '', ';');

         $this->connection = new PDO($dsn, $username, $password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
         ]);
    }

    public function query($query, $params = []){
   
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;//return the object itself PDO
    }

    public function find(){
        return $this->statement->fetch();
    }
    public function get(){
        return $this->statement->fetchAll();
        
    }

    public function findOrFail(){
        
        $result = $this->find();
         //happend when user need a note with id is not exists (Not Found 404)المورد غير موجود
        if(!$result){
            abbort();
        }
        return $result;
    }
}
