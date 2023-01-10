<?php
// Include the database configuration file  
require("../shared/inc/db.inc.php"); 

$Employee_ID = $_SESSION['Employee_ID'];
$selectedyear = 2023;
$targetrole = $_POST['targetrole'];
$actions = $_POST['actions']; 

if(count($_POST) > 0)
    if (!strlen($_POST['targetrole']) > 0
    || !strlen($_POST['actions']) > 0
    ) {
        echo "You did not complete the form";
        echo "Not saved";
    }else{

        $sql = "INSERT targetrole
        (targetrole, actions, selectedyear, Employee_ID)
        VALUES (:targetrole, :actions, :selectedyear, :targetStatus, :targetOrigin, :targetDate, :Employee_ID)";

        $query = $pdo->prepare($sql);

        $query->execute([
            'targetrole'=> $targetrole,
            'actions' => $actions, 
            'selectedyear' => $selectedyear,
            'Employee_ID' => $Employee_ID          
            ]);

            echo "Successfully saved";

        }

                    
?>
