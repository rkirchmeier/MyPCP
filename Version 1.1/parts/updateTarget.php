<?php
// Include the database configuration file  
require("../shared/inc/db.inc.php"); 

$Employee_ID = $_SESSION['Employee_ID'];

$targetStatus = $_POST['targetStatus'];

$sql = "UPDATE `mypcp`.`personaltarget` SET 

`targetStatus`='$targetStatus'

WHERE `Employee_ID`='1'";

$stmt = $pdo->prepare($sql);

$stmt->execute();
                    
?>
