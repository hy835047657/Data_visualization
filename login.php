<?php
//ini_set('display_errors',1);error_reporting('E_ALL & ~E_NOTICE');
header("Content-Type:text/html;   charset=utf-8");

$mysql_database='person'; //改成自己的mysql数据库名


$username = $_GET["id"];
$password = $_GET["password"];
print_r($username);

$conn=mysql_connect("localhost","root","");

//$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
mysql_query("set names 'utf8'"); //数据库输出编码 应该与你的数据库编码保持一致.南昌网站建设公司百恒网络PHP工程师建议用UTF-8 国际标准编码.
mysql_select_db($mysql_database); //打开数据库
//
//
//

$check_query = mysql_query("select * from  userchart  where  id= '$username' ",$conn);

$result = mysql_fetch_array($check_query)  or die($check_query."<br/><br/>".mysql_error());

print_r($result);


if($result){
    //登录成功
     if($result['password']==$password)
    {

//         header("location:mapurmq.php");
        header("location:mapurmq.php");
//
    }
    else
    {
        echo "<script language ='javascript'>alert('密码错误请重试');history.back();</script>";
        exit;
    }

}
else {
    $check_query = mysql_query("select * from  manager where  id= '$username' ",$conn);
    $result = mysql_fetch_array($check_query,MYSQL_ASSOC);
    if($result) {
        if ($result['password'] == $password)
            {
                header("Location:backend.php");

            }
        else
        {
            echo "<script language ='javascript'>alert('密码错误请重试');history.back();</script>";
            exit;
        }
}

    }

?>