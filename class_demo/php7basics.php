<?php
    function sumNoType(...$ints){
        return array_sum($ints);
    }
    print(sumNoType(1,"3",4.1));
?>
<br />
<?php
    function sumInts(...$ints){
        return array_sum($ints);
    }
    print(sumInts(1,"3",4.1));
?>
<br/>
<?php
  function sumStrictInts(int ...$ints){
      return array_sum($ints);

  }  
  print(sumStrictInts(1,"3",4.9));
?>

<?php
    function returnIntValue(int $value): int{
        return $value;
    }
    print(returnIntValue(5));
?>

<br/>

<?php
     $get = true;
<form action="action.php" method="post>"
    <p>Your Name: <input type="text" name="name"/></p>
    <p>Your age: <input type="text" name="age"/></p>
    <p><input type="submit"/></p>
</form>
?>

<?php
    print(1 <=> 1); print("<br/>");
    print(1 <=> 2); print("<br/>");
    print<1 <=> 0);
    $a1 = array(1,2,3,5);
    $a2 = array(1,2,3,4);
    print($a1 <=> $a2); 
    $a3 = array("no1"=>1,"no2"=>2,"no3"=>3);
?>

<?php

?>