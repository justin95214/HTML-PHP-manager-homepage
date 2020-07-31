<?php
    print "<br><a href='eventsearch.php'>이벤트 검색으로 이동</a>";
    print "<br><a>로그아웃을 생활화합시다</a>";
    print "<br><a href='second.php'>로그아웃하러가기</a><br>";

print "관리자 : manager / 쉘리고객 : member / 상품 : goods / 메세지 : message / 리뷰 : review<br>";
?>

 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">

 <style>
      body {
        font-family: Consolas, monospace;
        font-family: 12px;
      }
      table {
//        width: 100%;
        //table-layout : fixed;
        //word-break: breal-all;
      }
      th, td, tr {
        padding: 10px;
        border : 1px solid #444444;
      }
    </style>

    </head>
    <body>
    <table>
        <form name="frm" method="post">
            <tr>
                <td>table search</td>
                <td>
                    <input type="text" name="search" value='<?=$_REQUEST['search']?>'>
                    <input type="submit" value="search">
                </td>
            </tr>
        </form>
    </table>
    </body>

</html>

<?php include_once('./check.php');

    $connect = mysql_connect("shally.cb9wjppt31tq.ap-northeast-2.rds.amazonaws.com", "shally_db", "tmddnWkd") or die("실패입니다.");
    print "접속--------------------------------------------------->>  OK!<br>";
    mysql_select_db("shally");
//    print "datebase access----------------------------------------->> Ok!<br>";
    mysql_query("set names utf8");

$search=$_REQUEST['search'];

echo $search;
  print "<br>";


 $ret=mysql_query("SHOW TABLES");

 //echo '<form>';
   //     echo '<select>'

while($rows=mysql_fetch_array($ret)){
//	$i = 0;
//	$num =1;
//	$i = $i + $num;
  //      $column_name[]=$rows[8]."(".$rows[0].")";
        echo '<td>'.$rows[0].'</td>';
	echo '/';   
 }
//	 echo '</select>';
  //      echo '</form>';


    $column_name=array();
    $ret=mysql_query("SHOW FULL COLUMNS FROM $search");

  echo '<table>';
        echo '<tr>';

  while($rows=mysql_fetch_array($ret)){
        $column_name[]=$rows[8]."(".$rows[0].")";

        echo '<td>'.$rows[0].'</td>';

    }
echo '</tr>';
  //      echo '</table>';


    $column_data=array();
    $ret=mysql_query("select * from $search");


// echo '<table>';



    while($rows=mysql_fetch_array($ret)){
  echo '<tr>';

        for($i=0;$i<count($column_name);$i++){

      echo '<td width ="250">'.$rows[$i].'</td>';

//      echo $rows[$i];

         }
echo '</tr>';
    }
 echo '</table>';

?>
