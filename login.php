<?php include('db.php') ?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
	<title>Login Form</title>
  <link rel="stylesheet" href="webcss.css">
</head>
<body >
	<div class="<container">
			<nav>
			<ul class="navbar">
			<li class="navbar-item">
<a class="navbar-link" href="webhtml.php">الرئيسة</a>
			</li>
			<li class="navbar-item">
<a class="navbar-link" href="#">تسجيل الدخول</a>
			</li>
			<li class="navbar-item">
<a class="navbar-link" href="webhtml3.php">ساعات نسائية</a>
			</li>
			<li class="navbar-item">
<a class="navbar-link" href="webhtml4.php">ساعات رجالية</a>
			</li>
			<il class="navbar-item">
<a class="navbar-link" href="webhtml5.php">سلة التسوق </a>
</il>
			</ul>
		</nav>
		<div class="logo">
<img src="https://e.top4top.io/p_17828ik380.png" alt="logo" height="300">
		</div>
	</div>
	<div class="header">
		<p>تسجيل</p>
	</div>


	<div class="enter">
	  <center>
	    <div class="Register">
	  <h2> ادخل بياناتك</h2>
	</div>
  <form method="post" action="login.php">
     <?php include('weberrors.php'); ?>
     <div class="input">
     <label>Username</label>
   <input type="text" name="username"  value="<?php echo $username; ?>">
         </div>

           <div class="input">
     <label>Password</label>
   <input type="password" name="password"  value="<?php echo $password; ?>">
   </div>

     <button type="submit" class="btn" name="login">Login</button>

     <p>
       Not have acount?<a href="webhtml2.php">Sign_Up</a>
 </p>
</form>
<center>
</div>
<div class="footer">
		<div class="footer-center" dir="ltr" >
				<br></br>
		<p id="a">“Never give up on a dream just because of the time it will take to accomplish it. The time will pass anyway.”</p>
		</div>
		<div class="footerT" >
<a id="a"href="mailto:rafaalmohimeed@gmail.com" target="_blank">تواصل معنا عبر الايميل </a>
<br></br>

<a id="a"href="https://wa.me/+966544378776" target="_blank">تواصل معنا عبر واتساب</a>
		</div>
</body>
</html>
