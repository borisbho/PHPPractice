<?php 
    $dbhost = "localhost:3306";
    $dbuser = "webappuser";
    $dbpass = "fahimIsAwesome88";
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass);

    if(!$conn) {
        die("Could not connect to db: " . mysqli_error());
    }
    echo "Connected Successfully";
?>
<br />
<?php
    $sql = "CREATE DATABASE firstDB";

    if(mysqli_query($conn,$sql)) {
        echo "Database created successfully";
    }
    else {
        echo "Error creating database " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>

<br />

<?php
    $dbhost = "localhost:3306";
    $dbuser = "webappuser";
    $dbpass = "fahimIsAwesome88";
    $dbname = "firstDB";
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if($conn->connect_error) {
        die("Could not connect to db: " . mysqli_error());
    }

    $sql = "create table myTable(
        id INT AUTO_INCREMENT, name varchar(255) NOT NULL, primary key(id))";

    if(mysqli_query($conn,$sql)){
        echo "Table Created Successfully";
    }
    else {
        echo "Table is not created successfully " . mysqli_error($conn);
    }
?>

<br />

<?php
    $sql = "INSERT INTO myTable(name) VALUES ('Fahim')";
    if(mysqli_query($conn,$sql)) {
        echo "Inserted new record";
    }
    else {
        echo "Failed to insert " . $sql . " with error " . mysqli_error($conn);
    }
?>

<?php
    $sql = "SELECT * from myTable";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo var_dump($row)."<br />";
        }
    }
    else {
        echo "myTable is empty";
    }
?>
<?php
   /* $sql = "DROP DATABASE firstDB";

    if(mysqli_query($conn,$sql)) {
        echo "Database dropped";
    }
    else {
        echo "Error dropping database " . mysqli_error($conn);
    }
    */
?>

<br />

<?php
    mysqli_close($conn);
?>

