<?php 
$navigation = array (
	"index.php" => "My Home",
	"performance.php" => "My Performance",
	"career.php" => "My Career",
	"documents.php" => "My Documents",
	"admin.php" => "Admin"
)
?>
 
<?php

$subNavigation =array (
	"companyTargets.php" => "Company Targets",
	"myMboTargets.php" => "My MbO",
	"myPersonalTargets.php" => "Personal Targets",
	"clientSatisfaction.php" => "Client Satisfaction"
)

?>

	<!--NAVIGATIONSLEISTE--> 
		
    		<nav id="header-nav">

		<!-- Browser Navigation -->

				<div class="container" id="desktop-nav">
				    <div class="row">
				      <div class="container-fluid">
						<a href="index.html" class="logo-link ">
							<img src="./src/img/Logo performance hd.png" alt="Altersis Performance logo">
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobile-nav-dropdown">
							<span class="navbar-toggler-icon"></span>
						</button>
							<ul>
								<?php foreach($navigation AS $key => $value): ?>
									<li class="">
										<a href="<?php echo e($key); ?>">
										<?php echo e($value); ?>
											<?php if($key == "#"): ?>
												<span class="sr-only">(current)</span>
											<?php endif;?>
										</a>
											<?php if ($key == "performance.php") 
													{ ?>
														<div class="clearfix" id="submenueFrame">
															<ul id="submenueContent">
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

<!-- Mobile Navigation -->

				<div id="mobile-nav" class="container-fluid">
					<div class="row">
						<div class="col-3">
							<a href="index.html" class="logo-link">
								<img src="./src/img/Logo performance hd.png" alt="Altersis Performance logo">
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
