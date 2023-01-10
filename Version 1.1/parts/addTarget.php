<?php
// Include the database configuration file  
require("../shared/inc/db.inc.php"); 

$Employee_ID = 1; //from where can I get the Id?
$targetYear = 2023;
$targetDescription = $_POST['targetDescription'];
$targetArea = $_POST['targetArea']; 
$targetStatus = $_POST['targetStatus'];
$targetOrigin = $_POST['targetOrigin']; 
$targetDate = $_POST['targetDate'];

if(count($_POST) > 0)
    if (!strlen($_POST['targetDescription']) > 0
    || !strlen($_POST['targetArea']) > 0
    || !strlen($_POST['targetStatus']) > 0
    || !strlen($_POST['targetOrigin']) > 0
    || !strlen($_POST['targetDate']) > 0
    ) {
        echo "You did not complete the form";
        echo "Not saved";
    }else{

        $sql = "INSERT personaltarget
        (targetYear, targetDescription, targetArea, targetStatus, targetOrigin, targetDate, Employee_ID)
        VALUES (:targetYear, :targetDescription, :targetArea, :targetStatus, :targetOrigin, :targetDate, :Employee_ID)";

        $query = $pdo->prepare($sql);

        $query->execute([
            'targetYear'=> $targetYear,
            'targetDescription' => $targetDescription, 
            'targetArea' => $targetArea,
            'targetStatus' => $targetStatus, 
            'targetOrigin'=> $targetOrigin, 
            'targetDate'=> $targetDate, 
            'Employee_ID' => $Employee_ID          
            ]);

            header("Location: ./myPersonalTargets.php"); 

        }

                    
?>
