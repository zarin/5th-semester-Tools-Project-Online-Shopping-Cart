<?php
include 'config.php';

$total_price=0;
$allitems='';
$items=array();

$sql="SELECT CONCAT(PName,'(','PTotal',')') AS PTotal,c
?>