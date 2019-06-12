<?php
    include_once "./Models/Students.php"; //include or require ?
    include_once "./Repos/StudentRepo.php"; //relative path might not be a good idea here, why?  

    //could be more interesting
    class DatabaseException extends Exception { }
    
    class Database {
        
        private $conn;

        public function __construct($dbhost="localhost:3306",$dbuser="webappuser",
            $dbpass="fahimIsAwesome88", $dbname="IHeartNeumont") {
            
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

    
    //useful to add procedural code here for testing on-the-fly

    //$d = new Database("localhost:3306","webappuser","fahimIsAwesome88","IHeartNeumont");
?>


