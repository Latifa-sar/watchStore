<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>الرئيسية</title>
    <style>
        #time {
            display: table;
            margin: 100px auto;
            text-align: center;
        }

        #time li {
            float: left;
            display: inline-block;
            background: #555555;
            border: 3px solid #d9e4dd;
            padding: 30px;
            font-size: 30px;
            color: #cdc9c3;
        }
    </style>
    <link rel="stylesheet" href="webcss.css">
  </head>
  <body>
    <div class="<container">
      <nav>
        <ul class="navbar">
        <li class="navbar-item">
<a class="navbar-link" href="#"> الرئيسة</a>
        </li>
        <li class="navbar-item">
<a class="navbar-link" href="webhtml2.php">تسجيل الدخول</a>
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
    <div class="header"
      <p>الرئيسة</p>
    </div>
    <br>
    <center>
    <div class="soon">
        <img src="https://h.top4top.io/p_1793fv6kd1.png" width="800" height="400" alt="قريبا" style="border:var(--secndary_color) 5px solid;">
    </div>
<center>
<div class="pragraph">
  <p>من هنا يبدأ الوقت<br>
 نجعل الوقت واضحاً بدمج التراث الحاضر و المستقبل </p></div>
 <ul id="time">
     <li id="h"></li>
     <li id="m"></li>
     <li id="s"></li>
     <li id="t"></li>
 </ul>
 <script>
     var h = document.getElementById("h"),
         m = document.getElementById("m"),
         s = document.getElementById("s"),
         t = document.getElementById("t"),
         type = "AM";
     //myTime();
     function myTime() {
         "use strict";
         var time = new Date(),
             hours = time.getHours(),
             minutes = time.getMinutes(),
             seconds = time.getSeconds();
         h.innerText = hours;
         m.innerText = minutes;
         s.innerText = seconds;
         t.innerText = type;
         if (hours > 12) {
             type = "PM";
             hours -= 12;
         }
         if (hours < 10) {
             hours = "0" + hours;
         }
         if (minutes < 10) {
             minutes = "0" + minutes;
         }
         if (seconds < 10) {
             seconds = "0" + seconds;
         }
         h.innerText = hours;
         m.innerText = minutes;
         s.innerText = seconds;
         t.innerText = type;

     }

     setInterval(myTime, 1000);
  </script>
 <div class="footer">
     <div class="footer-center" dir="ltr" >
         <br></br>
         <p id="a">"لطلب من منتجاتنا الرائعة فضلا تواصل معنا"</p>
         </div>
         <div class="footerT" >
     <a id="a"href="mailto:rafaalmohimeed@gmail.com" target="_blank">الايميل </a>
     <br></br>

     <a id="a"href="https://wa.me/+966544378776" target="_blank">واتس اب</a>
         </div>
</div>
  </body>
</html>
