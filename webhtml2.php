<?php include('db.php') ?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" href="webcss.css">
  </head>
  <body>
    <div class="<container">
        <nav>
        <ul class="navbar">
        <li class="navbar-item">
<a class="navbar-link" href="webhtml.html">الرئيسة</a>
        </li>
        <li class="navbar-item">
<a class="navbar-link" href="#">تسجيل الدخول</a>
        </li>
        <li class="navbar-item">
<a class="navbar-link" href="webhtml3.html">ساعات نسائية</a>
        </li>
        <li class="navbar-item">
<a class="navbar-link" href="webhtml4.html">ساعات رجالية</a>
        </li>
        </ul>
      </nav>
      <div class="logo">
<img src="https://e.top4top.io/p_17828ik380.png" alt="logo" height="300">
      </div>
    </div>
    <div class="header"
      <p>تسجيل الدخول</p>
    </div>
      </div>


    <br>

<div class="enter">
  <center>
    <div class="Register">
  <h2> ادخل بياناتك</h2>
</div>
        <form method="post" action="webhtml2.php">
          <div class="input">
      <label>Full_Name</label>
    <input type="text" name="name"  value="<?php echo $name?>">
          </div>
              <div class="input">
              <label>User_Name</label>
      			<input type="text" name="username"  value="<?php echo $username; ?>">
                  </div>
      		 <div class="input">
      			<label>E_Mail</label>
      			<input type="email" name="email"  value="<?php echo $email; ?>">
              </div>
                    <div class="input">
              <label>Password</label>
      			<input type="password" name="password_1"  value="<?php echo $password; ?>">
            </div>
                         <div class="input">
      		<label>Re_Password</label>
      			<input type="password" name="password_2" >
              </div>
              <div>
              <button type="submit"class="btn" name="reg_user">Register</button>
      		</div>
      		<p>
      			   Have Acount?<a href="webhtml.php">Login</a>
      		</p>
      	</form>
        <center>
</div>

  </body>
</html>
