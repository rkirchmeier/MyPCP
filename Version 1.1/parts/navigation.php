<?php 
$navigation = array (
	"../index.php" => "My Home",
	"./performance.php" => "My Performance",
	"./career.php" => "My Career",
	"./documents.php" => "My Documents",
	"./admin.php" => "Admin"
)
?>

<?php 

$navigation2 = array (
	"./index.php" => "My Home",
	"./parts/performance.php" => "My Performance",
	"./parts/career.php" => "My Career",
	"./parts/documents.php" => "My Documents",
	"./parts/admin.php" => "Admin"
)

?>

<?php 

$subNavigation = array (
	"./companyTargets.php" => "Company Targets",
	"./myMboTargets.php" => "My MbO",
	"./myPersonalTargets.php" => "Personal Targets",
	"./clientSatisfaction.php" => "Client Satisfaction"
)
?>

<?php 

$subNavigation2 = array (
	"./parts/companyTargets.php" => "Company Targets",
	"./parts/myMboTargets.php" => "My MbO",
	"./parts/myPersonalTargets.php" => "Personal Targets",
	"./parts/clientSatisfaction.php" => "Client Satisfaction"
)

?>

	<!--NAVIGATIONSLEISTE--> 
		
    		<nav id="header-nav">
			<?php
			$filelocation = "PHP-SELF ".$_SERVER["PHP_SELF"];
			$index = "PHP-SELF /MyPCP/Version 1.1/index.php";

								if ($filelocation == $index) {

									$currentNavigation = $navigation2;
									$currentSubNavigation = $subNavigation2;
									$logo = "./src/img/Logo performance hd.png";
								}
								else
								{
									$currentNavigation = $navigation;
									$currentSubNavigation = $subNavigation;
									$logo = "../src/img/Logo performance hd.png";
								}
		?>

		<!-- Browser Navigation -->

				<div class="container" id="desktop-nav">
				    <div class="row">
				      <div class="container-fluid">
						<a href="index.html" class="logo-link ">
							<img src="<?php echo $logo; ?>" alt="Altersis Performance logo">
						</a>
						<div class="hide">Employee ID</div>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobile-nav-dropdown">
							<span class="navbar-toggler-icon"></span>
						</button>
							
						
						<ul>
								<?php 
								
								foreach($currentNavigation AS $key => $value): ?>
									<li class="">
										<a href="<?php echo e($key); ?>">
										<?php echo e($value); ?>
											<?php if($key == "#"): ?>
												<span class="sr-only">(current)</span>
											<?php endif;?>
										</a>
											<?php if ($value == "My Performance") 
													{ ?>
														<div class="clearfix" id="submenueFrame">
															<ul id="submenueContent">
															<?php foreach($currentSubNavigation AS $key => $value): ?>
																	<a href="<?php echo e($key); ?>">
																	<?php echo e($value); ?>
																	</a>
																<?php endforeach;?>
															</ul>
														</div>
													<?php }
											?>		
									</li>
								<?php endforeach;?> 
							</ul>
        				</div>
      				</div>
				</div>

<!-- Mobile Navigation -->

				<div id="mobile-nav" class="container-fluid">
					<div class="row">
						<div class="col-3">
							<a href="index.html" class="logo-link">
								<img src="../src/img/Logo performance hd.png" alt="Altersis Performance logo">
							</a>
						</div>
						<div class="col-3"> 	
							<div class="clearfix" id="mobile-nav-dropdown"> 
								<div id="mobile-nav-button"> 
									<span>&equiv;</span>
								</div>
								<div class="clearfix" id="mobile-nav-content"> 
									<ul>
									<?php foreach($navigation AS $key => $value): ?>
									<li class="">
										<a href="<?php echo e($key); ?>">
										<?php echo e($value); ?>
											<?php if($key == "#"): ?>
												<span class="sr-only">(current)</span>
											<?php endif;?>
										</a>
											<?php if ($key == "performance.html") 
													{ ?>
														<div class="clearfix" id="submenueFrameMobile">
															<ul id="submenueContentMobile">
															<?php foreach($subNavigation AS $key => $value): ?>
																	<a href="<?php echo e($key); ?>">
																	<?php echo e($value); ?>
																	</a>
																<?php endforeach;?>
															</ul>
														</div>
													<?php }
											?>		
									</li>
									<?php endforeach;?> 
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

			</nav>
