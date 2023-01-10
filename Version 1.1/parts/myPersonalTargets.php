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
    <title>MyTargets</title>
  </head>

  <body>
    <div id="page" class="">
      <?php require("./navigation.php"); ?>
      <?php require("./footer.php"); ?>

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
		</form>

		<!-- My valid Personal Targets -->

		<form action="./updateTarget.php" method="Post">

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
								<td><?php echo ($target['targetYear']); ?></td>
								<td><?php echo ($target['targetDescription']); ?></td>
								<td><?php echo ($target['targetArea']); ?></td>
								<td>
									<?php $temp_val5 = ($target['targetStatus']) ?>

									<select id="targetStatus" class="listbox" name="targetStgatus" value=<?php echo ($personaltargets['targetStatus']); ?>>
										<option value="Not started" <?php if($temp_val5 == 'Not started') echo('selected')?> >Not started</option>
										<option value="In Progress" <?php if($temp_val5 == 'In Progress') echo('selected')?> >In progress</option>
										<option value="Done" <?php if($temp_val5 == 'Done') echo('selected')?> >Done</option>
										<option value="Rejected" <?php if($temp_val5 == 'Rejected') echo('selected')?> >Rejected</option>
										<option value="Cancelled" <?php if($temp_val5 == 'Cancelled') echo('selected')?> >Cancelled</option>
									</select>
								</td>
								<td><?php echo ($target['targetOrigin']); ?></td>
								<td><?php echo ($target['targetDate']); ?></td>
							</tr>
						
						<?php endforeach; ?>

					</tbody>
				</table>
			</div>
		</form>
	</section>
	</body>
</html>
