
<?php include_once('./check.php'); 

    $s = mysql_connect("shally.cb9wjppt31tq.ap-northeast-2.rds.amazonaws.com", "shally_db", "tmddnWkd") or die("실패입니다.");
    print "접속 OK!<br>";
    mysql_select_db("shally");
    print "datebase access Ok!<br>";
    mysql_query("set names utf8");


$search=$_GET['search'];
print "search value $search<br>";

$re = mysql_query("show full columns from $search");

$column_name = array();

 //$column_name[] =$result[0];

  while ($result = mysql_fetch_array($re)) {
	 $column_name[] =$result[0];
	}    
 //   echo '<table>';
	echo " $column_name <br>";
      //  echo '<tr>';
	
    //    echo '<td>'.$result[0].'</td>';


     //   echo '</tr>';



       /// echo '</table>';
    

$column_data=array();

$ret=mysql_query("select * from $search");

while($rows=mysql_fetch_array($ret)){

for($i=0;$i<count($column_name);$i++){

$column_data[]=$rows[$i];

}

}

?>
<body>

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
