<?php
    require "/Model/Stocks.php";
    require "./Repos/StockRepo.php";

    if(isset($_POST['submit'])){
        $stockrepo = new StockRepo();

        $sc = $_POST['stockcompany'];
        $st = $_POST['stockticker'];
        $sp = $_POST['stockprice'];
        $se = $_POST['stockeps'];
    $link = mysqli_connect("127.0.0.1","webappuser","borisho","webdb");       
    $sql = "INSERT INTO stocks_table VALUES ('','$sc','$st','$sp','$se')"; 

     if(mysqli_query($link,$sql)){
            echo "New Record Added";        
         } 
    }       
?>
<br>
<br>
 
<form method="post">
    	<label for="stock_company">Stock Company Name</label>
    	<input type="text" name="stockcompany" id="stockcompany">
        <br>
    	<label for="stock_ticker">Stock Ticker</label>
    	<input type="text" name="stockticker" id="stockticker">
        <br>
    	<label for="stock_price">Stock Price</label>
        <input type="text" name="stockprice" id="stockprice">
        <br>
        <label for="stock_eps">Stock EPS</label>
        <input type="text" name="stockeps" id="stockeps">
        <br>
        <input type="submit" name="submit" value="ADD STOCK"/>
    </form>

<a href="index.php">Back to home</a>
      
<?php include "footer.php"; ?>