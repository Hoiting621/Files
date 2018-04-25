<!DOCTYPE html>

<html>
	<head>
	<body style="background-color:powderblue;">
	<link href="style.css" rel="stylesheet" type="text/css">

		<title>
		
		My Runner APP
		
		</title>
		<meta charset="UTF-8">
		<meta name="description" content="Track your fitness">
		<meta name="keywords" content="HTML,CSS,XML,JavaScript">
		<meta name="author" content="SSD">
		<meta name="viewport" content="width=device-width,
		initial-scale=1.0">
	<strong>
		<center><font size="+2">Welcome to My Runner APP!</font></center>
		</strong>

	</head>
	<body>
	
	<div>
		<br><br><br><br>
		
		<li><a href="{{ action('FitnessController@index') }}"> View Fitness Profile</a></li>
		<bl>
		<li><a href="{{ action('PlansController@index') }}"> View Fitness Plans</a></li>
		<li><a href="{{ action('RoutesController@index') }}"> View Running Routes</a></li>

		
		<br><br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br>
		<footer><p><center> My Runner APP! is an amazing web application for tracking your exercises and improving your health!
		</center></p></footer>


	</div>


		
	</body>
	</body>
	</html>
