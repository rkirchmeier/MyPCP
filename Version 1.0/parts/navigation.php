<?php 
$navigation = array (
	"index.html" => "Home",
	"performance.html" => "Performance",
	"companyTargets.html" => "Company Targets",
	"myMboTargets.html" => "Mbo",
	"myPersonalTargets.html" => "My Personal Targets",
	"clientSatisfaction.html" => "Client Satisfaction",
	"career.html" => "Career",
	"documents.html" => "Documents",
	"admin.html" => "Admin",
)
?>

<!DOCTYPE html>
<html lang="de">

	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Navigation</title>
	<link rel="stylesheet" type="text/css" href="./src/css/styles.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	</head>

	<body>

		<!-- NAVIGATIONSLEISTE -->
		
		<!-- Navigation Mobile -->

	<nav class="mobile-nav list-group">
  	<?php foreach($navigation AS $key => $value): ?>
    	<a class="mobile-nav-link list-group-item list-group-item-action" href="<?php echo e($key); ?>">
      		<?php echo e($value); ?>
      		<?php if($key == "#"): ?>
        		<span class="sr-only">(current)</span>
      		<?php endif;?>
    	</a>
  	<?php endforeach; ?>
	</nav>

	<!--Navigation Broswer -->

	<header class="page-header">
  		<div class="container">
    		<nav class="navbar navbar-expand-lg bg-light">
			<div class="container-fluid">
       			 <a href="index.html" class="logo-link">
        		  <img src="./src/img/Logo performance hd.png" alt="Altersis Performance logo">
       			 </a>
          		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          			<span class="navbar-toggler-icon"></span>
        		</button>
      		<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        		<div class="navbar-nav">
					<?php foreach($navigation AS $key => $value): ?>
						<a class="nav-item nav-link<?php if($key == "#"): ?> active<?php endif;?>" href="<?php echo e($key); ?>">
						<?php echo e($value); ?>
						<?php if($key == "#"): ?>
							<span class="sr-only">(current)</span>
						<?php endif;?>
						</a>
					<?php endforeach;?> 
        		</div>
      		</div>
    		</nav>
		</div>
	</header>

	<!--
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a href="index.html" class="logo-link">
          <img src="./src/img/Logo performance hd.png" alt="Altersis Performance logo">
        </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown link
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="companyTargets.html">Company Targets</a></li>
                <li><a class="dropdown-item" href="myMboTargets.html">My MbO</a></li>
                <li><a class="dropdown-item" href="myPersonalTargets.html">My Personal Targets</a></li>
                <li><a class="dropdown-item" href="clientSatisfaction.html">Client Satisfaction</a></li>
               </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
			  -->
				<!--- Navigationleiste für Mobile --->

		<!--		  <div class="container" id="mobile-nav">
				    <div class="row">
				      <div class="col-6">

				        <a href="index.html" class="logo-link">
				          <img src="./src/img/Logo performance hd.png" alt="Altersis Performance logo">
				        </a>

				        <div class="clearfix" id="mobile-nav-dropdown" >

				          <div id="mobile-nav-button"><span>&equiv;</span></div>

				          <div class="clearfix" id="mobile-nav-content">
				            <ul>
				              <li class="active"><a href="index.html">MyHome</a></li>
											<li>
												<a id="performanceAnker" href="performance.html">MyPerformance</a>
												<div class="clearfix" id="submenueFrameMobile">
													<ul id="submenueContentMobile">
															<a href="companyTargets.html">Company Targets</a>
															<a href="myMboTargets.html">My MbO</a>
															<a href="myPersonalTargets.html">My Personal Targets</a>
															<a href="clientSatisfaction.html">Client Satisfaction</a>
													</ul>
												</div>
											</li>
				              <li><a href="career.html">MyCareer</a></li>
				              <li><a href="documents.html">MyDocuments</a></li>
				              <li><a href="admin.html">Admin</a></li>
				            </ul>
				          </div>

				        </div>

				      </div>
				    </div>
				  </div>
				</nav>
			  -->
  </body>
</html>