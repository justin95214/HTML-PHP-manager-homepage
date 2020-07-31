
<?php include_once('./check.php');

    $s = mysql_connect("shally.cb9wjppt31tq.ap-northeast-2.rds.amazonaws.com", "shally_db", "tmddnWkd") or die("실패입니다.");
    print "접속--------------------------------------------------->>  OK!<br>";
    mysql_select_db("shally");
//    print "datebase access----------------------------------------->> Ok!<br>";
    mysql_query("set names utf8");
	$email = $_GET["email"];
	$start = $_GET["start"];
	$end = $_GET["end"];
	$slash = "/";
	echo $email.$slash;
	echo $start.$slash.$end;	
    $re = mysql_query("SELECT m.id ,m.name,m.phone, gd.idx, gd.name , gdp.original, gdp.insert_time FROM goods AS gd,  goods_photo AS gdp , member AS m WHERE m.idx = gd.member_idx AND gd.idx = gdp.goods_idx AND date_format(gdp.insert_time, '%Y-%m-%d')BETWEEN '$start' AND '$end'");
	print "<br>";
  //  print "search------>>loading------------------------------------>> Ok!<br>";
echo '<img src="dobaeC.png" width="100%" height="300">';
    $column_name=array();
 echo '<table>';

        echo '<tr>';

        echo '<td width ="250">email</td>';
        echo '<td width ="80">name</td>';
       echo '<td  width ="200">phone</td>';
        echo '<td width ="250">product ID</td>';
        echo '<td width ="470">product</td>';
        echo '<td width ="250">upload image</td>';
       echo '<td width ="250">upload date</td>';

	echo '</tr>';
	echo '</table>';

echo'<div style="width:100%; height:1000px; overflow:auto">';
   
	 while ($result = mysql_fetch_array($re)) {
	echo'<table>';	
	$date = substr($result[6],0,10);	
	$urlstart = "https://www.shally.co.kr/upload/goods/";
	$url = $urlstart.$result[5];


	echo '<tr>';

	echo '<td width ="250">'.$result[0].'</td>';
	echo '<td width ="80">'.$result[1].'</td>';
	echo '<td  width ="200">'.$result[2].'</td>';
	echo '<td width ="250">'.$result[3].'</td>';
	echo '<td width ="500">'.$result[4].'</td>';
	echo '<td width ="250"><img src="'.$url.'" width =250 height =250/></td>';
	echo '<td width ="250">'.$date.'</td>';



	echo '</tr>';


echo '</div>';
	echo '</table>';
 
    }
    mysql_close($s);
    print "<br><a href='eventsearch.php'>검색화면으로</a>";
	print "<br><a>로그아웃을 생활화합시다</a>";
	print "<br><a href='second.php'>로그아웃하러가기</a>";



 




$search=$_GET[search];

if($search){

$column_name=array();

$ret=mysql_query("desc $search");

while($rows=mysql_fetch_array($ret)){

$column_name[]=$rows[0];

}



$column_data=array();

$ret=mysql_query("select * from $search");

while($rows=mysql_fetch_array($ret)){

for($i=0;$i<count($column_name);$i++){

$column_data[]=$rows[$i];

}

}



}





?>




<script>


 
function fn_s(){

 location.href="list.php?search="+document.frm.search.value;

}

</script>


<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Employees</title>
    <style>
      body {
        font-family: Consolas, monospace;
        font-family: 12px;
	background : #F8ECE0;
	
      }
      table {
        width: 100%;
	background : #D8D8D8;
	font-size : 15px;
	//table-layout : fixed; 
//	word-break: breal-all;
      }
      th, td, tr {
	padding: 10px;
        border : 1px solid  #F8ECE0;
      }
    </style>
  </head>
<body>

<table>

<form name="frm" method="get" action="search.php">

	<tr>

		<td>table search</td>

		<td>

		<input type="text" name="search">
		<button type="submit">search</button>
	

		</td>

	</tr>	

</form>

</table>

<table border="1">

	<tr>

	<?for($i=0;$i<count($column_name);$i++){?>

		<td><?=$column_name[$i]?></td>

	<?}?>

	</tr>

	<tr>

		<?for($j=1;$j<=count($column_data);$j++){?>

		<td><?=$column_data[$j-1]?></td>

		<?if($j%(count($column_name))==0){

			?>

			</tr><tr>

			<?}}?>

	</tr>



</table>



</body>

</html>

