<?php

session_start();
if($_SESSION['uid'])
{

echo $_SESSION['uname'];
//
session_destroy();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
faculty
<a href="logout.php">logout</a>
</body>
</html>