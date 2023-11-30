<?php
  	//}
	// Include database file
	include './inc/database.php';

	//Delete
	if(!empty($_GET['deleteId'])) {
		$deleteId = $_GET['deleteId'];
		$sql = "DELETE FROM students WHERE id = '$deleteId'";
			  //run the query and store the results
			  $result = $conn->query($sql);
		  
	  }
?>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Assignment 2 | Read</title>
		<meta name="description" content="Assignment 2 Gabriela Ceolin">
		<meta name="robots" content="noindex, nofollow">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/style.css">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
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
							<a class="nav-link" aria-current="page"
								href="http://localhost/classes/assignment2/index.php">Home</a>
						</li>
                    	<li class="nav-item">
							<a class="nav-link" aria-current="page"
								href="http://localhost/classes/assignment2/add.php">Add Data</a>
						<li class="nav-item">
							<a class="nav-link active" aria-current="page"
								href="http://localhost/classes/assignment2/display-person.php">View Database</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" aria-current="page"
								href="http://localhost/classes/assignment2/upload.php">Upload Image</a>
						</li>
						</ul>
	
					</div>
				</div>
			</nav>
		</header>
	<?php
	session_start();
	if (!isset($_SESSION['user_id'])) {
		header('location:signin.php');
		exit();
	}
	else {
		//connect to db
		require './inc/database.php';
		//set up query
		$sql = "SELECT * FROM students";
		//run the query and store the results
		$result = $conn->query($sql);
		//start our table
		echo '<section class="person-row">';
		echo '<table class="table table-striped">
						<tr>
							<th>Full Name</th>
							<th>ID</th>
							<th>Grade</th>
							<th>Birthday</th>
						</tr>';
		foreach ($result as $row) {
			echo '<tr>
							<td>' . $row['Name']  . '</td>
							<td>' . $row['ID']  . '</td>
							<td>' . $row['Grade']  . '</td>
							<td>' . $row['Birthday']  . '</td>
							<td><a class="btn btn-warning" href="edit.php?editId= '. $row['ID'] .'">Edit</a></td>
							<td><a class="btn btn-warning" href="display-person.php?deleteId= '. $row['ID'] .'">Delete</a></td>
					</tr>';
			}
		//close the table
		echo '</table>';
		echo '<a class="btn btn-warning" href="logout.php">Logout</a>';
		echo '</section>';

		//disconnect
		$conn = null;
	}
	require './inc/footer.php';
?>
