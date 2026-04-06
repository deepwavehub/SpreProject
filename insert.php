<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact | Sprevonix</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styles.css" />
</head>
<body>
    <header class="site-header">
    <div class="container nav-wrap">
      <a class="logo" href="index.html"><span class="logo-mark">S</span><span>Sprevonix</span></a>
      <button class="nav-toggle" aria-label="Open menu">☰</button>
      <nav class="site-nav">
        <a href="index.php">Home</a>
        <a href="about.php" class="active">About</a>
        <a href="services.php">Services</a>
        <a href="portfolio.php">Portfolio</a>
        <a href="contact.php">Contact</a>
        <a href="admin.php" class="btn btn-outline small">Admin</a>
      </nav>
    </div>
  </header>
<?php

		// servername => sprenvonixdatabase.cg3qee2cupk4.us-east-1.rds.amazonaws.com
		// username => admin
		// password => wavelearning12%
		// database name => contactdb
        // table name = > customer
        
		$conn = mysqli_connect("sprenvonixdatabase.cg3qee2cupk4.us-east-1.rds.amazonaws.com", "if0_36247731", "admin", "wavelearning12%", "contactdb");
		//$conn = mysqli_connect("localhost", "root", "root", "test2");

		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 4 values from the form data(input)
		$fullName = $_REQUEST['fullName'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$message = $_REQUEST['message'];
       
		
		
		// Performing insert query execution
		// here our table name is Customer
        
		$sql = "INSERT INTO Customer VALUES ('$fullName',
			'$email','$phone','$message')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in the database successfully."
				</h3>";

			//echo nl2br("\n$first_name\n $last_name\n "
				//. "$gender\n $address\n $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
