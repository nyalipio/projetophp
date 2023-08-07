<?php
require "//Conn.php";
require ".//produto.php";

$novo = new Product();
$res =  $novo->listarprodutodos();
foreach($res as $prod) {
    extract($prod);
?>

<div class="card-deck">
<div style="margin: 4px;" class= "card">
<img class="cadr-img-top" src= "<?php-echo"