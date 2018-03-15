<?php
/**
 * Created by PhpStorm.
 * User: huyue
 * Date: 2017/9/27
 * Time: 6:59
 */
$week = $_POST["week"];//取到传过来的所有的值
echo $week;
$time = $_POST["time"];
echo $time;
$area = $_POST["area"];
echo $area;
$location = $_POST["location"];
echo $location;
$call = $_POST["call"];//取到传过来的所有的值
echo $call;
//$answer = $_POST["answer"];
//$callanswer = $_POST["callanswer"];
//$answercancel = $_POST["answercancel"];
//$speed = $_POST["speed"];
//$tt = $_POST["tt"];
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

$check_query = mysql_query("UPDATE didi SET totalamount = '$call' WHERE area = '$area' AND weekday = '$week' AND extime='$time' AND datatype='呼叫总量' AND location='$location'",$conn);

//$tianshan = mysql_fetch_array($check_query1);
//$check_query = mysql_query("select location from  didi where  area= '沙依巴克区' ",$conn);
//$tianshan = mysql_fetch_array($check_query);
//$check_query = mysql_query("select location from  didi where  area= '天山区' ",$conn);
//$tianshan = mysql_fetch_array($check_query);
//$check_query = mysql_query("select location from  didi where  area= '天山区' ",$conn);
//$tianshan = mysql_fetch_array($check_query);
//$check_query = mysql_query("select location from  didi where  area= '天山区' ",$conn);
//$tianshan = mysql_fetch_array($check_query);
//$check_query = mysql_query("select extime , totalamount from  didi where  location='红雁街道' and datatype='呼叫总量' and area='天山区' and weekday='星期一'",$conn);
//    $rows = mysql_fetch_row($check_query);
#将数据转化成json格式
//$json_data=array('categories'=>array(),'data'=>array());
//$area=array('tianshan'=>array());
//while ($row=mysql_fetch_array($check_query,MYSQLI_ASSOC)){
//
//    array_push($area['tianshan'],$row['locationname']);
//}
//
////echo json_encode($json_data);//打印编码后的json字符串*/
//echo json_encode($area);

//if($result)
//{
//    $check_query = mysql_query("update didi set datatype='呼叫总量',totalamount='$call'where area= '$area' and weekday='$week' and extime='$time'",$conn);
//    $check_query = mysql_query("update didi set datatype='应答总量',totalamount='$answer'where area= '$area' and weekday='$week' and extime='$time'",$conn);
//
//    $check_query = mysql_query("update didi set datatype='呼叫应答率',totalamount='$callanswer'where area= '$area' and weekday='$week' and extime='$time'",$conn);
//    $check_query = mysql_query("update didi set datatype='应答后取消率',totalamount='$answercancel'where area= '$area' and weekday='$week' and extime='$time'",$conn);
//    $check_query = mysql_query("update didi set datatype='时速',totalamount='$speed'where area= '$area' and weekday='$week' and extime='$time'",$conn);
//    $check_query = mysql_query("update didi set datatype='接单时长',totalamount='$tt'where area= '$area' and weekday='$week' and extime='$time'",$conn);
//
//
//}
//else
//{
//    $check_query = mysql_query("insert into didi values('{$area}','{$week}','{$time}','呼叫总量','{$call}') ",$conn);
//    $check_query = mysql_query("insert into didi values('{$area}','{$week}','{$time}','应答总量','{$answer}') ",$conn);
//    $check_query = mysql_query("insert into didi values('{$area}','{$week}','{$time}','呼叫应答率','{$callanswer}') ",$conn);
//    $check_query = mysql_query("insert into didi values('{$area}','{$week}','{$time}','应答后取消率','{$answercancel}') ",$conn);
//    $check_query = mysql_query("insert into didi values('{$area}','{$week}','{$time}','时速','{$speed}') ",$conn);
//    $check_query = mysql_query("insert into didi values('{$area}','{$week}','{$time}','接单时长','{$tt}') ",$conn);
//
//
//
//}
//print_r($result);
