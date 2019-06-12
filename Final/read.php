<?php
include "./Models/Stocks.php";
include "./Repos/StockRepo.php";
$stockrepo = new StockRepo();

if(isset($_POST['submit'])){
    $stock_id = $_POST['stockid'];
    $result2 = $stockrepo->getStockById($stock_id);
     echo $result2['stock_company']."<br />";
     echo $result2['stock_ticker']."<br />";
     echo $result2['stock_price']."<br />";
     echo $result2['stock_eps']."<br />";
}else{
    $result = $stockrepo->getStocks();
}
?>

<table>
    <thead>
        <tr>
            <th>Company</th>
            <th>Symbol</th>
            <th>Price</th>
            <th>EPS</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($result as $row) { ?>
        <tr>
            <td><?php echo $row['stock_company']; ?></td>
            <td><?php echo $row['stock_ticker']; ?></td>
            <td><?php echo $row['stock_price']; ?></td>
            <td><?php echo $row['stock_eps']; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<br>
<br>
<form method="post">
  <label for="id">Stock ID</label>
  <input type="text" id="stockid" name="stockid">
  <input type="submit" name="submit" value="View Results">
</form>

<a href="index.php">Back to Home</a>