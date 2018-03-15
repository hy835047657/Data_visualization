
<?php
error_reporting(0);
//error_reporting  =  E_ALL & ~E_NOTICE & ~E_STRICT


header("Content-Type:text/html;   charset=utf-8");

$mysql_database='person'; //改成自己的mysql数据库名

//print_r($week);

$conn=mysql_connect("localhost","root","");

//$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
mysql_query("set names 'utf8'"); //数据库输出编码 应该与你的数据库编码保持一致.南昌网站建设公司百恒网络PHP工程师建议用UTF-8 国际标准编码.
mysql_select_db($mysql_database); //打开数据库

$check_query = mysql_query("select locationname from areatable where areaname='天山区'",$conn);
$check_query1 = mysql_query("select locationname from areatable where areaname='沙依巴克区'",$conn);

$check_query2 = mysql_query("select locationname from areatable where areaname='新市区'",$conn);
$check_query3 = mysql_query("select locationname from areatable where areaname='水磨沟区'",$conn);
$check_query4 = mysql_query("select locationname from areatable where areaname='头屯河区'",$conn);

#将数据转化成json格式
$json_data=array('t'=>array(),'s'=>array(),'x'=>array(),'sh'=>array(),'j'=>array());

//date_default_timezone_set(PRC);



while ($row=mysql_fetch_array($check_query,MYSQLI_ASSOC)){

    array_push($json_data['t'],$row['locationname']);


}
while ($row=mysql_fetch_array($check_query1,MYSQLI_ASSOC)){

    array_push($json_data['s'],$row['locationname']);


}
while ($row=mysql_fetch_array($check_query2,MYSQLI_ASSOC)){

    array_push($json_data['x'],$row['locationname']);


}
while ($row=mysql_fetch_array($check_query3,MYSQLI_ASSOC)){

    array_push($json_data['sh'],$row['locationname']);


}
while ($row=mysql_fetch_array($check_query4,MYSQLI_ASSOC)){

    array_push($json_data['j'],$row['locationname']);


}

echo json_encode($json_data);//打印编码后的json字符串*/

