<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GetAll</title>
</head>
<body>
<?php
require_once ("Facade.php");

$facade = new Facade();
$results = $facade->getAll();


?>
<table border="2">
    <thead>
    <tr>
        <th>AZIENDA</th>
        <th>VOTO</th>
        <th>LOCATION</th>
        <th>DATA</th>
        <th>STATO</th>
        <th>SALARY</th>
        <th>FEEDBACK</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($results as $application){ ?>
        <tr>
            <td><?php echo $application->getFirm()->getName();?></td>
            <td><?php echo $application->getFirm()->getImportance();?></td>
            <td><?php echo $application->getFirm()->getLocation();?></td>
            <td><?php echo $application->getData()->format('d-m-Y');?></td>
            <td><?php echo $application->getTypes()->last()->getType();?></td>
            <td><?php echo $application->getSalary();?></td>
            <td><?php echo $application->getFeedback();?></td>
            <td><form action="updateStatus.php" method="post">
                    <input type="hidden" id="name" name="name" value=<?php echo $application->getFirm()->getName();?>>
                    <input type="submit" value="CHANGE">
                </form></td>
        </tr>
<?php }?>
    </tbody>
</table>
</body>
</html>