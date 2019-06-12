<?php
include "./idatabase.php";
    class DatabaseException extends Exception { }
    
    class Database implements idatabase {
        
        private $conn;

        public function __construct($dbhost,$dbuser,$dbpass,$dbname) {
            
            $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        
            if(!$this->conn) {
                throw new DatabaseException("Could not connect to db: " . mysqli_error());
            }  
        }


        public function getConn() : mysqli {
            return $this->conn;
        }

        public function getStudents() : mysqli_result {
            return $this->conn->query("select * from students");
        }

        public function close() {
            mysqli_close($this->conn);
        }
    }


    $d = new Database("localhost:3306","webappuser","fahimIsAwesome88","IHeartNeumont");
?>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
        </tr>
    </thead>
    <tbody>
<?php foreach($d->getStudents() as $student): ?>
    <tr>
        <td><?=$student["id"]?></td>
        <td><?=$student["name"]?></td>
    </tr>
<?php endforeach; ?>

<?php
$d->close();
