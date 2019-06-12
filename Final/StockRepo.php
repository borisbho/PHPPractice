<?php 
    include_once "./database.php"; //include or require ?
    include_once "./Model/Stocks.php"; //relative path might not be a good idea here, why?  Hint: why is it ./ and not ../ ?

    class StockRepo {
         
         public function addStock($sc, $st,$sp,$se){
            $link = mysqli_connect("127.0.0.1","webappuser","borisho","webdb");
            $sc = $s->getStockCompany();
            $st = $s->getStockTicker();
            $sp = $s->getStockPrice();
            $se = $s->getStockEPS();
            $sql = "INSERT INTO stocks_table VALUES ('','$sc','$st','$sp','$se')"; 
   
             if(mysqli_query($link,$sql)){
            echo "New Record Added";        
            } 
         }

         public function getStockById($id) {
            $link = mysqli_connect("127.0.0.1", "webappuser", "borisho", "webdb");                 
            if($link) {
               $query = mysqli_query($link, "SELECT * FROM stocks_table WHERE id = $id");
               $result = mysqli_fetch_array($query);
             }
            else {
               echo "MySQL error :".mysqli_error();
            }
            return $result;     
         }

         public function getStocks() {
            $link = mysqli_connect("127.0.0.1", "webappuser", "borisho", "webdb");
            $stocks = array();
            if($link) {
               $query = mysqli_query($link, "SELECT * FROM stocks_table");
               while($array = mysqli_fetch_array($query)) {
                     array_push($stocks, $array);
                }
             }
            else {
               echo "MySQL error :".mysqli_error();
            }
            return $stocks;
         }
         
         public function updateById($id){
            $link = mysqli_connect("127.0.0.1", "webappuser", "borisho", "webdb");
            if($link){
                $query = mysqli_query("UPDATE stocks_table SET lastname='Doe' WHERE id=$id");
            }
         }
         
         public function deleteById($id){

         }
} 

  
?>
 