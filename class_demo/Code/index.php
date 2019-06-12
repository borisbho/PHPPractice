<?php
    echo 'Boris is the best'." and he's awesome too";
?>
<br />
<?php
    echo $_SERVER['HTTP_USER_AGENT'];
?>

<?php
if(strpos($_SERVER['HTTP_USER_AGENT'], 'Edge') !==FALSE){
 ?>
    <h3>strpos() was not false</h3>
    <p>You are using IE like a dummy</p>
<?php
}
?>

<?php
    $rtn = strpos($_SERVER['HTTP_USER_AGENT'], 'Edge');
    var_dump($rtn)
?>

