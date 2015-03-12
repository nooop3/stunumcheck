<?php
//连接数据库
$con = mysql_connect("localhost", "root", "asdf");
if (!$con) {
    die("服务器连接失败！请检查后重试！");
}
//选择数据库
mysql_select_db("contacts", $con);
mysql_query("SET NAMES UTF8");
//$q replace $_POST[name]
$q     = $_GET["name"];
//stuno2012、stuno2011 replace $_POST[grade]
for($i=1;$i<=3;$i++)
{
$grade = "stuno201".$i;
$sql   = mysql_query("SELECT * FROM $grade  WHERE name='$q'", $con); //数据查询 
$ins   = mysql_query("INSERT INTO records(name,class,number) SELECT name,class,number FROM $grade WHERE name='$q'", $con);
if ($sql) {
while ($row = mysql_fetch_array($sql)) {
    echo "<p>" . $q . "同学的学号是：" . $row['number'] . "<br/>院系信息：" . $row['class'] . "</p>";
}
}
}
//关闭数据库连接
mysql_close($con);
?>