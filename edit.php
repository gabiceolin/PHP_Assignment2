<?php

// Include database file
include './inc/database.php';


//Edit customer record
if(!empty($_GET['editId'])) {
  $editId = $_GET['editId'];
  $sql = "SELECT * FROM students WHERE id = '$editId'";
		//run the query and store the results
		$result = $conn->query($sql);
    if ($result->rowCount () > 0) {
      $student = $result->fetch(PDO::FETCH_ASSOC);

	}
}


?>


<!DOCTYPE html>
<html lang="en">
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
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
    <section class="masthead">
		<div>
			<h1>Students Data</h1>
		</div>
	</section>
	<main class="container">
		<section class="form-row row justify-content-center">
			<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
				<h2>Create Student</h2>
				<div class="form-group">
					<label for="input1" class="col-sm-2 control-label">Name</label>
					<div class="col-sm-10">
						<input type="text" name="name" class="form-control" id="input1" value="<?php echo $student['Name']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="input2" class="col-sm-2 control-label">ID</label>
					<div class="col-sm-10">
						<input type="text" name="id" readonly class="form-control" id="input2" value="<?php echo $student['ID']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="input3" class="col-sm-2 control-label">Grade</label>
					<div class="col-sm-10">
						<input type="text" name="grade" class="form-control" id="input3" value="<?php echo $student['Grade']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="input4" class="col-sm-2 control-label">Birthday</label>
					<div class="col-sm-10">
						<input type="date" name="birthday" class="form-control" id="input4" value="<?php echo $student['Birthday']; ?>">
					</div>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Submit">
				</div>
			</form>
			<div class="form-group submit-message">
				<?php
            // Update Record in row table
              if(!empty($_POST)) {
                $name = $_POST['name'];
                $id = $_POST['id'];
                $grade = $_POST['grade'];
                $birthday = $_POST['birthday'];
                $sql = "UPDATE students SET Name='$name', Grade='$grade', Birthday='$birthday' WHERE ID='$id'";
								  //run the query and store the results
				$result = $conn->query($sql);
				if ($result) {
					echo "<p>Successfully inserted data</p>";
				} else {
					echo "<p>Failed to insert data</p>";
				}
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>