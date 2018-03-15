
<!DOCTYPE html>
<html style="height: 100%">
<head>

    <meta charset="utf-8">
    <!--<link rel="icon" href="/locate.ico">-->
    <!--<link rel="shortcut icon" type="image/ico" href="../locate.ico" />-->
    <!--<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">-->
    <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">

<!--    <script id="JS_core" charset="utf-8" src="http://img2.233.com/x/??sea-modules/seajs/seajs/2.2.1/sea.js,sea-config.js,sea-modules/seajs/seajs-combo/1.0.1/seajs-combo.js?v=4523396212723713"></script>-->
    <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="//static.galileo.xiaojukeji.com/static/tms/api/public/other/070b116331b897b5c06eb468f8fc72ed.ico" type="image/x-icon">
    <link rel="stylesheet" href="//me.xiaojukeji.com/project/stargate-auth/css/login.css?_v=140799">
</head>

<style type="text/css">
*{
margin: 0px;
padding:0px;
}
i{
    color: #ffffff;
}

#container-piechart1{
    position: fixed;
    top: 60px;
    left:230px;
    width: 200px;
    height: 200px;
    line-height: 500px;
    text-align: center;
   /*border: 1px solid #000;*/
    background-color: #293C55

}
#container-piechart2{
    position: fixed;
    top: 60px;
    left:440px;
    width: 200px;
    height: 200px;
    line-height: 500px;
    text-align: center;
    /*border: 1px solid #000;*/
    background-color: #293C55

}
#container
{
    /*background:#414a1b;*/
    position:fixed!important;
    left: 0px;
    top: 80px;
    width: 100%;
    height: 100%

}
#container-bar{
    position: fixed!important;
    top: 80px;
    left:1200px;
    width: 700px;
    height: 500px;
    line-height: 500px;
    text-align: center;
    /*border: 1px solid #000;*/
    background-color: #293C55

}
.topbody{
    width:900px;
    margin: 0 auto;
}
.topbar{
    position: fixed;
    left: 0px;
    top: 0px;
    width:100%;
    height:80px;
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
#sidebar { min-height: 720px; width:220px; float: left; top:80px;border-left: 0px solid #fff; background:#293C55; position: fixed; }

/*#sidebar { min-height: 720px; width:220px; float: left; top:80px;border-left: 0px solid #fff; background:#293C55; position: fixed; }*/
/*#sidebar .logo { display:block; margin: 77px 0px 50px 28px; width: 149px; height: 49px; }*/
#sidebar .main-nav > ul > li { text-decoration: none;position: relative; color: white; padding-left: 20px; font: bold 20px 'Dosis'; line-height: 80px; letter-spacing: 2px; }
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

<?php


                error_reporting(0);
                //error_reporting  =  E_ALL & ~E_NOTICE & ~E_STRICT

                header("Content-Type:text/html;   charset=utf-8");

                $mysql_database='person'; //改成自己的mysql数据库名

                print_r($week);

                $conn=mysql_connect("localhost","root","");

                //$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
                mysql_query("set names 'utf8'"); //数据库输出编码 应该与你的数据库编码保持一致.南昌网站建设公司百恒网络PHP工程师建议用UTF-8 国际标准编码.
                mysql_select_db($mysql_database); //打开数据库
//$check_query = mysql_query("insert  into didi values ('天山区' ,'星期一','07：00-08：00' ,'燕尔窝','呼叫总量','3')", $conn);
//               $areaa="天山区 沙依巴克区 新市区 水磨沟区 头屯河区";
//               $areaa1=explode(" ", $areaa);

//

//$check_query = mysql_query("select locationname from areatable where  areaname= '天山区' ",$conn);
//while($row=mysql_fetch_array($check_query)){
////返回根据从结果集取得的行生成的数组，如果没有更多行则返回 FALSE。
//    echo $row['locationname'];//输出lisks字段
//
//                    for($j=0;$j<7;$j++)
//                    {
//
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','07：00-08：00','$row['locationname']','呼叫总量' ,'$new')", $conn);
//                            $new = rand(13, 19);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','08：00-09：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(4, 8);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','09：00-10：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','10：00-11：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','11：00-12：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','12：00-13：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','13：00-14：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','14：00-15：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','15：00-16：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','16：00-17：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(4, 8);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','17：00-18：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(7, 13);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','18：00-19：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(8, 14);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','19：00-20：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','20：00-21：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','21：00-22：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(2, 6);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','22：00-23：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(1, 5);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','23：00-24：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//
//                    }
//}

//echo($areaal[0]);
               $week="星期一 星期二 星期三 星期四 星期五 星期六 星期天";
               $week1 = explode(" ", $week);
//               $selecttianshan = mysql_query("select locationname from  areatable where  areaname='天山区' ",$conn);
//               $selectianshan1=mysql_fetch_array($selecttianshan);
//               $selectshaqu= mysql_query("select locationname from  areatable where  areaname='沙依巴克区' ",$conn);
//               $selectxinshiqu = mysql_query("select locationname from  areatable where  areaname='新市区' ",$conn);
//               $selectshuimogouqu = mysql_query("select locationname from  areatable where  areaname='水磨沟区' ",$conn);
//               $selecttoutunhe = mysql_query("select locationname from  areatable where  areaname='头屯河区' ",$conn);

//               $tianshan = "燕儿窝街道 胜利路街道 团结路街道 解放南路街道 新华南路街道 和平路街道 解放北路街道 幸福路街道 东门街道 新华北路街道 青年路街道 碱泉街道 延安路街道 红雁街道 长江路街道 和田街街道 扬子江路街道 友好南路街道 友好北路街道 炉院街街道 西山街道 雅玛里克山街道 红庙子街道 八一街道 仓房沟村";
//               $tianshan1 = explode(" ", $tianshan);
//
//while($row=mysql_fetch_array( $selecttianshan,MYSQLI_ASSOC))
//{
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','07：00-08：00','$row['locationname']','呼叫总量' ,'$new')", $conn);
//                            $new = rand(13, 19);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','08：00-09：00','$row[0]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(4, 8);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','09：00-10：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','10：00-11：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','11：00-12：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','12：00-13：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','13：00-14：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','14：00-15：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','15：00-16：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','16：00-17：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(4, 8);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','17：00-18：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(7, 13);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','18：00-19：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(8, 14);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','19：00-20：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','20：00-21：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','21：00-22：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(2, 6);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','22：00-23：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(1, 5);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','23：00-24：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//}
//                for($k=0;$k<5;$k++)
//                    for($j=0;$j<7;$j++)
//                        for($i=0;$i<14;$i++) {
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','07：00-08：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(13, 19);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','08：00-09：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(4, 8);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','09：00-10：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','10：00-11：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','11：00-12：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','12：00-13：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','13：00-14：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','14：00-15：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','15：00-16：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','16：00-17：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(4, 8);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','17：00-18：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(7, 13);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','18：00-19：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(8, 14);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','19：00-20：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','20：00-21：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','21：00-22：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(2, 6);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','22：00-23：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(1, 5);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','23：00-24：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//
//                        }

                     for($j=0;$j<7;$j++)
//                        for($i=0;$i<14;$i++) {
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','07：00-08：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(13, 19);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','08：00-09：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(4, 8);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','09：00-10：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','10：00-11：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','11：00-12：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','12：00-13：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','13：00-14：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','14：00-15：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','15：00-16：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','16：00-17：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(4, 8);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','17：00-18：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(7, 13);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','18：00-19：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(8, 14);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','19：00-20：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','20：00-21：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(3, 7);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','21：00-22：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(2, 6);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','22：00-23：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//                            $new = rand(1, 5);
//                            $check_query = mysql_query("insert  into didi  values ('天山区','$week1[$j]','23：00-24：00','$tianshan1[$i]','呼叫总量' ,'$new')", $conn);
//
//                        }


?>

<body style="height: 100%; margin: 0">
<div id="container" style="height: 100%">
</div>


<div class="topbar">

    <div class="topbody">
        <div  style=" position: fixed;left:40px;top: 25px"class="logo">

        </div>
        <p style=" position: fixed;left:100px;top: 30px; color:white;font-size: 18px;font-weight:bold;">滴滴数据中心</p>

        <ul class="toplist">

            <a style="position:fixed;left:300px;top:20px"><i class="fa fa-map-marker "></i> &nbsp;乌鲁木齐</a>
            <a  style="position:fixed;left:600px;top:20px"id="nowDiv" onload="show()"><i class="fa fa-clock-o "></i></a>
            <a  style="position:fixed;left:1000px;top:20px"id="nowWeek" onload="show()"></a>

            <!--            <a style="position:relative;display:block; margin-left:200px">欢迎您：</a>-->
            <a style="position:fixed;left:1500px;top:20px"><i class="fa fa-sign-out "></i> &nbsp;退出</a>
        </ul>
    </div>

</div>

<aside id="sidebar">
    <nav class="main-nav">
        <ul>
            <li class="active"><a style="text-decoration: none;"href="#">乌鲁木齐</a></li>
            <!--        <li><a href="backend.html">天山区</a></li>-->
            <li><a style="text-decoration: none;" href="tianshan.php">天山区</a></li>
            <!--<li><a href="about.html">ABOUT US</a></li>-->
            <!--<li><a href="gallery.html">GALLERY</a></li>-->
            <!--<li><a href="blog.html">BLOG</a>-->
            <!--</li>-->
            <li><a style="text-decoration: none;"href="shaqu.php">沙依巴克区</a></li>
            <li><a style="text-decoration: none;"href="xinshiqu.php">新市区</a></li>
            <li><a style="text-decoration: none;"href="shuimogou.php">水磨沟区</a></li>
            <li><a style="text-decoration: none;"href="toutunhe.php">头屯河区</a></li>


            <!--<li><a href="contact.html">CONTACT US</a></li>-->
        </ul>
    </nav>
</aside>
<div id="container-bar" style="position:fixed"  ></div>


<div id="container-piechart1" ></div>
<div id="container-piechart2" ></div>

<script src="js/echarts-gl.js" type="text/javascript"></script>
<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/jquery/jquery.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts-all-3.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/dataTool.min.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/china.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/world.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=ZUONbpqGBsYGXNIYHicvbAbM"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/bmap.min.js"></script>
<script type="text/javascript">


    var week;
    var myDate = new Date();
    document.write(myDate.toLocaleString());
//    var dom = document.getElementById("container");
    var myChart = document.getElementById('container-piechart1');
    var myChart = echarts.init(myChart);
    var dataStyle = {
        normal: {
            label: {

                position: 'center',
                formatter: '{d} %',
                textStyle: {
                    color: '#ffd285',
                    fontSize: 20

                }
            },
            labelLine: {
                show: false
            },
            shadowBlur: 40,
            shadowColor: 'rgba(40, 40, 40,0.5)',
        }
    };


    var option = {

        backgroundColor: '#293C55',
        color: ['#07A3E4', '#AB5CD1'],

        series: [{
            name: '呼叫应答率',
            type: 'pie',
            radius: ['60%', '80%'],
            avoidLabelOverlap: true,
            itemStyle: dataStyle,

            labelLine: {
                normal: {
                    show: true
                }
            },

            data: [{
//                value: <?php //echo $result[totalamount]; ?>//,
                //name: '用户来源分析',
                value:230,
                itemStyle: {
                    normal: {
                        color: '#ffd285'
                    }
                },
                label: {
                    normal: {
                        formatter: '{d} %',
                        textStyle: {
                            color: '#ffd285',
                            fontSize: 20

                        }
                    }
                }
            }, {
                value: 180,
                //name: '占位',
                tooltip: {
                    show: false
                },
                itemStyle: {
                    normal: {
                        color: '#87CEFA'
                    }
                },
                label: {
                    normal: {
                        textStyle: {
                            color: '#ffd285',
                        },
                        formatter: '\n呼叫应答率'
                    }
                }
            }]
        }]
    }
    myChart.setOption(option);

    var myChart = document.getElementById('container-piechart2');
    var myChart = echarts.init(myChart);
    var dataStyle = {
        normal: {
            label: {

                position: 'center',
                formatter: '{d} %',
                textStyle: {
                    color: '#ffd285',
                    fontSize: 20

                }
            },
            labelLine: {
                show: false
            },
            shadowBlur: 40,
            shadowColor: 'rgba(40, 40, 40,0.5)',
        }
    };
    var option = {

        backgroundColor: '#293C55',
        color: ['#07A3E4', '#AB5CD1'],
//
//        legend: {
//            orient: 'vertical',
//            x: '2%',
//            top: '40%',
//            data: ['蛋糕', '冷饮', '甜筒', '糖果']
//        },

        series: [{
            name: '呼叫应答率',
            type: 'pie',
            radius: ['60%', '80%'],
            avoidLabelOverlap: true,
            itemStyle: dataStyle,

            labelLine: {
                normal: {
                    show: true
                }
            },

            data: [{
                value:355,

                //name: '用户来源分析',
                itemStyle: {
                    normal: {
                        color: '#ff733f'
                    }
                },
                label: {
                    normal: {
                        formatter: '{d} %',
                        textStyle: {
                            color: '#ff733f',
                            fontSize: 20

                        }
                    }
                }
            }, {
                value: 180,
                //name: '占位',
                tooltip: {
                    show: false
                },
                itemStyle: {
                    normal: {
                        color: '#ec4863',
//                        color: '#ff733f'
                    }
                },
                label: {
                    normal: {
                        textStyle: {
                            color: '#ff733f'
                        },
                        formatter: '\n应答后取消率'
                    }
                }
            }]
        }]
    }
    myChart.setOption(option);
    var s = new Array();
    var z = new Array();
    function setOption(s,z) {

        var myChart = document.getElementById('container-bar');
        var myChart = echarts.init(myChart);


        var option1 = {
            backgroundColor: '#394056',
            title: {
                text: '乌鲁木齐今日数据',
                textStyle: {
                    fontWeight: 'normal',
                    fontSize: 18,
                    color: '#F1F1F3'
                },
                left: '6%'
            },
            tooltip: {
                trigger: 'axis',
                axisPointer: {
                    lineStyle: {
                        color: '#57617B'
                    }
                }
            },
            legend: {
                icon: 'rect',
                itemWidth: 14,
                itemHeight: 5,
                itemGap: 13,
                data: ['呼叫总量', '应答总量', '联通'],
                right: '4%',
                textStyle: {
                    fontSize: 12,
                    color: '#F1F1F3'
                }
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis: [{
                type: 'category',
                boundaryGap: false,
                axisLine: {
                    lineStyle: {
                        color: '#57617B'
                    }
                },
                data: s
//            data: ['13:00', '13:05', '13:10', '13:15', '13:20', '13:25', '13:30', '13:35', '13:40', '13:45', '13:50', '13:55']
            }],
            yAxis: [{
                type: 'value',
                name: '总量',
                axisTick: {
                    show: false
                },
                axisLine: {
                    lineStyle: {
                        color: '#57617B'
                    }
                },
                axisLabel: {
                    margin: 10,
                    textStyle: {
                        fontSize: 14
                    }
                },
                splitLine: {
                    lineStyle: {
                        color: '#57617B'
                    }
                }
            }],
            series: [{
                name: '呼叫总量',
                type: 'line',
                smooth: true,
                symbol: 'circle',
                symbolSize: 5,
                showSymbol: false,
                lineStyle: {
                    normal: {
                        width: 1
                    }
                },
                areaStyle: {
                    normal: {
                        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                            offset: 0,
                            color: 'rgba(137, 189, 27, 0.3)'
                        }, {
                            offset: 0.8,
                            color: 'rgba(137, 189, 27, 0)'
                        }], false),
                        shadowColor: 'rgba(0, 0, 0, 0.1)',
                        shadowBlur: 10
                    }
                },
                itemStyle: {
                    normal: {
                        color: 'rgb(137,189,27)',
                        borderColor: 'rgba(137,189,2,0.27)',
                        borderWidth: 12

                    }
                },
                data: z
//
            },]
        };
        myChart.setOption(option1);
    }
    function TestAjax(){
        function up(x,y){
            return x.time.substr(0,x.time.indexOf('：'))-y.time.substr(0,y.time.indexOf('：'));
        }

//        arr.sort(newSort);//完成排序，如果JSON里面的不是数字，则需要在newSort里面做一下处理
        $.ajax({
            type: "get",
//            async: false,     //异步执行
            url: "chartdata.php",   //SQL数据库文件
            data: {},         //发送给数据库的数据
            dataType: "json", //json类型
            success: function(result) {


                result.sort(up);
//                result.categories.sort( function(a, b){
////
//                    var j1=a.indexOf('：');
//                    var j2=b.indexOf('：');
//                    var x = a.substr(0,j1);
//                    console.log(x);
//
//                    var y = b.substr(0,j2);
//                    console.log(x);
//                    var y=b.indexOf('：');
////                    var y = b.slice(0,b.indexOf("："));
//                    return x > y ? 1 : x == y ? 0 : -1;
//                });
                console.log(result);
                var arrtime=new Array();
                var arramount=new Array();
                for(i=0;i<result.length;i++) {
                    arrtime[i] = result[i].time;
                    arramount[i] = result[i].amount;

                }
                console.log(arramount);

//                var jsonarray= $.parseJSON(result);
//                $.each(eval("(" + jsonarray+ ")"), function (i, n) {
//                    alert(n.time);
//                })
//                num=result.time;
//                console.log(num);

//                q=result.extime.slice();
//                num=result.data;
                extime=arrtime;
                num=arramount;
//                console.log(result.categories);
                setOption(extime,num)
            },
            error:function(errmsg){
                alert("error"+JSON.stringify(errmsg));
            }
        });
//        return extime,num;
    }
    //
    //    //执行异步请求
    TestAjax();
