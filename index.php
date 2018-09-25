<?php 
require 'class/Autoloader.php';
Autoloader::register();
session_start(); ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=400, user-scalable=yes">
		<link rel="stylesheet" href="css/simulator.css" />
        <link rel="stylesheet" href="css/simulator_responsive.css" />
		<title>Simulateur de Bataille</title>
	</head>

	<body>
		<h1>Battlefield Simulator</h1>
		<?php 
			
			if (isset($_SESSION['combat']) OR isset($_POST['humain']) AND isset($_POST['animal'])) 
			{
				include("content/Champs_de_bataille.php");
			}
			elseif (isset($_POST['humain']) XOR isset($_POST['animal']) ) 
			{
				echo "<p style ='color:red; text-align:center;'>Tous les combattants n'ont pas été selectionnés !</p>";
				include("content/Selector.php");
			}
			else
			{
				include("content/Selector.php");
			}
		?>
	</body>
</html>


