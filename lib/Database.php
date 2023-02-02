<?php

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh;
    private $error;
    private $stmt;


    public function __construct(){
        // Set DNS
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;

        //set options
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        // create connection to db
        try {
            $this->dbh = new PDO( $dsn, $this->user, $this->pass, $options );
        } catch( PDOException $e ){
            $this->error = $e->getMessage();

            echo $this->error;
        }
        
    }

    public function query( $query ){
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind( $param, $value, $type = NULL){
        
        if( is_null( $type ) ){

            switch( true ){
                case is_int ( $value ):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool ( $value ):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null ( $value ):
                    $type = PDO::PARAM_BOOL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue( $param, $value, $type);
    }

    public function execute(){
        return $this->stmt->execute();
    }

    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll( PDO::FETCH_OBJ );
    }

    public function single(){
        $this->execute();
        return $this->stmt->fetch( PDO::FETCH_OBJ );
    }

}