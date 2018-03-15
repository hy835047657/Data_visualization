<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
    <script id="JS_core" charset="utf-8" src="http://img2.233.com/x/??sea-modules/seajs/seajs/2.2.1/sea.js,sea-config.js,sea-modules/seajs/seajs-combo/1.0.1/seajs-combo.js?v=4523396212723713"></script>
    <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
    <style type="text/css">

        body{
            background:#08304A;
            background-size:100%;
        }

        .confirm{


            font-family: "Microsoft YaHei","Roboto", sans-serif;
            font-size: 14px;
            font-weight:bold;
            text-transform: uppercase;
            outline: 0;
            background:  #fa8919;
            width:70px;
            height:45px;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            text-align: center;

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
            left: 400px;
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
        table.t1 {
            position: fixed;
            left: 500px;
            top:100px;
            width: 700px;

            margin-top:10px;
            margin-left:20px;
            margin-right:20px;
            margin-bottom:5px;
            #background-color: #FFF;
            #background:#EEF4F9;
            #border: none;
            border: 1px;
            #color:#003755;
            border-collapse:collapse;
            font: 14px  "宋体";
        }

        table.t1 th{
            background: #fa8919;
            color:#fff;
            padding:6px 4px;
            text-align:center;
            font-size: 20px;
            font-family: "Microsoft YaHei","Roboto", sans-serif;
            /*font-size: 14px;*/
            font-weight:bold;

        }

        table.t1 td{
            background:    #FFD385 none repeat-x scroll center left;
            /*color:#000;*/
            padding:4px 2px;
            color: white;
            font-size: 14px;
            font-weight:bold;

        }

        table.t1 a{
            text-decoration:none;
            height:1em;
        }

        table.t1 a:link, table.t1  a:visited{
            color:    #FFD385;
        }
        table.t1  a:hover{                                      /* 鼠标经过时 */
            color:#B50000;
            text-decoration:underline;
        }
    </style>
</head>

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
            <li  ><a style="text-decoration: none;"href="backend.php">修改数据</a></li>
            <li ><a style="text-decoration: none;"href="#">修改点位</a>

                <ul>
                    <li style="text-decoration: none;"><a style="text-decoration: none;" href="backend1.php">增加点位</a></li>
                    <li><a style="text-decoration: none;" href="backend2.php">删除点位</a></li>
                </ul>
            <li class="active"><a style="text-decoration: none;"href="#">账号管理</a>
                <ul>

                    <li style="text-decoration: none;"><a style="text-decoration: none;" href="register.html">注册账号</a></li>
                    <li><a style="text-decoration: none;" href="logout.php">注销账号</a></li>
                </ul>
            </li>
            <!--<li><a href="contact.html">CONTACT US</a></li>-->
        </ul>
    </nav>



</aside>
<form >
    <table border="1"  class="t1">



        <thead>
        <tr>
            <th >  账号   </th>
            <th >  密码    </th>
            <th >   </th>

        </tr>
        </thead>
        <tbody>
        <?php
        error_reporting(0);
        header("Content-Type:text/html;   charset=utf-8");

        $mysql_database='person'; //改成自己的mysql数据库名


        $username = $_GET["id"];
        $password = $_GET["password"];
        print_r($username);

        $conn=mysql_connect("localhost","root","");

        //$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
        mysql_query("set names 'utf8'"); //数据库输出编码 应该与你的数据库编码保持一致.南昌网站建设公司百恒网络PHP工程师建议用UTF-8 国际标准编码.
        mysql_select_db($mysql_database); //打开数据库
        $query = mysql_query("SELECT * FROM userchart  ",$conn);

        $row=mysql_num_rows($query);
        for($i=1;$i<=$row;$i++) {
            echo('<tr>');
//           echo('<td >' . $i   . '</td>');
        $result = mysql_fetch_row($query);
        echo('<td class="userID" align="center" >' . $result[0] . '</td>');
        echo('<td align="center"  >' . $result[1] . '</td>');
//        echo('<td >' . $result[2] . '</td>');
//        echo('<td >' . $result[3] . '</td>');
        echo('<td align="center" ><a type="submit"  class="delete"><button class="confirm">'.'删除' .'</button></a>');
//            echo('<a class="xiadan-xiugai" href="shangpinxiugaigai.php?id='.$result[0].'"><button class="btn btn-sm btn-primary">'.'修改' .'</button></a></td>');

        echo('</tr> ');
        }
        ?>
        </tbody>
    </table>
</form>

<script>

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
    setInterval(show,1000); //设置过1000毫秒就是1秒，调用show方法
</script>
<script>
    $('.delete').on('click',function(){
        var uid=$(this).parent().prevAll('.userID').text();
        $.ajax({
            url:"logoutt.php",
            type:'POST',
            data:{'uid':uid},
            //    dataType:'String',
            success:function (data) {
                console.log("data"+data);
            }
        });
        $(this).parents('tr').remove();
    });

</script>

</body>
</html>