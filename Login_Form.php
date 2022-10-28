<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<body>
	<div class="container w-25">
		<div class="card mt-5 text-center">
			<div class="card-body">
				<i class="fa-regular fa-circle-user fa-7x"></i>

				<br>

				<form method="post">

					<select class="form-select form-control mt-3" aria-label="userStatus" name="userType">
						<option value="Admin" selected>Admin</option>
						<option value="Content Manager">Content Manager</option>
						<option value="System User">System User</option>
					</select>

					<input type="text" class="form-control mt-3" name="userName" placeholder="Enter your Username">

					<input type="password" class="form-control mt-3" name="userPass" placeholder="Enter your Password">
					<button type="submit" class="btn btn-primary mt-3 w-100" name="signIn">Sign In</button>
				
				</form>
				<?php
					$usersArr = array(
						array(
							'type' => 'Admin',
							'Username' => 'Admin',
							'Password' => 'pass123',
						),
						array(
							'type' => 'Content Manager',
							'Username' => 'pepito',
							'Password' => 'manaloto',
						),
						array(
							'Username' => 'juan',
							'Password' => 'delacruz',
						),
							array(
						'type' => 'System User',
						'Username' => 'pedro',
						'Password' => 'penduko',
						)
					);

					if(isset($_POST['signIn'])){

						$status = $_POST['userType'];
						$name = $_POST['userName'];
						$pass = $_POST['userPass'];

						if($status === $usersArr[0]['type']){
							if($name === $usersArr[0]['Username']){
								if($pass === $usersArr[0]['Password']){
									echo
									'<div class="alert alert-success mt-3" role="alert">
  										Welcome to the System: ' . $name .'
  									</div>';
								}
								else{
									echo
									'<div class="alert alert-danger mt-3" role="alert">
  										Invalid Username or Password!
  									</div>';
								}
							}
							else{
								echo
								'<div class="alert alert-danger mt-3" role="alert">
  								Invalid Username or Password!
  								</div>';
							}
						}
						elseif($status === $usersArr[1]['type']){
							if($name === $usersArr[1]['Username']){
								if($pass === $usersArr[1]['Password']){
									echo
									'<div class="alert alert-success mt-3" role="alert">
  										Welcome to the System: ' . $name .'
  									</div>';
								}
								else{
									echo
									'<div class="alert alert-danger mt-3" role="alert">
  										Invalid Username or Password!
  									</div>';
								}
							}
							else{
								echo
								'<div class="alert alert-danger mt-3" role="alert">
  								Invalid Username or Password!
  								</div>';
							}
						}
						elseif($status === $usersArr[1]['type']){
							if($name === $usersArr[2]['Username']){
								if($pass === $usersArr[2]['Password']){
									echo
									'<div class="alert alert-success mt-3" role="alert">
  										Welcome to the System: ' . $name .'
  									</div>';
								}
								else{
									echo
									'<div class="alert alert-danger mt-3" role="alert">
  										Invalid Username or Password!
  									</div>';
								}
							}
							else{
								echo
								'<div class="alert alert-danger mt-3" role="alert">
  								Invalid Username or Password!
  								</div>';
							}
						}
						elseif($status === $usersArr[3]['type']){
							if($name === $usersArr[3]['Username']){
								if($pass === $usersArr[3]['Password']){
									echo
									'<div class="alert alert-success mt-3" role="alert">
  										Welcome to the System: ' . $name .'
  									</div>';
								}
								else{
									echo
									'<div class="alert alert-danger mt-3" role="alert">
  										Invalid Username or Password!
  									</div>';
								}
							}
							else{
								echo
								'<div class="alert alert-danger mt-3" role="alert">
  								Invalid Username or Password!
  								</div>';
							}
						}
						else{
							echo
							'<div class="alert alert-danger mt-3" role="alert">
  							Invalid Username or Password!
  							</div>';
						}
					}
				?>
			</div>
		</div>
	</div>

</body>
</html>