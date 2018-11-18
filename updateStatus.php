<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Status</title>
</head>
<body>
<?php
require_once ("Facade.php");
require_once ("config/config.php");
$name = $_POST["name"];

$facade = new Facade();
$result = $facade->getFromName($name);


?>
<form action="Update.php" method="post">
    AZIENDA: <input type="text" name="firmName" value=<?php echo $result[0]->getFirm()->getName();?>><br>
    IMPORTANZA:<input type="text" name="importance"value=<?php echo $result[0]->getFirm()->getImportance();?>><br>
    STATO:<input type="text" list="types" name="type"value=<?php echo $result[0]->getTypes()->last()->getType();?>>
    <datalist id="types">
        <?php foreach(arrayTypes as $type){?>
        <option value=<?php echo $type;?>>
            <?php } ?>
    </datalist>
    </datalist>
<br>
    SALARY:<input type="text" list ="salaries" name="salary"value=<?php echo $result[0]->getSalary();?>>
    <datalist id="salaries">
        <option value="UNKNOWN">
        <option value="20K-30K">
        <option value="25K-35K">
        <option value="30K-40K">
        <option value="35K-45K">
    </datalist>
    </datalist>
    <br>

    FEEDBACK:<input type="text" name="feedback"value=<?php echo $result[0]->getFeedback();?>><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>