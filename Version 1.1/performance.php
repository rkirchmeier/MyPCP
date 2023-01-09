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

<!-- Performance Management @ ALTERSIS -->

<section id="performanceOverviewPage">
	<div class="container">
		<div class="row">
			<div class="col-6">
				<header class="intro-container">
					<h1>Performance Management @ Altersis</h1>
					<p>Find here the overview on how the performance of you as an important employee of Altersis Performance is measured</p>
				</header>
			</div>
		</div>

			<div class="row" id="targetRow1">
				<div class="col-3" id="targetQuarter">
					<h2>Finanical Excellence (Company Targets)</h2>
					<p>A company has to be profitable to invest in employees, in new prodcut & service development and the company infrastructure, etc. Most important for the <b>Financial Excellence</b> is the profitability (margin) which gives the basis for future investments. </p>
					<a href="companyTargets.html">
						<img src="./src/img/FE_picture.jpg" alt="Financial Excellence Picture">
					</a>
				</div>
				<div class="col-3" id="targetQuarter">
					<h2>Administrative Excellence</h2>
					<p>There are serveral administrative tasks beside our daily business of APM or Performance Engineering. These administrative tasks are importnat to our back office and sales services as e.g. invoicing, accounting, offering, etc. Therefore these activites are set as <b>Administrative excellence</b> targets.</p>
					<a href="myMboTargets.html">
						<img src="./src/img/AE_picture.jpg" alt="Administrative Excellence Picture">
					</a>
				</div>
			</div>

			<div class="row" id="targetRow2">
				<div class="col-3" id="targetQuarter">
					<h2>Delivery Excellence</h2>
					<p>Our main task it to deliver a high quality service to our client. Therefore the client satisfaction has a high importance to the target of the <b>Delivery Excellence</b>. Additionally to support the profitability it's important this time is billable to the clients (utilization).</p>
					<a href="companyTargets.html">
						<img src="./src/img/FE_picture.jpg" alt="Financial Excellence Picture">
					</a>
				</div>
				<div class="col-3" id="targetQuarter">
					<h2>Personal Excellence</h2>
					<p>To grow in technical or social skills your personal development is a critical part of the <b>Personal Excellence</b> target. On a quarterly basis you will define your personal targets with your manager and coach.</p>
					<a href="myMboTargets.html">
						<img src="./src/img/AE_picture.jpg" alt="Administrative Excellence Picture">
					</a>
				</div>
			</div>

	</div>
</section>

	</body>

</html>
