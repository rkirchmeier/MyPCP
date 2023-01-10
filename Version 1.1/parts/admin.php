<?php require("../shared/inc/functions.inc.php"); ?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../src/css/styles.css">
    <title>MyCareer</title>
  </head>

	<body>
    <div id="page" class="">
      <?php require("./navigation.php"); ?>
      <?php require("./footer.php"); ?>

    <!-- Administrative section -->

    <section id="adminSection">
    	<div class="container">
    		<div class="row">
    			<div class="col-6">
    				<header class="intro-container">
    					<h1>My Performance Career Plan-Admin</h1>
    				</header>
    			</div>
    		</div>

				<div class="row">
						<div class="col-6">
							<button type="submit" name="AddEmployee">Add Employee</button>
							<button id="saveChanges" type="submit" name="Save">Save Changes</button>
						</div>
				</div>

				<div class="row">
						<div class="col-6">
							<h2>Utilization</h2>
						</div>
				</div>

        <table id="utiliztionAdminTable">
        	<tr>
        		<th>Employee</th>
						<th>Target Utilization</th>
						<th>Utilization Q1</th>
						<th>Utilization Q2</th>
						<th>Utilization Q3</th>
						<th>Utilization Q4</th>
        	</tr>
					<tr>
						<td><label for="utilNameE1"></label><input type="text" name="utilE1Name" id="utilNameE1"></td>
						<td><label for="UtilTargetE1"></label><input type="text" name="utilTargetE1" id="utilTargetE1"></td>
						<td><label for="utilQ1E1"></label><input type="text" name="utilQ1E1" id="utilQ1E1"></td>
						<td><label for="utilQ2E1"></label><input type="text" name="UtilQ2E1" id="utilQ2E1"></td>
						<td><label for="utilQ3E1"></label><input type="text" name="UtilQ3E1" id="utilQ3E1"></td>
						<td><label for="utilQ4E1"></label><input type="text" name="UtilQ4E1" id="utilQ4E1"></td>
					</tr>
        </table>

				<div class="row">
						<div class="col-6" id="utilizationAdmin">
							<h2>Administrative Excellence</h2>
						</div>
				</div>

<table id="adminExcellenceTable">
	<tr>
		<th>Employee</th>
		<th>CV Update Q1</th>
		<th>CV Update Q2</th>
		<th>CV Update Q3</th>
		<th>CV Update Q4</th>
		<th>Weekly Rep Q1</th>
		<th>Weekly Rep Q2</th>
		<th>Weekly Rep Q3</th>
		<th>Weekly Rep Q4</th>
		<th>Time Rep Q1</th>
		<th>Time Rep Q2</th>
		<th>Time Rep Q3</th>
		<th>Time Rep Q4</th>
	</tr>
	<tr id="adminTargetTabelRow">
		<td><label for="adminTargetName"></label><input type="text" name="adminE1Name" id="adminTargetName"></td>
		<td><label for="UtilE1Name"></label><input type="text" name="UtilE1Name" id="UtilE1Name"></td>
		<td><label for="UtilE1Name"></label><input type="text" name="UtilE1Name" id="UtilE1Name"></td>
		<td><label for="UtilE1Name"></label><input type="text" name="UtilE1Name" id="UtilE1Name"></td>
		<td><label for="UtilE1Name"></label><input type="text" name="UtilE1Name" id="UtilE1Name"></td>
		<td><label for="UtilE1Name"></label><input type="text" name="UtilE1Name" id="UtilE1Name"></td>
		<td><label for="UtilE1Name"></label><input type="text" name="UtilE1Name" id="UtilE1Name"></td>
		<td><label for="UtilE1Name"></label><input type="text" name="UtilE1Name" id="UtilE1Name"></td>
		<td><label for="UtilE1Name"></label><input type="text" name="UtilE1Name" id="UtilE1Name"></td>
		<td><label for="UtilE1Name"></label><input type="text" name="UtilE1Name" id="UtilE1Name"></td>
		<td><label for="UtilE1Name"></label><input type="text" name="UtilE1Name" id="UtilE1Name"></td>
		<td><label for="UtilE1Name"></label><input type="text" name="UtilE1Name" id="UtilE1Name"></td>
		<td><label for="UtilE1Name"></label><input type="text" name="UtilE1Name" id="UtilE1Name"></td>
	</tr>

</table>

	</body>

</html>
