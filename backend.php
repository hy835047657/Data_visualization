<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台中心</title>
    <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
    <script id="JS_core" charset="utf-8" src="http://img2.233.com/x/??sea-modules/seajs/seajs/2.2.1/sea.js,sea-config.js,sea-modules/seajs/seajs-combo/1.0.1/seajs-combo.js?v=4523396212723713"></script>
    <script src="js/jquery-1.5.1.min.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="//static.galileo.xiaojukeji.com/static/tms/api/public/other/070b116331b897b5c06eb468f8fc72ed.ico" type="image/x-icon">
    <link rel="stylesheet" href="//me.xiaojukeji.com/project/stargate-auth/css/login.css?_v=140799">
    <style type="text/css">

        body{
            background:#08304A;
            background-size:100%;
        }

        .confirm{

            position: fixed;
            left:700px;
            top: 740px;
            font-family: "Microsoft YaHei","Roboto", sans-serif;
            font-size: 20px;
            font-weight:bold;
            text-transform: uppercase;
            outline: 0;
            background: #fa8919;
            width: 10%;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            /*font-size: 14px;*/

            cursor: pointer;

        }
     .inputtext{
         font-size: 20px;
         position: fixed;
         left:700px;
         font-weight:bold;
         color: white;

        }
    .lablest{
        font-size: 20px;
        position: fixed;
        font-weight:bold;
        top:100px;
        color: white;

        }
    .selectst{
        font-size: 20px;
        position: fixed;
        font-weight:bold;
        top:100px;

    }
     .lablest1{
         font-size: 20px;
         position: fixed;
         font-weight:bold;
         left: 300px;
         color: white;
     }
    .topbody{
    width:900px;
    margin: 0 auto;
    }
    .topbar{
    width:100%;
    background-color: #293C55;
    display: inline-block;
    }
    .topbar li{
    float:left;
    }
    .toplist{

    display: inline-block;
    list-style-type:none;
    }
    .toplist a{
    margin:0 20px;
    color:#FFF;
    text-decoration: none;
    }
    .title,.toplist a{
    display:block;

    display: block;
    float: left;
    }
    .toplist a{
    padding:15px 20px 15px 20px;
    }
    .title{
    color:#FFF;
    text-decoration: none;
    padding:15px 30px 15px 30px;
    }
        ol, ul { list-style: none;}
        #sidebar { min-height: 720px; width:250px; float: left; border-left: 0px solid #fff; background:#293C55; position: relative; }
        /*#sidebar .logo { display:block; margin: 77px 0px 50px 28px; width: 149px; height: 49px; }*/
        #sidebar .main-nav > ul > li { text-decoration: none;position: relative; color: white; padding-left: 0px; font: bold 20px 'Dosis'; line-height: 80px; letter-spacing: 2px; }
        #sidebar .main-nav > ul { margin-left: -5px; }
        #sidebar .main-nav > ul > li a { color: white; display: inline-block; width: 100%; height: 100%; }
        #sidebar .main-nav > ul > li:hover,
        #sidebar .main-nav > ul > li.active { text-decoration: none; border-left: 20px solid #fa8919;  padding-left: 28px; }
        #sidebar .main-nav > ul > li:hover > a,
        #sidebar .main-nav > ul > li.active > a { text-decoration: none; color: #fff; }

        #sidebar .main-nav > ul > li ul {text-decoration: none; display: none; position: absolute; left: 190px; top: 0px; width: 250px; background:#293C55; z-index: 9999; }
        #sidebar .main-nav > ul > li ul li:hover{ border-left: 20px solid #fa8919;  padding-left: 10px; }
        #sidebar .main-nav > ul > li ul  { padding-left: 10px; }
        #sidebar .main-nav > ul > li:hover ul { display: block; }
        /*#sidebar .main-nav > ul > li ul li:hover { background: #111011; }*/
        #sidebar .main-nav > ul > li ul li:hover a { color: #fff; }

    </style>

</head>
<?php

error_reporting(0);
header("Content-Type:text/html;   charset=utf-8");

$mysql_database='person'; //改成自己的mysql数据库名

//print_r($week);

$conn=mysql_connect("localhost","root","");

