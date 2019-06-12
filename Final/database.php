<?php
    include_once "./Models/Stocks.php"; //include or require ?
    include_once "./Repos/StockRepo.php"; //relative path might not be a good idea here, why?  

    //could be more interesting
    class DatabaseException extends Exception { }
    
    class Database {
        
        private $conn;

        public function __construct($dbhost="127.0.0.1",$dbuser="webappuser",$dbpass="borisho",$dbname="webdb") {
            
            $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        
            if(!$this->conn) {
                throw new DatabaseException("Could not connect to db: " . mysqli_error());
            }  
        }

        //what if conn is null or broken ?
        public function getConn() : mysqli {
            return $this->conn;
        }

        public function close() {
            mysqli_close($this->conn);
        }
    }
 
?>


