<!DOCTYPE html>
<html>
	<head>
		<title>My Runner</title>
	</head>
	<body>
	<body style="background-color:powderblue;">
    <form action="{{ action('FitnessController@create2') }}" method="POST">
    {{ csrf_field() }}
    

            <li>Current Weight {{$weights[1]->weight}}</li>
            <li> Weight<input value="{{ old('weight')}}"
	 type="text" name="weight" id="weight">	</li>
            <li>Current Height {{$weights[1]->height}}</li>
            <li> Height (in meters)<input value="{{ old('height')}}"
	 type="text" name="height" id="height">	</li>

            Blood Type<select name="bloodType">
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="AB">AB</option>
    <option value="O" >O</option>
    </select>
            <li>
            Gender<select name="Gender">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Prefer not to answer">Prefer Not to Answer</option>
    </select>
    </li>


    <button type="submit">Update</button>

    </form>


	</body>	
	</body>
	</html>