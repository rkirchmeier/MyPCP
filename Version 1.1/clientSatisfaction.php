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
			if (!strlen($_POST['client']) > 0
			|| !strlen($_POST['contact']) > 0
			|| !strlen($_POST['rating']) > 0
			|| !strlen($_POST['trend']) > 0
			|| !strlen($_POST['feedback']) > 0
			|| !strlen($_POST['year']) > 0
			) {
				echo "You did not complete the form";
				echo "Not saved";
			}
			else{
				$sql = "INSERT INTO Employee "
				."(client, contact, rating, trend, feedback, year, employee_ID) VALUES "
				."(:client, :contact, :rating, :trend, :feedback, :year, :employee_ID)";

				$query = $pdo->prepare($sql);
				$query->bindParam(':client', $_POST['client'], PDO::PARAM_STR);
				$query->bindParam(':contact', $_POST['contact'], PDO::PARAM_STR);
				$query->bindParam(':rating', $_POST['rating'], PDO::PARAM_STR);
				$query->bindParam(':trend', $_POST['trend'], PDO::PARAM_STR);
				$query->bindParam(':feedback', $_POST['feedback'], PDO::PARAM_STR);
				$query->bindParam(':year', $_POST['year'], PDO::PARAM_STR);
				//Hier muss noch die employee ID mitgegeben werden, von wo nehme ich diese?

				$query->execute();

				if ($pdo->lastInsertId()){
					echo "Successfully saved";
				}
			}

endif;

	<body>
    <div id="page" class="">
      <?php require("./parts/navigation.php"); ?>
      <?php require("./parts/footer.php"); ?>

					<!-- Client Feedback -->

					<section id="clientFeedbackBereich">
						<div class="container">
							<div class="row">
								<div class="col-6">
									<header class="intro-container">
										<h1>Client Feedbacks</h1>
										<p>Here you can find all client feedbacks which have been given to you</p>
									</header>
								</div>
							</div>

							<div class="row">
								<div class="col-6">
									<button id="btn-typ-1" type="button" name="button">Add new client feedback</button><br><br>
								</div>
							</div>

							<div class="row" id="addNewItemRow">
							<div class="col-1">
								<label for="year">Year:</label><br>
								<input id="year" type="text" name="year" placeholder="year">
							</div>
								<div class="col-1">
									<label for="client">Client:</label><br>
									<input id="client" type="text" name="client" placeholder="Client">
								</div>
					      <div class="col-1">
									<label for="contact">Contact Name:</label><br>
									<input id="contact" type="text" name="contact" placeholder="First Name Family Name">
								</div>
					      <div class="col-1">
									<label for="rating">Rating:</label><br>
									<select class="selectBox" name="rating" id="rating">
										<option value="3">excellent</option>
										<option value="2.5">good</option>
										<option value="2">appropriate</option>
										<option value="1.5">under expectation</option>
										<option value="1">poor</option>
									</select>
								</div>
					      <div class="col-1">
									<label for="trend">Trend:</label><br>
									<select class="selectBox" name="trend" id="trend">
										<option value="1.1">improving</option>
										<option value="1">staying the same</option>
										<option value="0.9">deteriorating</option>
									</select>
								</div>
					      <div class="col-1">
									<label for="feedbackDetails">Client Feedback:</label><br>
									<textarea id="feedbackDetails" class= "textarea" name="feedback" placeholder="Write detailed Feedback"></textarea>
								</div>
							</div>


					<!-- My client feedbacks -->

					<div class="row">
						<div class="col-6" id="clientFeedbackTitle">
							<h1>My client feedbacks</h1>
						</div>
					</div>

					<div class="row" id="myItemsRow">
						<div class="col-1">
							<label for="client">Client:</label><br>
							<input id="client" type="text" name="client" placeholder="Client">
						</div>
						<div class="col-1">
							<label for="contact">Contact Name:</label><br>
							<input id="contact" type="text" name="contact" placeholder="First Name Family Name">
						</div>
						<div class="col-1">
							<label for="rating">Rating:</label><br>
							<select class="selectBox" name="rating" id="rating">
								<option value=".5">excellent</option>
								<option value="3">good</option>
								<option value="2.5">appropriate</option>
								<option value="2">under expectation</option>
								<option value="1">poor</option>
							</select>
						</div>
						<div class="col-1">
							<label for="trend">Trend:</label><br>
							<select class="selectBox" name="trend" id="trend">
								<option value="1.1">improving</option>
								<option value="1">staying the same</option>
								<option value="0.9">deteriorating</option>
							</select>
						</div>
						<div class="col-2">
							<label for="feedbackDetails">Client Feedback:</label><br>
							<textarea id="feedbackDetails" class= "textarea" name="name" placeholder="Write detailed Feedback"></textarea>
						</div>
					</div>

				</div>
			</section>

	</body>
</html>
