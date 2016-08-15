<?PHP
session_start();
if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
	header ("Location: login3.php");
}

?>

	<html>
	<head>
	<title>Welcome</title>


	</head>
	<body>


<?php echo $_POST['username']; ?>

	
<P>
<A HREF = page2.php>Log out</A>

	</body>
	</html>