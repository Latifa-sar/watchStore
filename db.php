<?php
session_start();
  $name="";
	$username= "";
  $password="";
	$email= "";
	$con = mysqli_connect("localhost","root","","watch");
	if (isset($_POST['reg_user'])) {


        $name = mysqli_real_escape_string($db, $_POST['name']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
        if(empty($name)){ array_push($errors, "Fullname is requiered");}
         if(empty($username)){ array_push($errors, "Username is required");}
          if(empty($email)){ array_push($errors, "Email is required");}
           if(empty($password_1)){ array_push($errors, "Passwoed is required");}


		if ($password_1 != $password_2) {
			 array_push($errors, "Password not match");
		}
         if (count($errors) == 0){
        $password=md5($password_1);
        $query="insert into user(name,username,email,password)Values('$name','$username','$email','$password')";
        mysqli_query($db,$query);

        $_SESSION['username'] = $username;
			$_SESSION['success'] = "Register Successfull";
			header('location: webhtml.php');
}
}
?>
