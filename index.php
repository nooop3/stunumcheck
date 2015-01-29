<!DOCTYPE HTML>
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
      <p>只知道同学姓名，想要学号，来这里试试！</P>
      <form name="input" action="search.php" method="post">
        <p>大名：<input type="text" name="name" />
          <select name="grade">
            <option value="stuno2011">2011级</option>
            <option value="stuno2012" selected="selected">2012级</option>
          </select><p/>
        <!--<p>年级：<input type="radio" name="grade" value="stuno2011" /> 2011级
        <input type="radio" name="grade" value="stuno2012" checked="checked"/>2012级<p/>-->
        <input type="submit" value="确认" /><br/>
      </form>
    </div>
    <div id="footer">版权所有 &copy; <a href="http://weibo.com/zhendezhendong">真的振东</a><div>     
</body>      
</html>