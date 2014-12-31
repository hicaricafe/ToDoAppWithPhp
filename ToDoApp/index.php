<?php

require_once('config.php');
require_once('function.php');

//DBに接続

$dbh = connectDb();

$tasks = array();

$sql = "select * from tasks where type != 'deleted' order by seq";
foreach ($dbh->query($sql) as $row){
	array_push($tasks, $row);
}

var_dump($tasks);

