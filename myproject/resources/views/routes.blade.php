<!DOCTYPE html>
<html>
	<head>
		<title>My Runner</title>
	</head>
	<body>
	<body style="background-color:powderblue;">
    <ul>

            <li>Trail: {{$route[1]->routeName}}</li>
            <li>Distance: (in Kilometers): {{$route[1]->distance}}</li>

            <li> Coordinate: {{$route[1]->coordinate}}</li>
            <li>Scenery: {{$route[1]->scenery}}</li>
            <li>Difficulty(1-10): {{$route[1]->difficulty}}</li>
            <li>Popularity Score: {{$route[1]->popularity}}</li>




    </ul>


	</body>	
	</body>
	</html>