//    $.getJSON('http://localhost:63342/showData/chartdata.php',function(data){
//        console.log(data.data);
//        myChart.setOption({
//            xAxis: {
////                data: data.categories
//                data:z
//            },
//            series: [{
//                // 根据名字对应到相应的系列
////                name: '销量',
////                data: data.data
//                data:s
//            }]
//        });
//    });

//    var option1= {
//        title : {
//            text: '乌鲁木齐呼叫和应答总量',
////            subtext: '纯属虚构'
//        },
//        tooltip : {
//            trigger: 'axis'
//        },
//        legend: {
//            data:['呼叫总量','应答总量']
//        },
//        toolbox: {
//            show : true,
////            feature : {
////                dataView : {show: true, readOnly: false},
////                magicType : {show: true, type: ['line', 'bar']},
////                restore : {show: true},
////                saveAsImage : {show: true}
////            }
//        },
//        calculable : true,
//        xAxis : [
//            {
//                type : 'category',
//                data:s,
////                data : ['07：00-08：00','08：00-09：00','09：00-10：00','10：00-11：00','11：00-12：00','12：00-13：00','13：00-14：00','14：00-15：00','15：00-16：00','16：00-17：00','17：00-18：00','18：00-19：00','19：00-20：00','20：00-21：00','21：00-22：00','22：00-23：00','23：00-24：00']
//            }
//        ],
//        yAxis : [
//            {
//                type : 'value'
//            }
//        ],
//        series : [
//            {
//                name:'呼叫总量',
//                type:'bar',
//                barWidth: 10,
//                itemStyle: {
//                    normal: {
//                        barBorderRadius: 5,
//                        color: new echarts.graphic.LinearGradient(
//                            0, 0, 0, 1,
//                            [
//                                {offset: 0, color: '#14c8d4'},
//                                {offset: 1, color: '#43eec6'}
//                            ]
//                        )
//                    }
//                },
//                data: z,
////                data:[2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3],
////                data：[<?php ////echo $restlt1[0];  echo $result1[1];   echo$result1[2] ;  echo$result1[3];   echo $result1[4];   echo $result1[5] ; echo $result1[6];  echo $result1[7]; echo $result1[8];  echo $result1[9];  echo $result1[10]; echo $result1[11]; echo $result1[12]; ?>////],
//
//                markPoint : {
//                    data : [
//                        {type : 'max', name: '最大值'},
//                        {type : 'min', name: '最小值'}
//                    ]
//                },
//                markLine : {
//                    data : [
//                        {type : 'average', name: '平均值'}
//                    ]
//                }
//            },
////            {
////                name:'应答总量',
////                type:'bar',
////                data:[2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3],
////                markPoint : {
////                    data : [
////                        {name : '年最高', value : 182.2, xAxis: 7, yAxis: 183},
////                        {name : '年最低', value : 2.3, xAxis: 11, yAxis: 3}
////                    ]
////                },
////                markLine : {
////                    data : [
////                        {type : 'average', name : '平均值'}
////                    ]
////                }
////            }
//        ]
//    };