//$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
mysql_query("set names 'utf8'"); //数据库输出编码 应该与你的数据库编码保持一致.南昌网站建设公司百恒网络PHP工程师建议用UTF-8 国际标准编码.
mysql_select_db($mysql_database); //打开数据库
//
//
//
//$insertsql=mysql_query("insert  into areatable values('沙依巴克区','长江路街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('沙依巴克区','和田街街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('沙依巴克区','扬子江路街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('沙依巴克区','友好南路街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('沙依巴克区','友好北路街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('沙依巴克区','炉院街街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('沙依巴克区','西山街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('沙依巴克区','雅玛里克山街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('沙依巴克区','红庙子街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('沙依巴克区','八一街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('沙依巴克区','仓房沟村') ",$conn);
//
//$insertsql=mysql_query("insert  into areatable values('新市区','北京路街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('新市区','二工街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('新市区','三工街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('新市区','喀什东路街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('新市区','石油新村街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('新市区','迎宾路街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('新市区','天津路街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('新市区','银川路街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('新市区','杭州路街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('新市区','南纬路街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('新市区','北站东路街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('新市区','二工乡') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('新市区','经济技术开发区街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('新市区','高新技术产业开发区') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('新市区','地窝堡乡') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('新市区','安宁渠镇') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('新市区','青格达湖乡') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('新市区','六十户乡') ",$conn);
//
//$insertsql=mysql_query("insert  into areatable values('水磨沟区','新民路街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('水磨沟区','水磨沟街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('水磨沟区','六道湾街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('水磨沟区','苇湖梁街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('水磨沟区','八道湾街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('水磨沟区','南湖南路街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('水磨沟区','南湖北路街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('水磨沟区','七道湾街道') ",$conn);
//
//$insertsql=mysql_query("insert  into areatable values('头屯河区','中亚南路街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('头屯河区','北站西路街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('头屯河区','友谊路片区') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('头屯河区','王家沟街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('头屯河区','嵩山街街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('头屯河区','火车西站片区') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('头屯河区','钢城片区') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('头屯河区','中亚北路街道') ",$conn);
//$insertsql=mysql_query("insert  into areatable values('头屯河区','乌昌路街道') ",$conn);
//
//
$check_query = mysql_query("select locationname from areatable where  areaname= '天山区' ",$conn);
$check_query1 = mysql_query("select locationname from areatable where  areaname= '沙依巴克区' ",$conn);
$check_query2 = mysql_query("select locationname from areatable where  areaname= '新市区' ",$conn);
$check_query3 = mysql_query("select locationname from areatable where  areaname= '水磨沟区' ",$conn);
$check_query4 = mysql_query("select locationname from areatable where  areaname= '头屯河区' ",$conn);

//$row=mysql_fetch_array($check_query);

?>
<body  style=" height: 100%; margin: 0">

<div class="topbar">
    <div  style=" position: fixed;left:40px;top: 5px"class="logo">
    </div>
    <p style=" position: fixed;left:100px;top: 10px; color:white;font-size: 18px;font-weight:bold;">滴滴数据中心</p>
    <div class="topbody">
        <ul class="toplist">
<!--            <a style="position:relative;display:block; margin-left:-200px"><i class="fa fa-map-marker "></i> &nbsp;乌鲁木齐</a>-->
<!--            <a  style="position:relative;display:block; margin-left:100px"id="nowDiv" onload="show()"><i class="fa fa-clock-o "></i></a>-->
<!--            <a style="position:relative;display:block; margin-left:200px">欢迎您</a>-->
            <a><i class="fa fa-sign-out "></i> &nbsp;退出</a>
        </ul>
    </div>
</div>

<aside id="sidebar">

    <!--logo-->
    <!--<a href="#" class="logo"><img src="images/logo.png" alt="logo" /></a>-->

    <!--main-menu-->
    <nav class="main-nav">
        <ul>
            <li class="active" ><a style="text-decoration: none;" href="backend.php">修改数据</a></li>
            <li ><a style="text-decoration: none;"href="#">修改点位</a>

                <ul>
                    <li style="text-decoration: none;"><a style="text-decoration: none;" href="backend1.php">增加点位</a></li>
                    <li><a style="text-decoration: none;" href="backend2.php">删除点位</a></li>
                </ul>
            <li><a style="text-decoration: none;"href="#">账号管理</a>
                <ul>

                    <li style="text-decoration: none;"><a style="text-decoration: none;" href="register.html">注册账号</a></li>
                    <li><a style="text-decoration: none;" href="logout.php">注销账号</a></li>
                </ul>
            </li>
            <!--<li><a href="contact.html">CONTACT US</a></li>-->
        </ul>
    </nav>



