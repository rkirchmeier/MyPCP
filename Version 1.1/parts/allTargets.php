<?php 

require("../shared/inc/functions.inc.php"); 
require("../shared/inc/db.inc.php"); 

$Employee_ID = //need to add this later

$stmt = $pdo->prepare ("SELECT * FROM `Personaltarget`");
$stmt ->cexecute();
$data = $stmt->fetchAll();

ob_start();
require("./myPersonalTargets.php");
$content = ob_get_contents();
ob_end_clean();

?>

