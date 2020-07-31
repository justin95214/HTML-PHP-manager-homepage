<?php include_once('./check.php'); ?>
<!DOCTYPE HTML>
    <head>
  <link rel="shortcut icon" type="image/x-icon" href="shallyGG.png">

        <title>MAIN PAGE</title>
        <meta charset="utf-8">

	
<!-- 구글 웹 폰트 -->
    <link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">
    <style type="text/css">

     a:link {  font-weight: bolder; color: blue; font-size : 60px;  text-decoration: none;}
     a:visited { font-weight: bolder;  color: blue; font-size : 60px; text-decoration: none;}
     a:hover { font-weight: bolder;  color: blue; font-size : 60px;  text-decoration: underline;}


    body
    {

        background-repeat :no-reapt;
        background-size : cover;
        color: black;
      font-family: 'Nanum Brush Script', cursive;
    }
	div{
	color : blue; font-size : 60px;
	}

        li
        {
        color : #FFFFFF;
        }
        #container {color : blue; font-size : 60px;}
    </style>
<!-- 웹 폰트 끝 -->
  
    </head>
    <body background = 'https://shally.co.kr/upload/banner/banner3.jpg'>



        <h2> 
	<form action='logout1.php' method ='get'>
	<button type = "submit">logout</button>
	</form>
	</h2>
        <p> MAKE</p>

	<div>
	<?php
        print "welcome $account !!!!!!!!!!!!!!!<br>";
        ?>
	</div>


	  <div class="loginform">
      <ul>
         <li><a href="first.php">보류사항</a></li>
        <li><a href="test.php">DB접근</a></li>
	<li><a href="test.php">결제관리</a></li>
	<li><a href="messagelist.php">메세지 관리</a></li>
	<li><a href="">고객관리</a></li>
	<li><a href="https://manage.shally.co.kr/pay">대여 관리</a></li>
        <li><a href="eventsearch.php"> 상품검색</a></li>

      </ul>
    </div>





 </body>
</html>

