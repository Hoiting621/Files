<!DOCTYPE html>
<html>
	<head>
		<title>My Runner</title>
	</head>
	<body>
	<body style="background-color:powderblue;">
    <ul>

            <li>Weight: {{$weights[1]->weight}}</li>
            <li>Height: {{$weights[1]->height}}</li>

            <li>Blood Type: {{$weights[1]->bloodType}}</li>
            <li>Gender: {{$weights[1]->gender}}</li>


    </ul>
	<a href="{{ action('FitnessController@create') }}"> Edit Information</a>


	</body>	
	</body>
	</html>
