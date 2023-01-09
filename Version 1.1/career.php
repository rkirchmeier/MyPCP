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

		try {
		$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $user, $password, array(
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		));
		}
		catch(PDOException $e) {
		die("Connection to database failed");
		}

		if(count($_POST) > 0)
			if (!strlen($_POST['targetRole']) > 0
			|| !strlen($_POST['actions']) > 0
			) {
				echo "You did not complete the form";
				echo "Not saved";
			}
			else{
				$sql = "INSERT INTO Employee "
				."(targetRole, actions, year, employee_ID) VALUES "
				."(:targetRole, :actions, :year, :employee_ID)";

				$query = $pdo->prepare($sql);
				$query->bindParam(':targetRole', $_POST['targetRole'], PDO::PARAM_STR);
				$query->bindParam(':actions', $_POST['actions'], PDO::PARAM_STR);
				$query->bindParam(':year', $_POST['year'], PDO::PARAM_STR);
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

<!-- Career Planning-->

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

				<div class="row">
					<div class="col-3">
						<label for="myCurrentRole">My current role:</label>
						<input type="text" id="myCurrentRole" name="myCurrent Role" placeholder="e.g. Performance Engineer"><br><br>
						<label for="targetRole">My target role:</label>
						<input type="text" id="targetRole" name="targetRole" placeholder="e.g. Senior Performance Engineer"><br><br>
						<label for="Actions">Relevant actions to reach the target role:</label><br><br>
						<textarea id="actions" name="actions" placeholder="Achieve a specific certification or collect 2 years experience within the role as ..."></textarea>
					</div>
					<div class="col-3">
						<img src="./src/img/CareerPath_APS.GIF" alt="Altersis Switzerland Carreer Path">
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