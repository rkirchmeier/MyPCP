<?php 
require("../../shared/inc/functions.inc.php"); 
require("../../shared/inc/db.inc.php"); 
?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../src/css/styles.css">
    <title>Target</title>
  </head>

  <body>
    <div id="page" class="">
      <?php require("../navigation.php"); ?>
      <?php require("../footer.php"); ?>

		<!-- Personal Targets -->

	<section id="PersonalTargetsBereich">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<header class="intro-container">
							<h1>Selected target</h1>
							<p>Adjust single target and save</p>
						</header>
					</div>
				</div>


	<?php $Employee_ID = 1; ?>
	<?php $Employee_Name = "Roman Kirchmeier"; ?>
	<?php $Year = 2023 ?>

			<form method="POST">
				<label for="Year">Year:</label>
				<select id="Year" name="Year" class="listbox_mgmt">
					<option selected disabled>-- select --</option>
					<option value="2023">2023</option>
					<option value="2024">2024</option>
					<option value="2025">2025</option>
					<option value="2026">2026</option>
					<option value="2027">2027</option>
					<option value="2028">2028</option>
					<option value="2029">2029</option>
					<option value="2030">2030</option>
				</select><br>


		<?php 
		
		$stmt = $pdo->prepare ("SELECT Employee_ID, `Name` FROM employee");
		$stmt -> execute();
		$employees = $stmt->fetchAll();

		?>


				<label for="employee">Employee:</label>
				<select id="employee" name="employee" class="listbox_mgmt">
					<?php foreach($employees as $employee): ?>
					<option value="<?php echo ($employee[1]); ?>"><?php echo ($employee[1]); ?></option>
					<?php endforeach;?>
 
				</select>

				<input id="YearButton1" type="submit" name="submit" value= "Select" /> <br><br>

			</form>

		<!--get relevant year and employee -->

		<?php 

			if(isset($_POST['submit'])) {
			$Year = $_POST['Year'];
			$Employee_Name = $_POST['employee'];
			}

			$stmt = $pdo->prepare ("SELECT Employee_ID FROM employee WHERE `Name` = '$Employee_Name'");
			$stmt -> execute();
			$employees = $stmt->fetchAll(); 

				foreach($employees as $employee) {
					$Employee_ID = ($employee[0]);
				}
		?>


			<form action="./addTarget.php" method="POST" enctype="multipart/form-data">

				<div class="row">
					<div class="col-3">
						<input id="btn-typ-1" type="submit" name="add" value="Add target"></input><br><br>
					</div>
				</div>

				<div class="row" id="addNewItemRow">
					<div class="col-2" >
						<label for="targetDescription">TargetDescription:</label>
						<textarea id="targetDescription" class= "textarea" name="targetDescription" rows="8" cols="80" placeholder="Your new Target"></textarea>
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
							<option value="New">Not started</option>
							<option value="In Progress">In Progress</option>
							<option value="Complete">Done</option>
							<option value="Delayed">Rejected</option>
							<option value="Withdrawn">Cancelled</option>
						</select>
					</div>
		      <div class="col-1">
						<label for="targetOrigin">Target Origin:</label><br>
						<select class="selectBox" name="targetOrigin" id="targetOrigin">
							<option value="Myself">Myself</option>
							<option value="Squad Lead">Squad Lead</option>
							<option value="Value Stream Lead">Value Stream Lead</option>
							<option value="Coach">Coach</option>
						</select>
					</div>
		      <div class="col-1">
						<label for="targetDate">Due by:</label><br>
						<input class="date" id="targetDate" type="date" name="targetDate" placeholder="DD.MM.YYYY">
					</div>
				</div>
		</form>

		<!-- My valid Personal Targets -->

		<form action="../updateTargetAll.php" method="Post">

			<div class="row">
				<div class="col-2" id="personalTargetTitle">
					<h1>My personal targets per quarter</h1>
				</div>
				<div class="col-1">
					<input id="btn-typ-1" type="submit" name="update" value="Update Target" enctype="multipart/form-data"></input><br><br>
				</div>
			</div>

		<!-- Personal Target 1 -->
			<div class="row" id="myItemsRow">

				<table class="table">
					<thead>
						<tr>
							<th class="hidden"></th>
							<th scope="col">Year</th>
							<th scope="col">Description</th>
							<th scope="col">Area</th>
							<th scope="col">Status</th>
							<th scope="col">Origin</th>
							<th scope="col">Due by</th>
						</tr>
					</thead>
					<tbody>
						
						<?php	
						
						$stmt = $pdo->prepare ("SELECT * FROM `personaltarget` WHERE `Employee_ID` = $Employee_ID");
						$stmt -> execute();
						$targets = $stmt->fetchAll(); 

						ob_start();
						$targetliste = ob_get_contents();
						ob_end_clean();


						foreach($targets as $target): ?>
							<tr>
								<td class="hidden" name="Target_ID" value=<?php echo ($target['Target_ID']);?>></td>
								<td><textarea id="targetYear" class= "textarea" name="targetYear" rows="1" cols="5" value=""><?php echo ($target['targetYear']); ?></textarea></td>
								<td><textarea id="targetDescription" class= "textarea" name="targetDescription" rows="1" cols="20" value="" ><?php echo ($target['targetDescription']); ?></textarea></td>
								<td>
								<?php $temp_val1 = ($target['targetArea']); ?>

									<select class="selectBox" name="targetArea" id="targetArea">
										<option value='Business Development' <?php if($temp_val1 == 'Business Development') echo('selected')?>>Business Development</option>
										<option value='Skills Development' <?php if($temp_val1 == 'Skills Development') echo('selected')?>>Skills Development</option>
										<option value='Delivery Target' <?php if($temp_val1 == 'Delivery Target') echo('selected')?>>Delivery Target</option>
										<option value='Blogs_Posts_Webinars' <?php if($temp_val1 == 'Blogs_Posts_Webinars') echo('selected')?>>Blog, Post or Webinars</option>
										<option value='Others' <?php if($temp_val1 == 'Other') echo('selected')?>>Others</option>
									</select>
								</td>
								<td>
								<?php $temp_val5 = ($target['targetStatus']) ?>

									<select id="targetStatus" class="selectBox" name="targetStatus" value=<?php echo ($personaltargets['targetStatus']); ?>>
										<option value="Not started" <?php if($temp_val5 == 'Not started') echo('selected')?> >Not started</option>
										<option value="In Progress" <?php if($temp_val5 == 'In Progress') echo('selected')?> >In progress</option>
										<option value="Done" <?php if($temp_val5 == 'Done') echo('selected')?> >Done</option>
										<option value="Rejected" <?php if($temp_val5 == 'Rejected') echo('selected')?> >Rejected</option>
										<option value="Cancelled" <?php if($temp_val5 == 'Cancelled') echo('selected')?> >Cancelled</option>
									</select>
								</td>
								<td>
								<?php $temp_val6 = ($target['targetOrigin']); ?>

								<select class="selectBox" name="targetOrigin" id="targetOrigin">
									<option value='Myself' <?php if($temp_val6 == 'Myself') echo('selected')?>>Myself</option>
									<option value='Squad Lead' <?php if($temp_val6 == 'Squad Lead') echo('selected')?>>Squad Lead</option>
									<option value='Value Stram Lead' <?php if($temp_val6 == 'Value Stream Lead') echo('selected')?>>Value Stram Lead</option>
									<option value='Coach' <?php if($temp_val6 == 'Coach') echo('selected')?>>Coach</option>
								</select>
								</td>
								<td>
								<input type="date" name="targetDate" value="<?php echo ($target['targetDate']); ?>">
								</td>
							</tr>
						
						<?php endforeach; ?>

					</tbody>
				</table>
			</div>
		</form>
	</section>
	</body>
</html>
