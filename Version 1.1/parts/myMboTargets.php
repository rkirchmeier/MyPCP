<?php 
require("../shared/inc/functions.inc.php");
require("../shared/inc/db.inc.php"); 
?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../src/css/styles.css">
    <title>MyMbO</title>
  </head>

  <body>
    <div id="page" class="">
      <?php require("./navigation.php"); ?>
      <?php require("./footer.php"); ?>


<!-- My MbO section -->

<?php $Employee_ID = 1; ?>

<section id="myMboSection">
	<div class="container">
		
		<div class="row">
			<div class="col-6">
				<header>
					<h1>My MbO</h1>
					<p>Following you find your targets for this year. Progress will be discussed in your coaching sessions</p>
				</header>
			</div>
		</div>

<!-- MbO Targets -->

<?php $Year = 2023 ?>

			<form method="POST">
				<select id="Year" name="Year" class="listbox">
					<option selected disabled>-- select --</option>
					<option value="2023">2023</option>
					<option value="2024">2024</option>
					<option value="2025">2025</option>
					<option value="2026">2026</option>
					<option value="2027">2027</option>
					<option value="2028">2028</option>
					<option value="2029">2029</option>
					<option value="2030">2030</option>
				</select>
				<input id="YearButton" type="submit" name="submit" value= "Select year" />
			</form>

		<!--get relevant year -->

		<?php 

			if(isset($_POST['submit'])) {
			$Year = $_POST['Year'];
			}
		?>

		<?php

		$stmt = $pdo->prepare ("SELECT `Role` FROM employee WHERE `Employee_ID` = $Employee_ID");
		$stmt -> execute();
		$roles = $stmt->fetchAll(); 

		foreach($roles as $role) {
			$myrole = ($role['Role']);
		}

		$stmt = $pdo->prepare ("SELECT `Level` FROM roles WHERE `Role` = '$myrole'");
		$stmt -> execute();
		$levels = $stmt->fetchAll(); 

		foreach($levels as $level) {
			$levelnr = ($level['Level']);
		}

		$stmt = $pdo->prepare ("SELECT * FROM `weight` WHERE `Level_ID` = $levelnr");
		$stmt -> execute();
		$weights = $stmt->fetchAll(); 

		foreach($weights as $weight) {
		}

		?>

<!-- Financial Excellence -->

		<div class="row">
			<div class="col-6" id="financialExcellence">
				<h2>Financial Excellence</h2>
			</div>
		</div>

		<?php


		$stmt = $pdo->prepare ("SELECT * FROM financialexcellence WHERE `Year` = $Year");
		$stmt -> execute();
		$data = $stmt->fetchAll(); 

		foreach($data as $fe) {
		}

		$targetRevenue =  $fe['RevenueTarget'];
		$actualRevenue = $fe['RevenueActual'];
		$targetMargin = $fe['MarginTarget'];
		$actualMargin = $fe['MarginActual'];

		$calcRevenue = $actualRevenue / $targetRevenue *3;
		$calcMargin = $actualMargin / $targetMargin *3;

		?>

		<!-- Revenu -->

		<table class="table">
			<tr id="targetNameRow">
				<th>Target Name</th>
				<th>Target Description</th>
				<th>Target Value</th>
				<th>Actuals</th>
				<th>Rating</th>
				<th>Weight</th>
			</tr>
			<tr id="FETargetRow">
				<td>Revenue</td>
				<td>Revenue Actuals vs. Budget</td>
				<td><?php echo ($fe['RevenueTarget']); ?></td> <!-- get from table FinancialExcellence/Revenue/Target-->
				<td><?php echo ($fe['RevenueActual']); ?></td> <!-- get from table FinancialExcellence/Revenue/Actuals-->
				<td><?php echo $calcRevenue; ?></td> <!--Calculation Actual vs. Target-->
				<td rowspan="2"><?php echo ($weight['FinancialExcellence']); ?>%</td> <!-- get from table "Weight"-->
			</tr>

		<!-- Margin -->

			<tr id="FETargetRow">
				<td>Margin</td>
				<td>Margin Actuals vs. Budget</td>
				<td><?php echo ($fe['MarginTarget']); ?></td> <!-- get from table FinancialExcellence/Revenue/Target-->
				<td><?php echo ($fe['MarginActual']); ?></td> <!-- get from table FinancialExcellence/Revenue/Actuals-->
				<td id="weight"><?php echo $calcMargin; ?></td> <!--Calculation Actual vs. Target-->
				<!--<td></td> get from table "Weight"-->
			</tr>

		</table>

		<!-- Company Culture Contribution -->
		<?php
				$stmt = $pdo->prepare ("SELECT * FROM ccc WHERE Employee_ID = $Employee_ID AND `Year` = $Year");
				$stmt -> execute();
				$data = $stmt->fetchAll();

				foreach($data as $ccc) {
				}

		?>

			<div class="row">
					<div class="col-6" id="financialExcellence">
						<h2>Company Culture Contribution</h2>
					</div>
			</div>

			<table class="table">
				<tr id="targetNameRow">
					<th>Target Name</th>
					<th>Target Description</th>
					<th>Target Value</th>
					<th>Actuals</th>
					<th>Rating</th>
					<th>Weight</th>
				</tr>

				<tr id="AETargetRow">
					<td>Your Contribution</td>
					<td>Feedback from MCB</td>
					<td>3.00</td>
					<td><?php echo e($ccc['CCCRating']); ?></td> <!-- get from table CCC/Actuals-->
					<td><?php echo e($ccc['CCCRating']); ?></td> <!--Calculation Actual vs. Target-->
					<td><?php echo ($weight['CCC']); ?>%</td> <!-- get from table "Weight"-->
				</tr>

			</table>

