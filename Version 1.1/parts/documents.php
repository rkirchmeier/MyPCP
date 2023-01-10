<?php require("../shared/inc/functions.inc.php"); ?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../src/css/styles.css">
    <title>MyDocuments</title>
  </head>

	<body>
    <div id="page" class="">
      <?php require("./navigation.php"); ?>
      <?php require("./footer.php"); ?>

 My Documents Bereich

<section id="documentsBereich">
	<div class="container">
		<div class="row">
			<div class="col-6">
				<header class="intro-container">
					<h1>My Documents</h1>
				</header>
			</div>
		</div>

		<div class="row">
			<div class="col-6">

				<form class="form" action="documents.html" method="post" enctype="multipart/form-data">
					<fieldset>
						<legend>Add new Document</legend>
						<label for="documentUpload"></label>
						<input id="documentUpload" type="file" name="documentUpload">
						<button type="submit" name="docUploadConfirm">Upload</button>
					</fieldset>

				</form>
			</div>
		</div>

		<div class="row">
			<div class="col-6">
					<h2>Contract</h2>
			</div>
		</div>

		<div class="row" id="DocItemRow">
			<div class="col-4">
				<p>Document Name</p>
			</div>
			<div class="col-1">
				<p>dd.mm.yyyy</p>
			</div>
			<div class="col-1">
				<button id="deleteButton" type="button" name="button">
					<img src="../src/img/trash.png" alt="Delete botton">
				</button>
			</div>
		</div>

		<div class="row">
			<div class="col-6">
					<h2>Payslips</h2>
			</div>
		</div>

		<div class="row" id="DocItemRow">
			<div class="col-4">
				<p>Document Name</p>
			</div>
			<div class="col-1">
				<p>dd.mm.yyyy</p>
			</div>
			<div class="col-1">
				<button id="deleteButton" type="button" name="button">
					<img src="../src/img/trash.png" alt="Delete botton">
				</button>
			</div>
		</div>

		<div class="row" id="DocItemRow">
			<div class="col-4">
				<p>Document Name</p>
			</div>
			<div class="col-1">
				<p>dd.mm.yyyy</p>
			</div>
			<div class="col-1">
				<button id="deleteButton" type="button" name="button">
					<img src="../src/img/trash.png" alt="Delete botton">
				</button>
			</div>
		</div>

		<div class="row" id="DocItemRow">
			<div class="col-4">
				<p>Document Name</p>
			</div>
			<div class="col-1">
				<p>dd.mm.yyyy</p>
			</div>
			<div class="col-1">
				<button id="deleteButton" type="button" name="button">
					<img src="../src/img/trash.png" alt="Delete botton">
				</button>
			</div>
		</div>

		</div>
	</section>

	</body>
</html>


