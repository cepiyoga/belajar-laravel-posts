<?php 

require_once 'config.php';

class Database {
    private $host = HOST;
    private $user = USER;
    private $pass = PASS;
    private $db_name = DBNAME;


    private $dbh;
    private $stmt;

    public function __construct()
    {

        //Setup PDO DNS.
            //$pdo_DNS = "sqlsrv:Server=" . $this->host . ";Database=" . $this->db_name;

            //MySQL
             $pdo_DNS = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;

            //Setup PDO Options.
            $option = [
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];

            //Establish DB Connection.
            try
            {
            $this->dbh = new PDO($pdo_DNS, $this->user, $this->pass, $option);
            }
            catch (PDOException $e)
            {
                die($e->getMessage());
            }
    }
    
    //1. Langkah pertama PREPARE :Query
    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    //2. Langkah kedua BIND if Any
    public function bind($param, $value, $type = null)
    {
        if( is_null($type) ) {
            switch( true ) {
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    //3. Langkah 3 EXECUTE

    public function execute()
    {
        $this->stmt->execute();
    }

    //CONTOH PROSES

    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount()
    {
        return $this->stmt->rowCount();
    }

    public function executeRowCount(){
        $this->execute();
        return $this->stmt->rowCount();
    }



}