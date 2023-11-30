<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Assignment 2 PHP</title>
	<meta name="description" content="Assignment 2 Gabriela Ceolin">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./css/bootstrap.min" type="text/css">
	<script src="js.bootstrap.min.js" type="text/javascript"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Roboto&family=Roboto+Condensed&display=swap"
		rel="stylesheet">
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #00b7eb;">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php"><img src="./img/logo.png" alt="header logo"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
							<a class="nav-link active" aria-current="page"
								href="http://localhost/classes/assignment2/index.php">Home</a>
						</li>
                    	<li class="nav-item">
							<a class="nav-link" aria-current="page"
								href="http://localhost/classes/assignment2/add.php">Add Data</a>
						<li class="nav-item">
							<a class="nav-link" aria-current="page"
								href="http://localhost/classes/assignment2/display-person.php">View Database</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" aria-current="page"
								href="http://localhost/classes/assignment2/upload.php">Upload Image</a>
						</li>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
  <main>
    <section class="masthead">
      <div>
        <h1>Students Data</h1>
      </div>
    </section>
    <section class="form-row row" background-color: #white>
      <div class="col-sm-12 col-md-6 col-lg-6">
        <h3>Don't have an account, then sign up below!</h3>
        <form method="post" action="save-admin.php">
          
        	<p><input class="form-control" name="first_name" type="text" placeholder="First Name" required/></p>
        	<p><input class="form-control" name="last_name" type="text" placeholder="Last Name" required /></p>
        	<p><input class="form-control" name="username" type="text" placeholder="Username" required /></p>
        	<p><input class="form-control" name="password" type="password" placeholder="Password" required /></p>
        	<p><input class="form-control" name="confirm" type="password" placeholder="Confirm Password" required /></p>
          <input class="btn btn-light" type="submit" name="submit" value="Register" />
        </form>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6">
        <h3>Already have an account, then sign in below!</h3>
        <form method="post" action="./inc/validate.php">
        	<p><input class="form-control" name="username" type="text" placeholder="Username" required /></p>
        	<p><input class="form-control" name="password" type="password" placeholder="Password" required /></p>
          <input class="btn btn-light" type="submit" value="Login" />
        </form>
      </div>
    </section>
    <section>
    
    </section>
  </main>
<!-- Let's add our footer file. -->
<?php require ('./inc/footer.php'); ?>

