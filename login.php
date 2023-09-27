<?php
$username = $_POST["user"];
$password = $_POST["pass"];
if ($username == "SparkAdmin" && $password == "p45sw0rd") {
	echo "<center><h1>Welcome, $username! </h1></center>";
    echo "<br><center><h2>Flag: Spark{N3tw0rk_An4ly5is}</h2></center>";
} else {
	$error = "Invalid username or password. Please try again.";
    }
?>