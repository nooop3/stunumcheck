<?php
$con = mysql_connect ( SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);//连接数据库
if(!$con){
  die("服务器连接失败！请检查后重试！");
  }
mysql_query("SET NAMES UTF8");
$select = mysql_select_db(SAE_MYSQL_DB,$con);//选择数据库
/*if(!$select){
  if(mysql_query("CREATE DATABASE contacts",$con)){
    echo "数据库创建成功！";
    }
  else{
    echo "创建数据库失败：".mysql_error();
    }
}*/
  $cre = "CREATE TABLE IF NOT EXISTS stuno2013
  (
  studentID int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY(studentID),
  name varchar(15),
  class varchar(40),
  number text,
  time timestamp
  ) character set =utf8";
  if(mysql_query($cre,$con)){
    echo "表格创建成功";
    } //创建表格
else {
    echo "表格创建失败";
}
mysql_close($con);
?>