</aside>
    <form action="adddata.php" method="post">
        <lable class="lablest"  style="left:270px ;" >请选择日期 </lable>
        <select class="selectst" style=" left:400px ;" name="week">
               <option>星期一</option>
               <option>星期二</option>
               <option>星期三</option>
               <option>星期四</option>
               <option>星期五</option>
               <option>星期六</option>
               <option>星期天</option>
        </select>
        <lable class="lablest"  style="left:550px ;">请选择时间 </lable>
         <select class="selectst" style=" left:680px ;" name="time">
               <option>07：00-08：00</option>
               <option>08：00-09：00</option>
               <option>09：00-10：00</option>
               <option>10：00-11：00</option>
               <option>11：00-12：00</option>
               <option>12：00-13：00</option>
               <option>13：00-14：00</option>
               <option>14：00-15：00</option>
               <option>15：00-16：00</option>
               <option>16：00-17：00</option>
               <option>17：00-18：00</option>
               <option>18：00-19：00</option>
               <option>19：00-20：00</option>
               <option>20：00-21：00</option>
               <option>21：00-22：00</option>
               <option>22：00-23：00</option>
                <option>23：00-24：00</option>
         </select>

         <lable class="lablest"  style="left:900px ;" >请选择区域 </lable>

        <select class="selectst" style=" left:1030px ;" id="area" name="area" onchange="change()">
              <option value=''>--请选择区域--</option>
                <option>天山区</option>
                <option>沙依巴克区</option>
                <option>新市区</option>
              <option>水磨沟区</option>
            <option>头屯河区</option>
        </select>

        <lable class="lablest"  style="left:1230px ;" >请选择地点 </lable>
        <select class="selectst" style=" left:1360px ;" id="location" name="location">
            <option value=''>--请选择地点--</option>
<!--            <option>胜利路街道</option>-->


        </select>



     <lable class="lablest1"  style="top:230px ;"> 呼叫总量： </lable>
     <input class="inputtext" style="top:230px ; color:black" type="text" name="call" size="30" maxlength="20" ><br>
      <lable class="lablest1"  style="top:300px ;"> 应答总量： </lable>
      <input class="inputtext" style="top:300px ;color:black" type="text" name="answer" size="30" maxlength="20" ><br>
     <lable class="lablest1"  style="top:370px ;"> 呼叫应答率： </lable>
     <input class="inputtext" style="top:370px ;color:black" type="text" name="callanswer" size="30" maxlength="20" ><br>
     <lable class="lablest1"  style="top:440px ;">  应答后取消率： </lable>
     <input class="inputtext" style="top:440px ;color:black" type="text" name="answercancel" size="30" maxlength="20" ><br>
     <lable class="lablest1"  style="top:510px ;">  时速： </lable>
     <input class="inputtext"  style="top:510px ;color:black"type="text" name="speed" size="30" maxlength="20" ><br>
     <lable class="lablest1"  style="top:580px ;">  接单时长：</lable>
     <input class="inputtext"  style="top:580px ;color:black" type="text" name="tt" size="30" maxlength="20" ><br>
     <button class="confirm" type="submit">提 交</button>
 </form>
<!--<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>-->

<script type="text/javascript">
function show(){
var date = new Date(); //日期对象
var now = "";
now = date.getFullYear()+"年"; //读英文就行了
now = now + (date.getMonth()+1)+"月"; //取月的时候取的是当前月-1如果想取当前月+1就可以了
now = now + date.getDate()+"日";
now = now + date.getHours()+"时";
now = now + date.getMinutes()+"分";
now = now + date.getSeconds()+"秒";
document.getElementById("nowDiv").innerHTML = now; //div的html是now这个字符串

}

function change()
{
    var x = document.getElementById("area");
    var y = document.getElementById("location");
     y.options.length = 1; // 清除second下拉框的所有内容

    var i=0;
    if(x.selectedIndex == 1)
    {// 天山区
      <?php
        while($rs=mysql_fetch_array($check_query)){

        ?>
        console.log("<?php echo $rs['locationname'];?>");
        y.options.add(new Option("<?php echo $rs['locationname'];?>"));
        i++;
        <?php
        }
        ?>

    }
    var i=0;
    if(x.selectedIndex == 2)
    {// 沙依巴克区
        <?php
        while($rs1=mysql_fetch_array($check_query1)){

        ?>
        console.log("<?php echo $rs1['locationname'];?>");
        y.options.add(new Option("<?php echo $rs1['locationname'];?>"));
        i++;
        <?php
        }
        ?>

    }
    else if(x.selectedIndex == 3)
    {// 新市区
        <?php
        while($rs2=mysql_fetch_array($check_query2)){

        ?>
        console.log("<?php echo $rs2['locationname'];?>");
        y.options.add(new Option("<?php echo $rs2['locationname'];?>"));
        i++;
        <?php
        }
        ?>

    }
    else if(x.selectedIndex == 4)
    {// 水磨沟区
        <?php
        while($rs3=mysql_fetch_array($check_query3)){

        ?>
        console.log("<?php echo $rs3['locationname'];?>");
        y.options.add(new Option("<?php echo $rs3['locationname'];?>"));
        i++;
        <?php
        }
        ?>

    }
    else if(x.selectedIndex == 5)
    {// 头屯河区
        <?php
        while($rs4=mysql_fetch_array($check_query4)){

        ?>
        console.log("<?php echo $rs4['locationname'];?>");
        y.options.add(new Option("<?php echo $rs4['locationname'];?>"));
        i++;
        <?php
        }
        ?>

    }


setInterval(show,1000); //设置过1000毫秒就是1秒，调用show方法
    }
</script>

</body>
</html>