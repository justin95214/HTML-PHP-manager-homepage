
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php 
    $s = mysql_connect("shally.cb9wjppt31tq.ap-northeast-2.rds.amazonaws.com", "shally_db", "tmddnWkd") or die ("실패입니다.");
    print "성공입니다.";
    mysql_close($s);
 ?>

</body>
</html>
