<!DOCTYPE html>
<html lang="ko">

 
  <head>
  <link rel="shortcut icon" type="image/x-icon" href="shallyB.png">

    <title>LOGIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/login.css">
 
<!-- 링크 색상 없애기 -->
    <style type="text/css">
     a:link { color: black; font-size : 60px;  text-decoration: none;}
     a:visited { color: black; font-size : 60px; text-decoration: none;}
     a:hover { color: black; font-size : 60px;  text-decoration: underline;}
    </style>
 
<!-- 구글 웹 폰트 -->
    <link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">
    <style type="text/css">

 //   .loginbutton div{max-width :100%; max-height : 100% ; }

    body
    {
	
	background-repeat :no-reapt;
	background-size : cover;
	color: white;
      font-family: 'Nanum Brush Script', cursive;
    }
	li
	{
	color : white;
	}
	#container {color : white; font-size : 40px;}
	
	input.img-button {
        background: url( "shallyG.png" ) no-repeat;
        border: none;
        width: 60px;
        height: 60px; 
        cursor: pointer;
      }
    </style>
<!-- 웹 폰트 끝 -->
  </head>
 
 
  <body background ="https://shally.co.kr/upload/banner/banner2.jpg"; >



	 <?php 
	
    //mysql 접속 계정 정보 설정
    $mysql_host = 'shally.cb9wjppt31tq.ap-northeast-2.rds.amazonaws.com';
    $mysql_user = 'shally_db';
    $mysql_password = 'tmddnWkd';
    $mysql_db = 'shally';
    //connetc 설정(host,user,password)
    $conn = mysql_connect($mysql_host,$mysql_user,$mysql_password) or die("failed");
    //db 연결
    $dbconn = mysql_select_db($mysql_db,$conn);
    //charset UTF8
    mysql_query("set names utf8");
    //쿼리문 작성
    $query = "select * from manager order by number desc";
    //쿼리보내고 결과를 변수에 저장
    $result = mysql_query($query);
    echo "DB CONNECTED!!!.<br/>";
 //   while($row = mysql_fetch_array($result)){
//       echo "번호: ".$row[id]."/ pwd: ".$row[pwd]."<br/>";
   
    ?>

    <!-- 음악 컨트롤러 -->
    <div id="sound">
      <audio controls preload="metadata">
        <source src="a.mp3" type="audio/mp3" autoplay controls>
      </audio>
    </div>


	   <!-- 로그인 폼 CSS -->
      <div id="loginer">
        <div id="form" align = "center">
          <form action="login1.php" method="GET" enctype="multipart/form-data">
         
              <legend>LOGIN !</legend>
              <input type="text" name="id" placeholder="Enter Your ID" style=" width:200px; height:50px; font-size:20px ">

                <input type="password" name="pwd" placeholder="Enter Your Password" style=" width:200px; height:50px; font-size:20px ">

              <br><br>
		<div class = "loginbutton">
              <input type="image"  src = "shallyG.png" width = '60' height ='60'  onmouseover="this.src='shallyZ.png'" onmouseout="this.src='shallyG.png'"></input>
		</div>
              <br>
              You Don't Have Your Account? DM to JAMES Push the icon	 <a href="https://www.instagram.com/95doo/?hl=ko"><img src="shallyB.png"   width = '30' height = '30'></a>
           
          </form>
        </div>
      </div>


    <!-- 로그인 만들기 -->
    <div class="loginform">
      <ul>
	 <li><a href="first.php">login</a></li>
	<li><a href="https://business.facebook.com/shallyweshare/?business_id=2289647074635056">facebook</a></li>
        <li><a href="https://shally.co.kr/#/_"> Shally site</a></li>
      </ul>
    </div>
    <!-- 제휴 기업 -->
    <div class="sharing">
      <div> 제휴 기업 </div>
    </div>
 
    <!-- 위로가기 버튼 (오른쪽 하단에 고정) -->
    <div style="position: fixed; bottom: 5px; right: 5px;">
      <a href="#top"><img src="imeages/top.png" title="위로"></a>
    </div>
 
    <div id="container">
      <!-- 상단 메뉴 바 -->
      <div id="headbar">
        <ul color : #FFFFFF;>
          <li id="top"><a href="index.html">HOME</a></li>
          <li><a href="about.html">ABOUT</a></li>
          <li><a href="support.html">SUPPORT</a></li>
        </ul>
      </div>
       
      <!-- 하단 -->
      <div id="footer">
        <p align="center">&copy; Copyright shallyspot</p>
      </div>
    </div>
  </body>
</html>
