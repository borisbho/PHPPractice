<?php
    /**
     * None vs Strict Mode vs Coercive Mode
     *   
     */
?>

<?php
   // Strict mode
   function sumNoType(...$ints) {
      return array_sum($ints);
   }
   print(sumNoType(2, '3', 4.1));
?>

<?php
   // Strict mode
   // declare(strict_types=1);
   function sum(int ...$ints) {
      return array_sum($ints);
   }
   //print(sum(2, '3', 4.1));
?>

<?php
   // Coercive mode
   function sum2(int ...$ints) {
      return array_sum($ints);
   }
  // print(sum2(2, '3', 4.1));
?>


<?php
    /**
     * Define return value for function
     */
?>
<?php
   function returnIntValue(int $value): int {
      return $value;
   }
   print(returnIntValue(5));
?>

<?php
    /**
     * Null Coalescing Operator (??)
     */
?>
<?php
   // fetch the value of $_GET['user'] and returns 'not passed'
   // if username is not passed
   $username = $_GET['username'] ?? 'not passed';
   print($username);
   print("<br/>");

   // Equivalent code using ternary operator
   $username = isset($_GET['username']) ? $_GET['username'] : 'not passed';
   print($username);
   print("<br/>");
   // Chaining ?? operation
   $username = $_GET['username'] ?? $_POST['username'] ?? 'not passed';
   print($username);
?>


<?php
    /**
     * Spaceship Operator <=>
     */
?>
<?php
   //integer comparison
   print( 1 <=> 1);print("<br/>");
   print( 1 <=> 2);print("<br/>");
   print( 2 <=> 1);print("<br/>");
   print("<br/>");
   //float comparison
   print( 1.5 <=> 1.5);print("<br/>");
   print( 1.5 <=> 2.5);print("<br/>");
   print( 2.5 <=> 1.5);print("<br/>");
   print("<br/>");
   //string comparison
   print( "a" <=> "a");print("<br/>");
   print( "a" <=> "b");print("<br/>");
   print( "ab" <=> "ab");print("<br/>");

   //two types of arrays, index array and key/value pair
   //arrays are compared by index or keys
   //arrays are compared by size, if equal size then each value is compared by index, if values all equal then by keys; 
   $a1 = array("key1"=>"a","key2"=>"b","key3"=>"c");
   $a2 = array(1,4);
   $a3 = array(1,5);
   $a4 = array("key1"=>"a","key2"=>"b","key"=>"c");
   print ($a1 <=> $a4);print("<br/>");
?>

<?php
/**
 * Anonymous Classes
 */
?>
<?php
   interface Logger {
      public function log(string $msg);
   }

   class Application {
      private $logger;

      public function getLogger(): Logger {
         return $this->logger;
      }

      public function setLogger(Logger $logger) {
         $this->logger = $logger;
      }  
   }

   $app = new Application;
   $app->setLogger(new class implements Logger {
      public function log(string $msg) {
         print($msg);
      }
   });

   $app->getLogger()->log("My first Log Message");
?>


<?php
/**
 * Exception Handling
 */
?>
<?php
   class BadMaths {
      private $num = 10;

      public function divide(): string {
         try {
            $value = $this->num % 0;
            return $value;
         } catch (DivisionByZeroError $e) {
            return $e->getMessage();
         }
      }
   }

   $maths = new BadMaths();
   print($maths->divide());
?>

<br />
<?php
/**
 * PHP deprecated constructors with same name as class.  Must use __construct() instead
 */
?>

<?php
   class A {
      function A() {
         print('Style Constructor');
      }
   }

   class B {
    function __construct() {
       print('__construct Constructor');
    }
 }

   $A = new A();
   $B = new B();
?>


<?php
/**
 * Pulling data
 */
?>

<?php
include "./database.php";

$db = new JSONDatabase();
$fruits = $db->getData('fruits');
//$fruits = JSONDatabase::getDataStatic('fruits');
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<table class="table">
 <thead>
    <tr>
        <th>type</th>
        <th>color</th>
        <th>posionous</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($fruits as $fruit): ?>
    <tr>
        <td><?=$fruit["type"];?></td>
        <td><?php echo $fruit["color"]; ?></td>
        <td><?php echo $fruit["posionous"] ? "Yes":"No"; ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