<!-- Delivery Excellence -->

				<?php
				$stmt = $pdo->prepare ("SELECT * FROM utilization WHERE Employee_ID = $Employee_ID AND `Year` = $Year");
				$stmt -> execute();
				$data = $stmt->fetchAll();

				foreach($data as $util) {
				}

				?>

				<?php
				$stmt = $pdo->prepare ("SELECT * FROM clientfeedback WHERE Employee_ID = $Employee_ID AND `Year` = $Year");
				$stmt -> execute();
				$data = $stmt->fetchAll();

				foreach($data as $feedback) {
				}

				$target = $util['UtilTarget'];
				$actual = $util['UtilActual'];
				$calc = $actual / $target * 3;

				?>


			<div class="row">
					<div class="col-6" id="financialExcellence">
						<h2>Delivery Excellence</h2>
					</div>
			</div>

<!-- Delivery Excellence -->

			<table class="table">
				<tr id="targetNameRow">
					<th>Target Name</th>
					<th>Target Description</th>
					<th>Target Value</th>
					<th>Actuals</th>
					<th>Rating</th>
					<th>Weight</th>
				</tr>

				<!-- Utilization -->

				<tr id="DETargetRow">
					<td>Utilization</td>
					<td>Billable Hours vs. Available Hours</td>
					<td><?php echo e($util['UtilTarget']); ?>%</td> <!-- get from table "Utilization/Target"-->
					<td><?php echo e($util['UtilActual']); ?>%</td> <!-- get from table "Utilization/Actuals"-->
					<td><?php echo $calc; ?>%</td> <!--Calculation Actual vs. Target-->
					<td rowspan="2"><?php echo ($weight['DeliveryExcellence']); ?>%</td> <!-- get from table "Weight"-->
				</tr>

				<!-- Client Feedback -->

				<tr id="DETargetRow">
					<td>Client Feedback</td>
					<td>Client feedback either by client contact or Delivery Manager</td>
					<td>3.00</td>
					<td><?php echo e($feedback['Rating']); ?></td> <!-- get from table "ClientFeedback/Rating"-->
					<td><?php echo e($feedback['Rating']); ?></td> <!-- Calculation Actual vs. Target-->
				</tr>

			</table>

		<!-- Personal Excellence -->
		
		<?php

		$sql = "SELECT * FROM personaltarget WHERE Employee_ID = $Employee_ID AND `targetYear` = $Year AND `TargetStatus` != 'Cancelled'";
		$targets = $pdo -> query($sql);
		$result = $targets-> rowCount();
		

		$sql = "SELECT * FROM personaltarget WHERE Employee_ID = $Employee_ID AND `targetYear` = $Year AND `TargetStatus` = 'Done'";
		$targets = $pdo -> query($sql);
		$done = $targets-> rowCount();

		$ergebnis = $done / $result * 3;

		?>

		<div class="row">
			<div class="col-6" id="financialExcellence">
				<h2>Personal Excellence</h2>
			</div>
		</div>

		<!-- Personal Excellence -->

			<table class="table">
				<tr id="targetNameRow">
					<th>Target Name</th>
					<th>Target Description</th>
					<th>Target Value</th>
					<th>Actuals</th>
					<th>Rating</th>
					<th>Weight</th>
				</tr>

		<!-- Personal Excellence -->

				<tr id="PETargetRow">
					<td>Personal Excellence</td>
					<td>Achieve Personal Excellence by reaching your personal targets</td>
					<td><?php echo $result; ?></td> <!--get number of valid targets (!= Canceelled) from PersonalExcellence-->
					<td><?php echo $done; ?></td> <!--get number of done targets (== Done) from PersonalExcellence-->
					<td><?php echo $ergebnis; ?></td> <!-- Calculation Actual vs. Target-->
					<td><?php echo ($weight['PersonalExcellence']); ?>%</td> <!-- get from table "Weight"-->
				</tr>
			</table>
		</div>
	</section>

	</body>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</html>




