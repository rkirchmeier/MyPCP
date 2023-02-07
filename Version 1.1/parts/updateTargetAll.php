<?php
// Include the database configuration file  
require("../shared/inc/db.inc.php"); 

$Employee_ID = 1;

$stmt = $pdo->prepare ("SELECT * FROM personaltarget WHERE `Employee_ID` = '$Employee_ID'");
$stmt -> execute();
$targets = $stmt->fetchAll(); 

foreach ($targets as $target) {
    $target_ID = $target['Target_ID'];
    $targetYear = $_POST['targetYear'];
    $targetDescription = $_POST['targetDescription'];
    $targetArea = $_POST['targetArea'];
    $targetStatus = $_POST['targetStatus'];
    $targetOrigin = $_POST['targetOrigin'];
    $targetDate = $_POST['targetDate'];

    $sql = "UPDATE `mypcp`.`personaltarget` SET 
    `targetYear`='$targetYear',
    `targetDescription`='$targetDescription',
    `targetArea`='$targetArea',
    `targetStatus`='$targetStatus',
    `targetOrigin`='$targetOrigin',
    `targetDate`='$targetDate'

    WHERE `Employee_ID`='$Employee_ID' AND `Target_ID`='$target_ID'";

    $stmt = $pdo->prepare($sql);

    $stmt->execute();

}

//header("Location: ./mgmt/mgmt_personalTargets.php"); 
                    
?>