//        var category = [];
//    var dottedBase = +new Date();
//    var lineData = [];
//    var barData = [];
//    var app={};
//    var myData = ['天山区', '新市区', '水磨沟区', '沙依巴克区', '头屯河区'];
//    var databeast = {
//        1: [389, 259, 262, 324, 232],
//        2: [111, 315, 139, 375, 204 ],
//        3: [227, 210, 328, 292, 241],
//        4: [100, 350, 300, 250, 200],
//        5: [280, 128, 255, 254, 313],
//        6: [121, 388, 233, 309, 133],
//        7: [200, 350, 300, 250, 200],
//        8: [380, 129, 173, 101, 310],
//        9: [363, 396, 388, 108, 325],
//        10: [300, 350, 300, 250, 200],
//        11: [100, 350, 300, 250, 200],
//        12: [280, 128, 255, 254, 313],
//
//    };
//    var databeauty = {
//        1: [121, 388, 233, 309, 133],
//        2: [200, 350, 300, 250, 200],
//        3: [380, 129, 173, 101, 310],
//        4: [363, 396, 388, 108, 325],
//        5: [300, 350, 300, 250, 200],
//        6: [100, 350, 300, 250, 200],
//        7: [280, 128, 255, 254, 313],
//        8: [389, 259, 262, 324, 232],
//        9: [111, 315, 139, 375, 204],
//        10: [227, 210, 328, 292, 241],
//        11: [100, 350, 300, 250, 200],
//        12: [280, 128, 255, 254, 313],
//
//    };
//    var timeLineData = [1,2,3,4,5,6,7];
//
//    var option = {
//        baseOption: {
//            backgroundColor: '#293C55',
//            timeline: {
//                show: true,
//                axisType: 'category',
//                tooltip: {
//                    show: true,
//                    formatter: function(params) {
//                        console.log(params);
//                        return params.name + '月份数据统计';
//                    }
//                },
//                autoPlay: true,
//                currentIndex: 6,
//                playInterval: 3000,
//                label: {
//                    normal: {
//                        show: true,
//                        interval: 'auto',
//                        formatter: '星期{value}',
//                        textStyle: {
//                            color: '#fff',
//                        }
//                    },
//                },
//                data: [],
//            },
//            title: {
//
//                textStyle: {
//                    color: '#fff',
//                    fontSize: 16,
//                },
//
//            },
//            legend: {
//                data: ['呼叫总量', '应答总量'],
//                top: 4,
//                right: '20%',
//                textStyle: {
//                    color: '#fff',
//                },
//            },
//            tooltip: {
//                show: true,
//                trigger: 'axis',
//                formatter: '{b}<br/>{a}: {c}',
//                axisPointer: {
//                    type: 'shadow',
//                }
//            },
//
//            toolbox:{
//                right:20,
//                feature:{
//                    saveAsImage: {},
//                    restore: {},
//                    dataView: {},
//                    dataZoom: {},
//                    magicType: {
//                        type:['line','bar']
//                    },
//                    // brush: {},
//                }
//            },
//
//            grid: [{
//                show: false,
//                left: '4%',
//                top: 60,
//                bottom: 60,
//                containLabel: true,
//                width: '46%',
//            }, {
//                show: false,
//                left: '50.5%',
//                top: 80,
//                bottom: 60,
//                width: '0%',
//            }, {
//                show: false,
//                right: '4%',
//                top: 60,
//                bottom: 60,
//                containLabel: true,
//                width: '46%',
//            }, ],
//
//            xAxis: [
//                {
//                    type: 'value',
//                    inverse: true,
//                    axisLine: {
//                        show: false,
//                    },
//                    axisTick: {
//                        show: false,
//                    },
//                    position: 'top',
//                    axisLabel: {
//                        show: true,
//                        textStyle: {
//                            color: '#B2B2B2',
//                            fontSize: 16,
//                        },
//                    },
//                    splitLine: {
//                        show: true,
//                        lineStyle: {
//                            color: '#1F2022',
//                            width: 1,
//                            type: 'solid',
//                        },
//                    },
//                }, {
//                    gridIndex: 1,
//                    show: false,
//                }, {
//                    gridIndex: 2,
//                    type: 'value',
//                    axisLine: {
//                        show: false,
//                    },
//                    axisTick: {
//                        show: false,
//                    },
//                    position: 'top',
//                    axisLabel: {
//                        show: true,
//                        textStyle: {
//                            color: '#B2B2B2',
//                            fontSize: 16,
//                        },
//                    },
//                    splitLine: {
//                        show: true,
//                        lineStyle: {
//                            color: '#1F2022',
//                            width: 1,
//                            type: 'solid',
//                        },
//                    },
//                }, ],
//            yAxis: [{
//                type: 'category',
//                inverse: true,
//                position: 'right',
//                axisLine: {
//                    show: false
//                },
//                axisTick: {
//                    show: false
//                },
//                axisLabel: {
//                    show: false,
//                    margin: 8,
//                    textStyle: {
//                        color: '#9D9EA0',
//                        fontSize: 16,
//                    },
//
//                },
//                data: myData,
//            }, {
//                gridIndex: 1,
//                type: 'category',
//                inverse: true,
//                position: 'left',
//                axisLine: {
//                    show: false
//                },
//                axisTick: {
//                    show: false
//                },
//                axisLabel: {
//                    show: true,
//                    textStyle: {
//                        color: '#9D9EA0',
//                        fontSize: 16,
//                    },
//
//                },
//                data: myData.map(function(value) {
//                    return {
//                        value: value,
//                        textStyle: {
//                            align: 'center',
//                        }
//                    }
//                }),
//            }, {
//                gridIndex: 2,
//                type: 'category',
//                inverse: true,
//                position: 'left',
//                axisLine: {
//                    show: false
//                },
//                axisTick: {
//                    show: false
//                },
//                axisLabel: {
//                    show: false,
//                    textStyle: {
//                        color: '#9D9EA0',
//                        fontSize: 16,
//                    },
//
//                },
//                data: myData,
//            }, ],
//            series: [],
//
//        },
//
//        options: [],
//
//
//    };
//
//    for (var i = 0; i < timeLineData.length; i++) {
//        option.baseOption.timeline.data.push(timeLineData[i]);
//        option.options.push({
//            title: {
//                text: '乌鲁木齐星期' + timeLineData[i] + '呼叫应答总量统计',
//            },
//            series: [{
//                name: '呼叫',
//                type: 'bar',
//                barGap: 20,
//                barWidth: 20,
//                label: {
//                    normal: {
//                        show: false,
//                    },
//                    emphasis: {
//                        show: true,
//                        position: 'left',
//                        offset: [0, 0],
//                        textStyle: {
//                            color: '#fff',
//                            fontSize: 18,
//                        },
//                    },
//                },
//                itemStyle: {
//                    normal: {
//                        color: '#EC4863',
//                    },
//                    emphasis: {
//                        color: '#08C7AE',
//                    },
//                },
//                data: databeast[timeLineData[i]],
//            },
//
//
//                {
//                    name: '应答',
//                    type: 'bar',
//                    barGap: 20,
//                    barWidth: 20,
//                    xAxisIndex: 2,
//                    yAxisIndex: 2,
//                    label: {
//                        normal: {
//                            show: false,
//                        },
//                        emphasis: {
//                            show: true,
//                            position: 'right',
//                            offset: [0, 0],
//                            textStyle: {
//                                color: '#fff',
//                                fontSize: 18,
//                            },
//                        },
//                    },
//                    itemStyle: {
//                        normal: {
//                            color: '#FFD285',
//                        },
//                        emphasis: {
//                            color: '#F94646',
//                        },
//                    },
//                    data: databeauty[timeLineData[i]],
//                }
//            ]
//        });
//    }
//    for (var i = 0; i < 20; i++) {
//        var date = new Date(dottedBase += 1000 * 3600 * 24);
//        category.push([
//            date.getFullYear(),
//            date.getMonth() + 1,
//            date.getDate()
//        ].join('-'));
//        var b = Math.random() * 200;
//        var d = Math.random() * 200;
//        barData.push(b)
//        lineData.push(d + b);
//    }
//
//
//            //为echarts对象加载数据
//    myChart.setOption(option);



    var myChart= document.getElementById('container');
    var myChart = echarts.init(myChart);
    var app = {};

    app.title = '乌鲁木齐';

