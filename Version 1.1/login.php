<!DOCTYPE html>
<html lang="de">

	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="./src/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	</head>

	<body>

    <!-- NAVIGATIONSLEISTE -->

    <!-- Navigationsleiste Browser -->

        <nav id="header-nav">

          <div class="container" id="desktop-nav">
            <div class="row">
              <div class="container-fluid">

                <a href="index.html" class="logo-link">
                  <img src="./src/img/Logo performance hd.png" alt="Altersis Performance logo">
                </a>
                </div>
              </div>
            </div>

        <!--- Navigationleiste für Mobile --->

          <div class="container" id="mobile-nav">
            <div class="row">
              <div class="col-6">

                <a href="index.html" class="logo-link">
                  <img src="./src/img/Logo performance hd.png" alt="Altersis Performance logo">
                </a>

                <div class="clearfix" id="mobile-nav-dropdown" >

                  <div id="mobile-nav-button"><span>&equiv;</span></div>

                  <div class="clearfix" id="mobile-nav-content">

                  </div>

                </div>

              </div>
            </div>
          </div>
        </nav>

<!-- Registration -->

    <main>
      <section id="login">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2>My Personal Career Plan</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <form action="./parts/loginvalidation.php" method="post" class="center">
                <h3>Login</h3>
                <?php 
                if (isset($_GET['error'])){ ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>           
                <label for="username">Username:</label><br>
                <input type="text" name="username" placeholder="Username" id="username"><br><br>
                <label for="password">Password:</label><br>
                <input type="password" name="password" placeholder="Password" id="password"><br><br>
                <button class="btn btn-secondary" type="submit">Login</button>
              </form>
            </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    </body>

</html>


