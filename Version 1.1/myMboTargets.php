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

  <body>
    <div id="page" class="">
      <?php require("./parts/navigation.php"); ?>
      <?php require("./parts/footer.php"); ?>


<!-- My MbO section -->

<section id="myMboSection">
	<div class="container">
		<div class="row">
			<div class="col-6">
				<header>
					<h1>My MbO</h1>
					<p>Following you find your targets for this year, which will be evaluated quarterly</p>
				</header>
			</div>
		</div>

<!-- MbO Targets -->

<div class="row">
		<div class="col-6">
			<button id="saveChanges" type="submit" class="btn btn-primary" name="Save">Save Changes</button>
		</div>
</div>

<!-- Financial Excellence -->

<div class="row">
		<div class="col-6" id="financialExcellence">
			<h2>Financial Excellence</h2>
		</div>
</div>

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
				<td></td> <!-- get from table FinancialExcellence/Revenue/Target-->
				<td></td> <!-- get from table FinancialExcellence/Revenue/Actuals-->
				<td></td> <!--Calculation Actual vs. Target-->
				<td></td> <!-- get from table "Weight"-->
			</tr>

		<!-- Margin -->

			<tr id="FETargetRow">
				<td>Margin</td>
				<td>Margin Actuals vs. Budget</td>
				<td></td> <!-- get from table FinancialExcellence/Revenue/Target-->
				<td></td> <!-- get from table FinancialExcellence/Revenue/Actuals-->
				<td></td> <!--Calculation Actual vs. Target-->
				<td></td> <!-- get from table "Weight"-->
			</tr>

		</table>

		<!-- Company Culture Contribution -->

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
					<td></td> <!-- get from table CCC/Actuals-->
					<td></td> <!--Calculation Actual vs. Target-->
					<td></td> <!-- get from table "Weight"-->
				</tr>

			</table>

<!-- Delivery Excellence -->

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
					<td></td> <!-- get from table "Utilization/Target"-->
					<td></td> <!-- get from table "Utilization/Actuals"-->
					<td></td> <!--Calculation Actual vs. Target-->
					<td></td> <!-- get from table "Weight"-->
				</tr>

				<!-- Client Feedback -->

				<tr id="DETargetRow">
					<td>Client Feedback</td>
					<td>Client feedback either by client contact or Delivery Manager</td>
					<td>3.00</td>
					<td></td> <!-- get from table "ClientFeedback/Target"-->
					<td></td> <!-- Calculation Actual vs. Target-->
					<td></td> <!-- get from table "Weight"-->
				</tr>

			</table>

		<!-- Personal Excellence -->

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
					<td></td> <!--get number of valid targets (!= Canceelled) from PersonalExcellence-->
					<td></td> <!--get number of done targets (== Done) from PersonalExcellence-->
					<td></td> <!-- Calculation Actual vs. Target-->
					<td></td> <!-- get from table "Weight"-->
				</tr>
			</table>
		</div>
	</section>

	</body>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</html>
