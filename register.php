<?php
/**
 * Created by PhpStorm.
 * User: huyue
 * Date: 2017/9/28
 * Time: 7:14
 */
$id= $_POST["id"];//取到传过来的所有的值
$password = $_POST["password"];

header("Content-Type:text/html;   charset=utf-8");

$mysql_database='person'; //改成自己的mysql数据库名
$conn=mysql_connect("localhost","root","");

//$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
mysql_query("set names 'utf8'"); //数据库输出编码 应该与你的数据库编码保持一致.南昌网站建设公司百恒网络PHP工程师建议用UTF-8 国际标准编码.
mysql_select_db($mysql_database); //打开数据库
//
//
//
$check=0;
$check_query = mysql_query("select id from  userchart  ",$conn);
$row=mysql_num_rows($query);
//$result = mysql_fetch_array();
for($i=0;$i<$row;$i++) {
    $result = mysql_fetch_row($check_query);
    if($id==$result[0])
    {
        alert("该账号已存在！");
        $check=1;
        break ;

    }

}
if($check==0)
{
    $check_query = mysql_query("insert into userchart values('{$id}','{$password}') ",$conn);
}




print_r($result);