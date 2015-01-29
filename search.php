<!DOCTYPE HTML>
<?php
$con = mysql_connect("localhost","root","asdf");//连接数据库
if(!$con){
  die("服务器连接失败！请检查后重试！");
  }
  mysql_select_db("contacts",$con);//选择数据库
  mysql_query("SET NAMES UTF8");
  $sql = mysql_query("SELECT * FROM $_POST[grade] WHERE name='$_POST[name]'",$con);//数据查询 
  $ins = mysql_query("INSERT INTO records(name,class,number) SELECT name,class,number FROM $_POST[grade] WHERE name='$_POST[name]'",$con);
  if(!mysql_num_rows($sql)){
    mysql_query("INSERT INTO records(name) VALUES ('$_POST[name]')",$con);
  };
mysql_close($con);//关闭数据库连接
?>
<html>   
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="zh-cn" />
    <meta name="author" content="zhendezhendong" />
    <meta name="keyeords" content="厦大 学号 查询" />
    <meta name="description" content="只知道同学姓名，想要学号，来这里试试！"/>
    <link rel="stylesheet" type="text/css" href="mystyle.css" />
    <base target="_blank" />
    <title>厦大学号查询系统</title>    
</head>   
<body>
    <div id="header"><h1>欢迎查询厦大学生学号</h1></div>
    <div id="content">
      <div id="input">
        <p style="bottom:0px;">只知道同学姓名，想要学号，来这里试试！</P>
      </div>
      <div id="output">
        <?php 
          while($row = mysql_fetch_array($sql)){
            echo "<p>".$_POST['name']."同学的学号是：".$row['number']."<br/>院系信息：".$row['class']."</p>";
            }
          if(!mysql_num_rows($sql)){
            echo "<p>"."对不起，没有查到该同学，换年级试试？"."<p/>";
            };
        ?>
      </div>
      <div id="declaration">
        <h2>温馨(xin)提示:<h2>
            <ol>
              <li>查询结果来自网络，本人只是个虫子。</li>
              <li>代码是练手的，随时可能更改，客官下次赶早。</li>
              <li>本次赞助商本商场场主对本活动具有最高及最终解释权。</li>
              <li>如果浏览本网站有任何不适状况，请关闭网页并及时就医，以免影响心情。</li>
            </ol>
      </div>
    </div>
    <div id="footer">版权所有 &copy; <a href="http://weibo.com/zhendezhendong">真的振东</a><div>   
</body>      
</html>