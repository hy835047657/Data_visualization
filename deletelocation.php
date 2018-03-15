<?php
//ini_set('display_errors',1);error_reporting('E_ALL & ~E_NOTICE');
header("Content-Type:text/html;   charset=utf-8");

$mysql_database='person'; //改成自己的mysql数据库名


$l = $_POST["l"];



$conn=mysql_connect("localhost","root","");

//$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
mysql_query("set names 'utf8'"); //数据库输出编码 应该与你的数据库编码保持一致.南昌网站建设公司百恒网络PHP工程师建议用UTF-8 国际标准编码.
mysql_select_db($mysql_database); //打开数据库
//
//
//

$check_query = mysql_query("delete  from  areatable  where  locationname= '$l' ",$conn);
$check_query = mysql_query("delete  from  didi  where  location= '$l' ",$conn);
$result = mysql_fetch_array($check_query);
print_r($result);





?>