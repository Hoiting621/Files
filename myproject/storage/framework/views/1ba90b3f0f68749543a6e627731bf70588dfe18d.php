<!DOCTYPE html>
<html>
	<head>
		<title>My Runner</title>
	</head>
	<body>
	<body style="background-color:powderblue;">
    <ul>

            <li>Weight: <?php echo e($weights[1]->weight); ?></li>
            <li>Height: <?php echo e($weights[1]->height); ?></li>

            <li>Blood Type: <?php echo e($weights[1]->bloodType); ?></li>
            <li>Gender: <?php echo e($weights[1]->gender); ?></li>


    </ul>
	<a href="<?php echo e(action('FitnessController@create')); ?>"> Edit Information</a>


	</body>	
	</body>
	</html>
