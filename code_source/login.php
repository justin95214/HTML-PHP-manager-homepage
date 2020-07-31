




<?php
        session_start();
    //mysql 접속 계정 정보 설정
    $mysql_host = 'shally.cb9wjppt31tq.ap-northeast-2.rds.amazonaws.com';
    $mysql_user = 'shally_db';
    $mysql_password = 'tmddnWkd';
    $mysql_db = 'shally';
    //connetc 설정(host,user,password)
    $conn = mysql_connect($mysql_host,$mysql_user,$mysql_password);
    //db 연결
    $dbconn = mysql_select_db($mysql_db,$conn);
    //charset UTF8
    mysql_query("set names utf8");

    
    $id = $_GET['id'];
    $pwd = $_GET['pwd'];
    //쿼리문 작성
    $query = "select * from manager where id ='$id'";
    //쿼리보내고 결과를 변수에 저장
    $result = mysql_query($query);
    echo "DB CONNECTED!!!.<br/>";
	echo "$id    $query .<br/>";
 //   while($row = mysql_fetch_array($result)){
//       echo "번호: ".$row[id]."/ pwd: ".$row[pwd]."<br/>";




 //아이디가 있다면 비밀번호 검사
        if(mysqli_num_rows($result)==1) {

                $row=mysqli_fetch_assoc($result);

                //비밀번호가 맞다면 세션 생성
                if($row['pwd']==$pwd){
                        $_SESSION['id']=$id;
                        if(isset($_SESSION['id'])){
                        ?>      <script>
                                        alert("로그인 되었습니다.");
                                        location.replace("second.php");
                                </script>
<?php
                        }
                        else{
                                echo "session fail";
                        }
                }

                else {
        ?>              <script>
                                alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                               // history.back();
                        </script>
        <?php
                }

        }

                else{
?>              <script>
                        alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                        history.back();
                </script>
<?php
        }

    ?>

