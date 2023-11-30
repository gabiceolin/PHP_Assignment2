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
							<a class="nav-link" aria-current="page"
								href="http://localhost/classes/assignment2/display-person.php">View Database</a>
						</li>
                        <li class="nav-item">
							<a class="nav-link active" aria-current="page"
								href="http://localhost/classes/assignment2/upload.php">Upload Image</a>
						</li>
						</ul>
	
					</div>
				</div>
			</nav>
		</header>
    <?php
    $uploadSuccess = false;
    $valid_file = true;
    if (!empty($_POST['submit'])) {
        // Count total files
        $countfiles = count($_FILES['files']['name']);
        // Loop all files
        for ($i = 0; $i < $countfiles; $i++) {
            // File name
            $filename = $_FILES['files']['name'][$i];
            // Location
            $target_file = './uploads/' . $filename;
            // file extension
            $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
            $file_extension = strtolower($file_extension);
            // Valid image extension
            $valid_extension = array("png", "jpeg", "jpg", "pdf");
            if (in_array($file_extension, $valid_extension)) {
                // Upload file
                if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $target_file)) {
                    
                    $uploadSuccess = true;

                }
            } else {
                $valid_file = false;
            }
        }
    }
    ?>
    <section class="masthead">
        <div>
            <h1>Uploading Images</h1>
        </div>
    </section>
    <section class="form-row">
        <form method='post' action='' enctype='multipart/form-data'>
            <p><input type='file' name='files[]' multiple /></p>
            <p><input class="btn btn-dark" type='submit' value='Submit' name='submit' /></p>
        </form>
        <?php
        if ($uploadSuccess) {
            echo "<p>File upload successfully</p>";
        }
        if (!$valid_file) {
            echo "<p>Upload image files only</p>";
        } ?>
        <?php require('./inc/footer.php'); ?>
</body>

</html>