<?php
	try
	{
	  $dbUrl = getenv('DATABASE_URL');

	  $dbOpts = parse_url($dbUrl);

	  $dbHost = $dbOpts["host"];
	  $dbPort = $dbOpts["port"];
	  $dbUser = $dbOpts["user"];
	  $dbPassword = $dbOpts["pass"];
	  $dbName = ltrim($dbOpts["path"],'/');

	  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

	  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $ex)
	{
	  echo 'Error!: ' . $ex->getMessage();
	  die();
	}
?>
<!DOCTYPE html>
<html>
	<head>
	  <style>
	    * {
		  text-align: center;
		}
	  </style>
	</head>
	<body>
	<script>
	  console.log($_POST["book"]);
	</script>
	  <h1> Scripture Resources Results </h1>
		<?php
			foreach ($db->query('SELECT * FROM scriptures WHERE book ='. $_POST["book"]) as $row)
			{
			  echo '<br><strong>' . $row['book'] . ' ' . $row['chapter'] 
			  . ':' . $row['verse'] . '</strong> - ' . $row['content'];
			}
		?>
	</body>
<html>