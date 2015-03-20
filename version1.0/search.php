<!DOCTYPE HTML>
<?php
$con = mysql_connect ( SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);//连接数据库
if(!$con){
  die("服务器连接失败！请检查后重试！");
  }
  mysql_select_db(SAE_MYSQL_DB,$con);//选择数据库
  mysql_query("SET NAMES UTF8");
  //$q replace $_POST[name]
  $q = $_GET["name"];    
  //stuno2012、stuno2011 replace $_POST[grade]
  $grade = $_GET["grade"];
  $sql = mysql_query("SELECT * FROM $grade WHERE name='$q'",$con);//数据查询 
  $ins = mysql_query("INSERT INTO records(name,class,number) SELECT name,class,number FROM $grade WHERE name='$q'",$con);
  if(!mysql_num_rows($sql)){
    mysql_query("INSERT INTO records(name) VALUES ('$q')",$con);
  };
mysql_close($con);//关闭数据库连接

          while($row = mysql_fetch_array($sql)){
            echo "<p>".$q."同学的学号是：".$row['number']."<br/>院系信息：".$row['class']."</p>";
            }
          if(!mysql_num_rows($sql)){
            echo "<p>"."对不起，没有查到该同学，换年级试试？"."<p/>";
            };
                    ?>