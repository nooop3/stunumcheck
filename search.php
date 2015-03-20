<!DOCTYPE HTML>
<?php
//连接数据库
$con = mysql_connect ( SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if (!$con) {
    die("服务器连接失败！请检查后重试！");
}
//选择数据库
mysql_select_db(SAE_MYSQL_DB, $con);
mysql_query("SET NAMES UTF8");
//$q replace $_POST[name]
$q     = $_GET["name"];
//stuno2012、stuno2011 replace $_POST[grade]
echo "<tr>
				<th>".$q."</th><th>院系</th><th>学号</th></tr>";
for($i=1,$j=0;$i<=3;$i++)
{
$grade = "stuno201".$i;
$sql   = mysql_query("SELECT * FROM $grade  WHERE name='$q'", $con); //数据查询 
$ins   = mysql_query("INSERT INTO records(name,class,number) SELECT name,class,number FROM $grade WHERE name='$q'", $con);
if ($sql) {
while ($row = mysql_fetch_array($sql)) {	
		 $j++;
    echo "<tr><th>" . $j. "</th><th>" . $row['class'] . "</th><th>" . $row['number'] . "</th></tr>";   
}
}
}
//关闭数据库连接
mysql_close($con);
?>