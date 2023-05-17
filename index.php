<?php
include_once __DIR__."/models/Computer.php";
include_once __DIR__."/models/Desktop.php";
include_once __DIR__."/models/Laptop.php";

$asus = new Desktop('ASUS PRIME B550-PLUS','750W','AMD Ryzen 7 5800X','16GB','1TB','GTX 4070ti','Phanteks 400p','logitech','LG 24ML60SP Monitor 24','Razer',2,'Intel Wifi');
$lenovo = new Laptop('Intel','i7 1365g','16gb','512gb','Iris XE','15.6','40wh', 'lenovo');

var_dump($asus);

var_dump($lenovo);



