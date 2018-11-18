<?php
require_once ("Facade.php");

$facade = new Facade();
$name = $_POST["firmName"];
$importance =intval($_POST["importance"]);
$location = $_POST["location"];
$salary =$_POST["salary"];

$facade->insertFirm($name,$importance,$location,$salary);

header("Location:InsertFirm.html");



