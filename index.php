<?php 
include("class/DataDB.php");
include("class/DataCSV.php");

$d1 = new DataDB();
$d1->getData();
$d1->showData();

$d2 = new DataCSV();
$d2->getData();
$d2->showData();


