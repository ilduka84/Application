<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GetAll</title>
    <script src="sort.js"></script>
</head>
<body>
<?php
require_once ("Facade.php");

$facade = new Facade();
$results = $facade->getAll();


?>
<table id="myTable2" border="2">
    <thead>
    <tr>
        <th onclick="sortTable(0)">AZIENDA</th>
        <th onclick="sortTable(1)">VOTO</th>
        <th onclick="sortTable(2)">LOCATION</th>
        <th onclick="sortTable(3)">DATA</th>
        <th onclick="sortTable(4)">STATO</th>
        <th onclick="sortTable(5)">SALARY</th>
        <th onclick="sortTable(6)">FEEDBACK</th>
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
                    <input type="hidden" id="name" name="name" value="<?php echo( $application->getFirm()->getName());?>">
                    <input type="submit" value="CHANGE">
                </form></td>
        </tr>
<?php }?>
    </tbody>
</table>
</body>
</html>