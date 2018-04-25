<!DOCTYPE html>
<html>
	<head>
		<title>My Runner</title>
	</head>
	<body>
	<body style="background-color:powderblue;">

	<form action="<?php echo e(route('user.store')); ?>" method="POST">

	
	<?php if($errors->has('name')): ?>
	<ul>
	<?php $__currentLoopData = $errors->get('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<li><?php echo e($error); ?></li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
	<?php endif; ?>

	
	<?php if($errors->has('email')): ?>
	<ul>
	<?php $__currentLoopData = $errors->get('email'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<li><?php echo e($error); ?></li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
	<?php endif; ?>
	
	<?php if($errors->has('password')): ?>
	<ul>
	<?php $__currentLoopData = $errors->get('password'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<li><?php echo e($error); ?></li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
	<?php endif; ?>

		
	<?php if($errors->has('password2')): ?>
	<ul>
	<?php $__currentLoopData = $errors->get('password2'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<li><?php echo e($error); ?></li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
	<?php endif; ?>


	<li>Name <input value="<?php echo e(old('name')); ?>" 
	type="text" name="name" id="name"></li>
    <bl><bl>
    <li>Email <input value="<?php echo e(old('email')); ?>"
	 type="text" name="email" id="email"></li>
    <bl><bl>
	<li>Password <input type="password" name="password" id="password"></li>
	<input type="hidden" name="hidden" value="value">
    <bl><bl>
    <li>Repeat Password <input type="password" name="password2" id="password2"></li>
	<input type="hidden" name="hidden2" value="value2">
		
	<button type="submit">Create Account</button>
	<?php echo e(csrf_field()); ?>


	</form>



	</body>
	</body>
	</html>
