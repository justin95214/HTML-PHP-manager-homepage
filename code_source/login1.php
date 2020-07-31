<?php
 
       @session_start();
 
        $connect = mysqli_connect("shally.cb9wjppt31tq.ap-northeast-2.rds.amazonaws.com", "shally_db", "tmddnWkd","shally") or die("fail");
 
        //입력 받은 id와 password
        $id=$_GET['id'];
        $pw=$_GET['pwd'];
 
        //아이디가 있는지 검사
        $query = "select * from manager where id='$id'";
        $result = $connect->query($query);
 
 
        //아이디가 있다면 비밀번호 검사
        if(mysqli_num_rows($result)==1) {
 
                $row=mysqli_fetch_assoc($result);
 
                //비밀번호가 맞다면 세션 생성
                if($row['pwd']==$pw){
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
                                history.back();
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

