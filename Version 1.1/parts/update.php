<?php
// Include the database configuration file  
require("../shared/inc/db.inc.php"); 

$Employee_ID = 1; //from where can I get the Id?
$FirstName = $_POST['FirstName'];
$MiddleName = $_POST['MiddleName']; 
$FamilyName = $_POST['FamilyName'];
$Birthdate = $_POST['Birthdate']; 
$Street = $_POST['Street'];
$PLZ = $_POST['PLZ']; 
$Place = $_POST['Place']; 
$Canton = $_POST['Canton']; 
$Country = $_POST['Country']; 
$CivilStatus = $_POST['CivilStatus']; 
$PartnerWorkingStatus = $_POST['PartnerWorkingStatus']; 
$Childes = $_POST['Childes']; 
$Child1 = $_POST['Child1']; 
$Child1Year = $_POST['Child1Year']; 
$Child2 = $_POST['Child2']; 
$Child2Year = $_POST['Child2Year']; 
$Child3 = $_POST['Child3']; 
$Child3Year = $_POST['Child3Year']; 
$Child4 = $_POST['Child4']; 
$Child4Year = $_POST['Child4Year'];


if(count($_POST) > 0)
    if (!strlen($_POST['FirstName']) > 0
    || !strlen($_POST['FamilyName']) > 0
    || !strlen($_POST['Birthdate']) > 0
    || !strlen($_POST['Street']) > 0
    || !strlen($_POST['PLZ']) > 0
    || !strlen($_POST['Place']) > 0
    || !strlen($_POST['Country']) > 0
    || !strlen($_POST['CivilStatus']) > 0
    || !strlen($_POST['Childes']) > 0
    ) {
        echo "You did not complete the form";
        echo "Not saved";
    }
    elseif(isset ($Employee_ID)) {
        
        $sql = "UPDATE `mypcp`.`employee` SET 

        `FirstName`='$FirstName', 
        `MiddleName`='$MiddleName',
        `FamilyName`='$FamilyName', 
        `Birthdate`='$Birthdate', 
        `Street`='$Street',
        `PLZ`='$PLZ', 
        `Place`='$Place', 
        `Canton`='$Canton',
        `Country`='$Country', 
        `CivilStatus`='$CivilStatus', 
        `PartnerWorkingStatus`='$PartnerWorkingStatus',
        `Childes`='$Childes', 
        `Child1`='$Child1', 
        `Child1Year`='$Child1Year',
        `Child2`='$Child2', 
        `Child2Year`='$Child2Year',
        `Child3`='$Child3', 
        `Child3Year`='$Child3Year', 
        `Child4`='$Child4', 
        `Child4Year`='$Child4Year' 
        
        WHERE `Employee_ID`='1'";

        $stmt = $pdo->prepare($sql);

        $stmt->execute();

        echo "Successfully saved";
        
        }else{

        $sql = "INSERT employee  
        (FirstName, MiddleName, FamilyName, Birthdate, Street, PLZ, Place, Canton, Country, CivilStatus, PartnerWorkingStatus, Childes, Child1, Child1Year, Child2, Child2Year, Child3, Child3Year, Child4, Child4Year)
        VALUES (:FirstName, :MiddleName, :FamilyName, :Birthdate, :Street, :PLZ, :Place, :Canton, :Country, :CivilStatus, :PartnerWorkingStatus, :Childes, :Child1, :Child1Year, :Child2, :Child2Year, :Child3, :Child3Year, :Child4, :Child4Year)";

        $query = $pdo->prepare($sql);

        $query->execute([
            'FirstName' => $FirstName, 
            'MiddleName' => $MiddleName,
            'FamilyName' => $FamilyName, 
            'Birthdate'=> $Birthdate, 
            'Street'=> $Street, 
            'PLZ'=> $PLZ, 
            'Place'=> $Place, 
            'Canton'=> $Canton, 
            'Country'=> $Country, 
            'CivilStatus'=> $CivilStatus, 
            'PartnerWorkingStatus'=> $PartnerWorkingStatus, 
            'Childes'=> $Childes, 
            'Child1'=> $Child1, 
            'Child1Year' => $Child1Year, 
            'Child2'=> $Child2, 
            'Child2Year'=> $Child2Year,
            'Child3'=> $Child3,
            'Child3Year'=> $Child3Year,
            'Child4'=> $Child4,
            'Child4Year'=> $Child4Year
            
            ]);

            echo "Successfully inserted";

        }
                    
header("Location: ../index.php"); 

?>
