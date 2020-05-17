<?php
	require_once "pdo.php";
    if (isset($_POST['logout'])) {
        header('Location: index.php');
    }
    elseif (isset($_POST['add'])) 
	{
    if(isset($_POST['year']) && isset($_POST['mileage']))
	 { if ( isset($_POST['make'])){
		 $a=is_numeric($_POST['year']);
		$b=is_numeric($_POST['mileage']);
		if($a and $b){
    $sql = "INSERT INTO autos (make, year, mileage) 
              VALUES (:make, :year, :mileage)";
    echo("<pre>\n".$sql."\n</pre>\n");
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':make' => $_POST['make'],
        ':year' => $_POST['year'],
        ':mileage' => $_POST['mileage']));
		/*$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
		if($rows===true)
		{
			echo("Record Inserted");
		}*/
		}
		else
		{
			echo "Mileage and year must be numeric";
		}
	 }
	 else
	 {
		 echo("Make is required");
	 }
	 }
	}

?>
<html>
<head>
<title>Swati Srivastava</title>

</head>
<body>
<div class="container">
<h1>Tracking Autos </h1>
<form method="post">
<p>Make:
<input type="text" name="make" size="60"/><required></p>
<p>Year:
<input type="text" name="year"/></p>
<p>Mileage:
<input type="text" name="mileage"/></p>
<input type="submit" name='add' value="Add">
<input type="submit" name="logout" value="Logout">
</form>

<h2>Automobiles</h2>
<ul>
<p>
</ul>
</div>
</body>
</html>
