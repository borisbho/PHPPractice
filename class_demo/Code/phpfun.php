<?php include('./header_include.php') ?>

<?php
echo $_SERVER['HTTP_USER_AGENT'];
?>

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'Edge') !== FALSE) {
    echo "Why are you using Internet Explorer ? What's wrong with you ? <br />";
}
?> 

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'Edge') !== FALSE) {
?>
<h3>strpos() must have returned non-false</h3>
<p>You are using Internet Explorer</p>
<?php
} else {
?>
<h3>strpos() must have returned false</h3>
<p>You are not using Internet Explorer</p>
<?php
}
?> 

<?php
$rtn = strpos($_SERVER['HTTP_USER_AGENT'],'Edge');
var_dump($rtn);
echo " is strpos(...,'Edge')";
?>

<form action="action.php" method="post">
 <p>Your name: <input type="text" name="name" /></p>
 <p>Your age: <input type="text" name="age" /></p>
 <p><input type="submit" /></p>
</form>

<?php
$a = 1;
$b = 1.5;
$c = $a + $b;
echo $c;
?>

<?php
$a = 1;
var_dump($a);
$b = 1.5;
var_dump($b);
$c = "I Love PHP";
var_dump($c);
$d = true;
var_dump($d); 
?>