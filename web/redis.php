<?php
use app\models\redis;
$redis=new Redis();
$result=$redis->connect('127.0.0.1','6379');
var_dump($result);//结果：bool(true)
?>