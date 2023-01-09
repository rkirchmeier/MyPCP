<?php require("./shared/inc/functions.inc.php"); ?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./src/css/styles.css">
    <title>MyCareer</title>
  </head>

  <?php

$dbname = "myPCP";
$user = "root";
$password = "root";
$dbhost = "CHBSLJME05TST";
// $dbhost = "127.0.0.1";

try {
  $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  ));
}
catch(PDOException $e) {
  die("Connection to database failed");
}

if(count($_POST) > 0)
    if (!strlen($_POST['targetDescription']) > 0
    || !strlen($_POST['targetArea']) > 0
    || !strlen($_POST['targetStatus']) > 0
    || !strlen($_POST['targetOrigin']) > 0
    || !strlen($_POST['targetDate']) > 0
    ) {
        echo "You did not complete the form";
        echo "Not saved";
    }
    else{
        $sql = "INSERT INTO Employee "
        ."(targetDescription, targetArea, targetStatus, targetOrigin, targetDate, employee_ID) VALUES "
        ."(:targetDescription, :targetArea, :targetStatus, :targetOrigin, :targetDate, :employee_ID)";

        $query = $pdo->prepare($sql);
        $query->bindParam(':targetDescription', $_POST['targetDescription'], PDO::PARAM_STR);
        $query->bindParam(':targetArea', $_POST['targetArea'], PDO::PARAM_STR);
		$query->bindParam(':targetStatus', $_POST['targetStatus'], PDO::PARAM_STR);
        $query->bindParam(':targetOrigin', $_POST['targetOrigin'], PDO::PARAM_STR);
        $query->bindParam(':targetDate', $_POST['targetDate'], PDO::PARAM_STR);
		//Hier muss noch die employee ID mitgegeben werden, von wo nehme ich diese?

        $query->execute();

        if ($pdo->lastInsertId()){
            echo "Successfully saved";
        }
    }

endif;

?>

  <body>
    <div id="page" class="">
      <?php require("./parts/navigation.php"); ?>
      <?php require("./parts/footer.php"); ?>

		<!-- Personal Targets -->

		<section id="PersonalTargetsBereich">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<header class="intro-container">
							<h1>My Personal targets</h1>
							<p>This space is to define your personal targets for the current year</p>
						</header>
					</div>
				</div>

				<div class="row">
					<div class="col-6">
						<button id="btn-typ-1" type="button" name="button">Add new personal Target</button><br><br>
					</div>
				</div>

				<div class="row" id="addNewItemRow">
					<div class="col-2" >
						<label for="targetDescription">TargetDescription:</label>
						<textarea id="targetDescription" class= "textarea" name="TargetDescription" rows="8" cols="80" placeholder="Your new Target"></textarea>
					</div>
		      <div class="col-1">
						<label for="targetArea">Target Area:</label><br>
						<select class="selectBox" name="targetArea" id="targetArea">
							<option value="Business Development">Business Development</option>
							<option value="Skills Development">Skills Development</option>
							<option value="Delivery Target">Delivery Target</option>
							<option value="Blogs_Posts_Webinars">Blog, Post or Webinars</option>
							<option value="Others">Others</option>
						</select>
					</div>
		      <div class="col-1">
						<label for="targetStatus">Target Status:</label><br>
						<select class="selectBox" name="targetStatus" id="targetStatus">
							<option value="New">New</option>
							<option value="In Progress">In Progress</option>
							<option value="Complete">Complete</option>
							<option value="Delayed">Delayed</option>
							<option value="Withdrawn">Withdrawn</option>
						</select>
					</div>
		      <div class="col-1">
						<label for="targetOrigin">Target Origin:</label><br>
						<select class="selectBox" name="targetOrigin" id="targetOrigin">
							<option value="Myself">Myself</option>
							<option value="Delivery Manager">Delivery Manager</option>
							<option value="Line Mgmt">Line Mgmt</option>
							<option value="Coach">Coach</option>
						</select>
					</div>
		      <div class="col-1">
						<label for="targetDate">Due by:</label><br>
						<input class="date" id="targetDate" type="date" name="targetDate" placeholder="DD.MM.YYYY">
					</div>
				</div>


		<!-- My valid Personal Targets -->

		<div class="row">
			<div class="col-6" id="personalTargetTitle">
				<h1>My personal targets per quarter</h1>
			</div>
		</div>

		<!-- Personal Target 1 -->
			<div class="row" id="myItemsRow">
				<div class="col-2" id="targetDescriptionFrame">
					<label for="targetDescription">TargetDescription:</label>
					<textarea id="targetDescription" class= "textarea" name="name" rows="8" cols="80" placeholder="Your new Target"></textarea>
				</div>
				<div class="col-1">
					<label for="targetArea">Target Area:</label><br>
					<select class="selectBox" name="targetArae" id="targetArea">
						<option value="Business Development">Business Development</option>
						<option value="Skills Development">Skills Development</option>
						<option value="Delivery Target">Delivery Target</option>
						<option value="Blogs_Posts_Webinars">Blog, Post or Webinars</option>
						<option value="Others">Others</option>
					</select>
				</div>
				<div class="col-1">
					<label for="targetStatus">Target Status:</label><br>
					<select class="selectBox" name="targetStatus" id="targetStatus">
						<option value="New">New</option>
						<option value="In Progress">In Progress</option>
						<option value="Complete">Complete</option>
						<option value="Delayed">Delayed</option>
						<option value="Withdrawn">Withdrawn</option>
					</select>
				</div>
				<div class="col-1">
					<label for="targetOrigin">Target Origin:</label><br>
					<select class="selectBox" name="targetOrigin" id="targetOrigin">
						<option value="Myself">Myself</option>
						<option value="Delivery Manager">Delivery Manager</option>
						<option value="Line Mgmt">Line Mgmt</option>
						<option value="Coach">Coach</option>
					</select>
				</div>
				<div class="col-1">
					<label for="targetDate">Due by:</label><br>
					<input class="date" id="targetDate" type="date" name="targetDate" placeholder="DD.MM.YYYY">
				</div>
			</div>
		</div>
		</div>
		</section>
	</body>
</html>
