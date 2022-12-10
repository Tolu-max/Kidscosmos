<?php 

include("inc/connection.php");

$output = "";

if (isset($_POST['register'])) {
	
	$fname = $_POST['fname'];
	$sname = $_POST['sname'];
	$uname = $_POST['uname'];
	$gender = $_POST['gender'];
	$role = $_POST['role'];
	$pass = $_POST['pass'];
	$c_pass = $_POST['c_pass'];

	$error = array();

	if (empty($fname)) {
		$error['error'] = "Firstname is Empty";
	}else if(empty($sname)){
		$error['error'] = "Surname is empty";
	}else if(empty($uname)){
		$error['error'] = "username is empty";
	}else if(empty($gender)){
		$error['error'] = "Select Gender";
	}else if(empty($role)){
		$error['error'] = "Select role";
	}else if(empty($pass)){
		$error['error'] = "Enter Password";
	}else if(empty($c_pass)){
		$error['error'] = "Confirm Password";
	}else if($pass != $c_pass){
		$error['error'] = "Both password do not match";
	}



	if (isset($error['error'])) {
		$output .= $error['error'];
	}else{
		$output .= "";
	}


	if (count($error) < 1) {
		
		$query = "INSERT INTO users(firstname,surname,username,gender,role,password) VALUES('$fname','$sname','$uname','$gender','$role','$pass')";
		$res = mysqli_query($connect,$query);

		if ($res) {
			$output .= "You have successfully registered";
			header("Location:index.php");
		}else{
			$output .= "Failed to register";
		}
	}
}



 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <title>kidscosmos</title>
    <link href="dist/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="dist/css/pages/authentication.css" rel="stylesheet">
</head>
<body>

	<div class="main-wrapper">
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box">
                <div id="loginform">
                    <div class="logo">
                        <span class="db"><img src="../img/kidscosmos.png" alt="logo" style="width: 50%;"/></span>
                        <h5 class="font-medium m-b-20">Sign In to Admin</h5>
                    </div>
                    <div class="row">
                        <form class="col s12"  name="frmUser" method="Post">

						<div class="text-center"><?php echo $output; ?></div>
                        <div class="row">
                                <div class="input-field col s12">
                                    <input id="username" type="text" class="validate" name="fname" required>
                                    <label for="username">First Name</label>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="surname" type="text" class="validate" name="sname" required>
                                    <label for="surname">last Name</label>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="username" type="text" class="validate" name="uname" required>
                                    <label for="username">Username</label>
                                </div>
                            </div>
                        <label>Select Gender</label>
						<select class="form-select mb-3" aria-label="Default select example" name="gender">
							<option value="">Select Gender</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
                         
                         <label>Select Role</label>
						<select class="form-select mb-3" name="role" aria-label="Default select example">
							<option value="">Select Role</option>
							<option value="Student">Student</option>
							<option value="Teacher">Teacher</option>
						</select>

                        <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate" name="pass" required>
                                             <label for="password">Password</label>
                                         </div>
                                       </div>
                                       <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate" name="c_pass" required>
                                             <label for="password">Confirm Password</label>
                                         </div>
                                       </div>
						<input type="submit" name="register" class="btn btn-success" value="Register">
					</form>
				</div>
			</div>
		</div>
	</div>

    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="dist/js/materialize.min.js"></script>
</body>
</html>