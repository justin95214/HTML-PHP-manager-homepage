<?php
    @session_start();

    $ok_account1 = "james";
    $ok_account2 = "jde55";
    $ok_account3 = "chlwodnd304";
    //로그인 체크
    $flag = false;
    $account = $_SESSION['id'];
 

	if($account == $ok_account1 || $account ==$ok_account2  || $account ==$ok_account3 ){
		$flag = true;
		
	}

    //로그인이 되지 않았을 때
    if (!$flag) {
        echo "<html><body><h1>NOT LOGIN</h1>";
        echo '<a href="./first.php"> back to login page test</a>';
        echo "</body></html>";
        exit;
    }
?>
