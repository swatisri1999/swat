<?php
require_once "pdo.php";
    if (isset($_POST['cancel'])) {
        header('Location: index.php');
    }
    elseif (isset($_POST['login'])) {
		if ( isset($_POST['who']) && isset($_POST['pass'])) 
		{
			$e = $_POST['who'];
    $p = $_POST['pass'];
if (!filter_var($e, FILTER_VALIDATE_EMAIL)) {
  echo "Email must have an at-sign (@)";
}

else{
    $sql = "SELECT name FROM users
       WHERE email = '$e'
       AND password = '$p'";

    $stmt = $pdo->query($sql);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    var_dump($row);
    echo "-->\n";
    if ( $row === FALSE ) 
	{
       echo "<h1>Incorrect password.</h1>\n";
    } 
	else 
	{
      header('Location: autos.php');
    }		
	}			
		}
		else
		{
			die("Email and password are required");
		}
	}
?>
<html>
<head>
<title>Swati Srivastava</title>
</head>
<body>
<h1>Please Log In</h1>
<form method="POST">
<label for="nam">User Id</label>
<input type="text" name="who" id="nam"><br/>
<label for="id_1723">Password</label>
<input type="text" name="pass" id="id_1723"><br/>
<input type="submit" name='login' value="Log In">
<input type="submit" name="cancel" value="Cancel">
</form>
</body>
