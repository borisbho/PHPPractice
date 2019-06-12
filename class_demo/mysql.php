<?php
    $dbhost = "localhost:3306";
    $dbuser = "root";
    $dbpass = "bhomysql123!"

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

    if(!$conn){
        die("Could not connect to db: ")
    }
    else{
        echo "Connected Like a Boss";
        
    }
?>

<br/>

<?php
    $sql = "CREATE DATABASE IHeartNeumont";

    if(mysqli_query($conn,$sql)){
        echo "Database created successfully";

    }
    else{
        echo "Error created database " . mysqli_error($conn);
    }
?>

<?php
    $dbhost = "localhost:3306";
    $dbuser = "root";
    $dbpass = "bhomysql123!";
    $dbname = "IHeartNeumont";

    $neu_db = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);



    if($neu_db->connect_error){
        die("Could not connect to db " .mysqli_error($conn));
    }

    $sql = "create table students(
        id INT auto_increment, name varchar(255) NOT NULL, primary key (id))";

    if(mysqli_query($conn,$sql)){
        echo "Table created successfully";
    }
    else{
        echo "Table not created " . mysqli_error($conn);
    }
    mysqli_close($neu_db);
?>

<br/>

<?php
    $sql = "INSERT INTO IHeartNeumont(name) VALUES ('Emily')";

    if(mysqli_query($neu_db, $sql)){
        echo "Inserted Emily into IHeartNeumont";
    }
    else{
        echo "Emily wont go in out table";
    }
?>

<?php
    $sql = "SELECT * from students";
    $result = mysqli_query($neu_db, $sql);

    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($reult)){
            echo var_dump($row)."<br/>";
        }
    }
    else{
        echo "student table is empty";
    }

?>