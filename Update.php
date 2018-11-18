<?php

require_once ("Facade.php");
require_once ("entities/Application.php");

$facade = new Facade();

$name = $_POST["firmName"];
$type = $_POST["type"];
$feedback = $_POST["feedback"];
$salary = $_POST["salary"];

$application = $facade->getFromName($name)[0];
$application->addType($type);
$application->setFeedback($feedback);
$application->setSalary($salary);

$facade->update($application);

header("Location:index.html");
