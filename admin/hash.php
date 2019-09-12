<?php
$raw_psw = 'cs1234';

$password = hash('sha512',$raw_pwd);

echo "$password <br>";
echo 'length:'.strlen($password).'<hr>';

?>