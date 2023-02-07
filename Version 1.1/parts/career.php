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
    <title>MyCareer</title>
  </head>

	<body>
    <div id="page" class="">
      <?php 
	  session_start();
	  require("./navigation.php"); ?>
      <?php require("./footer.php"); ?>

<!-- Career Planning-->

		<?php 

		$Employee_ID = $_SESSION['Employee_ID'];
		$Year = 2023;

		$stmt = $pdo->prepare ("SELECT * FROM employee WHERE Employee_ID = $Employee_ID");
		$stmt -> execute();
		$data = $stmt->fetchAll();

		foreach($data as $role) {
		}


		$stmt = $pdo->prepare ("SELECT * FROM targetrole WHERE Employee_ID = $Employee_ID AND selectedyear = $Year");
		$stmt -> execute();
		$roles = $stmt->fetchAll();

		foreach($roles as $targetrole) {
		}

		?>		

			<section id="myCareerBereich">
				<div class="container">
					<div class="row">
						<div class="col-6">
							<header class="intro-container">
								<h1>My Career</h1>
								<p>What's my target role and what's my way to it?</p>
							</header>
						</div>
					</div>

				<?php 
				$temp_val1 = $targetrole['targetrole']; 
				$selectedyear = 2023;
				?>

				<div class="row">
					<div class="col-3">
					<form action="./addTargetRole.php" method="POST"></form>
					
					<label for="targetRole">Select Year:</label>
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
					</select><br><br>

						<label for="myCurrentRole">My current role:</label>
						<input type="text" id="myCurrentRole" name="myCurrent Role" placeholder="e.g. Performance Engineer" value="<?php echo e($role['Role']); ?>"><br><br>
						<label for="targetRole">My target role:</label>
                        <select class='listbox' id='roles' name='roles'>
                            <option value='Junior Performance Engineer' <?php if($temp_val1 == 'Junior Performance Engineer') echo('selected')?> >Junior Performance Engineer</option> 
                            <option value='Performance Engineer' <?php if($temp_val1 == 'Performance Engineer') echo('selected')?> >Austria</option> 
                            <option value='Performance Consultant' <?php if($temp_val1 == 'Performance Consultant') echo('selected')?> >France</option> 
                            <option value='APM Engineer' <?php if($temp_val1 == 'APM Engineer') echo('selected')?> >Germany</option> 
                            <option value='Senior Performance Engineer' <?php if($temp_val1 == 'Senior Performance Engineer') echo('selected')?> >Senior Performance Engineer</option> 
                            <option value='Senior Performance Consultant' <?php if($temp_val1 == 'Senior Performance Consultant') echo('selected')?> >Senior Performance Consultant</option> 
							<option value='Senior APM Engineer' <?php if($temp_val1 == 'Senior APM Engineer') echo('selected')?> >Senior APM Engineer</option> 
                            <option value='Principal Performance Engineer' <?php if($temp_val1 == 'Principal Performance Engineer') echo('selected')?> >Principal Performance Engineer</option> 
                            <option value='Principal Performance Consultant' <?php if($temp_val1 == 'Principal Performance Consultant') echo('selected')?> >Principal Performance Consultant</option> 
                            <option value='Performance Solution Architect' <?php if($temp_val1 == 'Performance Solution Architect') echo('selected')?> >Performance Solution Architect</option> 
                            <option value='Managing Consultant' <?php if($temp_val1 == 'Managing Consultant') echo('selected')?> >Managing Consultant</option> 
                            <option value='Business Administration' <?php if($temp_val1 == 'Business Administration') echo('selected')?> >Business Administration</option>
							<option value='Senior Business Administration' <?php if($temp_val1 == 'Senior Business Administration') echo('selected')?> >Senior Business Administration</option> 
							<option value='Business Development Manager' <?php if($temp_val1 == 'Business Development Manager') echo('selected')?> >Business Development Manager</option> 
							<option value='Operations Director' <?php if($temp_val1 == 'Operations Director') echo('selected')?> >Operations Director</option> 
							<option value='Services Director' <?php if($temp_val1 == 'Services Director') echo('selected')?> >Services Director</option> 
							<option value='Business Unit Director' <?php if($temp_val1 == 'Business Unit Director') echo('selected')?> >Business Unit Director</option> 
							<option value='Not Applicable' <?php if($temp_val1 == 'Not Applicable') echo('selected')?> >Not Applicable</option> 
                        </select><br><br>						
						<label for="Actions">Relevant actions to reach the target role:</label><br><br>
						<textarea id="actions" name="actions" placeholder="Achieve a specific certification or collect 2 years experience within the role as ..." value = <?php echo e($targetrole['actions']); ?>></textarea>
						<input id="btn-typ-1" type="submit" name="addTargetRole" value="Save"></input><br><br>
					</form>
					</div>
					<div class="col-3">
						<img src="../src/img/CareerPath_APS.GIF" alt="Altersis Switzerland Carreer Path">
					</div>
				</div>

			</div>
		</section>

		</div>
    <script type="text/javascript" src="lib/jquery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>

  </body>
</html>