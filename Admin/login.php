<?php 
session_start();
  include("inc/connection.php");

   
   $output = "";

  if (isset($_POST['login'])) {
  	   
  	   $uname = $_POST['uname'];
  	   $role = $_POST['role'];
  	   $pass = $_POST['pass'];

  	   if (empty($uname)) {
  	   	
  	   }else if(empty($role)){

  	   }else if(empty($pass)){

  	   }else{

         $query = "SELECT * FROM users WHERE username='$uname' AND role='$role' AND password='$pass'";
         $res = mysqli_query($connect,$query);

         if (mysqli_num_rows($res) == 1) {

         	  if ($role == "Student") {

         	  	$_SESSION['student'] = $uname;
         	  	header("Location: ../User/index.php");
         	  	
         	  }else if($role == "Teacher"){
                
                $_SESSION['teacher'] = $uname;
                header("Location: ../Teachers/index.php");


         	  }else if($role == "Admin"){
                
                $_SESSION['admin'] = $uname;
                header("Location: index.php");


         	  }
         	 $output .= "you have logged-In";
         }else{
             $output .= "Failed to login";
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
                                    <input id="username" type="text" class="validate" name="uname" required>
                                    <label for="username">Username</label>
                                </div>
                            </div> 
                         <label>Select Role</label>
						<select class="form-select mb-3" name="role" aria-label="Default select example">
							<option value="">Selete Role</option>
							<option value="Student">Student</option>
                            <option value="Admin">Admin</option>
							<option value="Teacher">Teacher</option>
						</select>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate" name="pass" required>
                                             <label for="password">Password</label>
                                         </div>
                                       </div>

						<input type="submit" name="login" class="btn btn-success" value="Login">
					</form>
				</div>
			</div>
		</div>
	</div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="dist/js/materialize.min.js"></script>
</body>
</html>