$.get( 'data.json',function (data) {



        myChart.setOption(option = {
            animation: true,
            
            bmap: {
                center: [87.5649877411,43.840380347],
                zoom: 14,
                roam: true,
                mapStyle: {
                    'styleJson': [
                        {
                            "featureType": "land",
                            "elementType": "all",
                            "stylers": {
                                "color": "#08304a",
                                "visibility": "on"
                            }
                        },
                        {
                            "featureType": "arterial",
                            "elementType": "all",
                            "stylers": {
                                "color": "#1671c4",
                                "visibility": "on"
                            }
                        }
                    ]
                 }

            },
            visualMap: {
                show: false,
                top: 'top',
                min: 0,
                max: 5,
                seriesIndex: 0,
                calculable: true,
                inRange: {
                    color: ['blue', 'blue', 'green', 'yellow', 'red']
                }
            },
            series: [{
                type: 'heatmap',
                coordinateSystem: 'bmap',

//                data: points,
                pointSize: 5,
                blurSize: 6
            }]
        });

    if (option && typeof option === "object") {
        myChart.setOption(option, true);
    }
    if (!app.inNode) {
            // 添加百度地图插件
            var bmap = myChart.getModel().getComponent('bmap').getBMap();
            bmap.addControl(new BMap.MapTypeControl());

            function getBoundary(){

                var bdary = new BMap.Boundary();

                bdary.get("乌鲁木齐天山区", function(rs){ //获取行政区域

                    var count = rs.boundaries.length; //行政区域的点有多少个

                    for(var i = 0; i < count; i++){

                        var ply = new BMap.Polygon(rs.boundaries[i], {strokeWeight: 2, strokeColor: "#fa8919" ,fillColor: "#fa8919" ,fillOpacity:0.5 }); //建立多边形覆盖物 fillColor 字体显示出来
                        bmap.addOverlay(ply); //添加覆盖物

                        bmap.setViewport(ply.getPath()); //调整视野
//

                    }
                });
                bdary.get("乌鲁木齐水磨沟区", function(rs){ //获取行政区域

                    var count = rs.boundaries.length; //行政区域的点有多少个

                    for(var i = 0; i < count; i++){

                        var ply = new BMap.Polygon(rs.boundaries[i], {strokeWeight: 2, strokeColor: "#fae018" ,fillColor: "#fae018" ,fillOpacity:0.5 }); //建立多边形覆盖物 fillColor 字体显示出来

                        bmap.addOverlay(ply); //添加覆盖物

                        bmap.setViewport(ply.getPath()); //调整视野

                    }

                });
                bdary.get("乌鲁木齐沙依巴克区", function(rs){ //获取行政区域

                    var count = rs.boundaries.length; //行政区域的点有多少个

                    for(var i = 0; i < count; i++){

                        var ply = new BMap.Polygon(rs.boundaries[i], {strokeWeight: 2, strokeColor: "#fa6211" ,fillColor: "#fa6211" ,fillOpacity:0.5 }); //建立多边形覆盖物 fillColor 字体显示出来

                        bmap.addOverlay(ply); //添加覆盖物

                        bmap.setViewport(ply.getPath()); //调整视野

                    }

                });
                bdary.get("乌鲁木齐新市区", function(rs){ //获取行政区域

                    var count = rs.boundaries.length; //行政区域的点有多少个

                    for(var i = 0; i < count; i++){

                        var ply = new BMap.Polygon(rs.boundaries[i], {strokeWeight: 2, strokeColor: "#fab81a" ,fillColor: "#fab81a" ,fillOpacity:0.5 }); //建立多边形覆盖物 fillColor 字体显示出来

                        bmap.addOverlay(ply); //添加覆盖物

                        bmap.setViewport(ply.getPath()); //调整视野

                    }

                });
                bdary.get("乌鲁木齐头屯河区", function(rs){ //获取行政区域

                    var count = rs.boundaries.length; //行政区域的点有多少个

                    for(var i = 0; i < count; i++){

                        var ply = new BMap.Polygon(rs.boundaries[i], {strokeWeight: 2, strokeColor: "#fa4d61" ,fillColor: "#fa4d61" ,fillOpacity:0.5 }); //建立多边形覆盖物 fillColor 字体显示出来

                        bmap.addOverlay(ply); //添加覆盖物

                        bmap.setViewport(ply.getPath()); //调整视野

                    }

                });
            }
        getBoundary();

    };
    myChart.setOption(option);
    function re_fresh() {
        window.location.reload();
    }
    setTimeout('re_fresh()',1800000); //指定30mins刷新一次
    function show(){
        var date = new Date(); //日期对象
        var now = "";
        var h=date.getHours();
        now = date.getFullYear()+"年"; //读英文就行了
        now = now + (date.getMonth()+1)+"月"; //取月的时候取的是当前月-1如果想取当前月+1就可以了
        now = now + date.getDate()+"日";
        now = now + date.getHours()+"时";
        now = now + date.getMinutes()+"分";
        now = now + date.getSeconds()+"秒";



        if(date.getDay()=='1')
            week = "星期一"


        else if(date.getDay()=='2')
            week="星期二"
        else if(date.getDay()=='3')
            week="星期三"
        else if(date.getDay()=='4')
            week="星期四"
        else if(date.getDay()=='5')
            week="星期五"
        else if(date.getDay()=='6')
            week="星期六"
        else if(date.getDay()=='7')
            week="星期天"
        console.log(week);
        document.getElementById("nowDiv").innerHTML = now; //div的html是now这个字符串

    }
    setInterval(show,1000); //设置过1000毫秒就是1秒，调用show方法

    });
</script>
</body>
</html>