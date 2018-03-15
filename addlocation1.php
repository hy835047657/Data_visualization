
<?php
error_reporting(0);
//error_reporting  =  E_ALL & ~E_NOTICE & ~E_STRICT

header("Content-Type:text/json;   charset=utf-8");

$mysql_database='person'; //改成自己的mysql数据库名


$conn=mysql_connect("localhost","root","");

//$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
mysql_query("set names 'utf8'"); //数据库输出编码 应该与你的数据库编码保持一致.南昌网站建设公司百恒网络PHP工程师建议用UTF-8 国际标准编码.
mysql_select_db($mysql_database); //打开数据库

$name = $_POST["name"];
print_r($name);
$coordinate = $_POST["coordinate"];
$set=$_POST["area"];
$coordinate1= explode(",",$coordinate);
print_r($coordinate1);
$coordinatex=$coordinate1[0];
$coordinatey=$coordinate1[1];
print_r($coordinatex);
print_r($set);
//
print_r($coordinatey);

//$query =mysql_query("insert into areatable values ('{$set}','{$name}','{$coordinatex}','{$coordinatey}'),  ",$conn);

$check_query = mysql_query("insert into areatable values('{$set}','{$name}','{$coordinatex}','{$coordinatey}') ",$conn);

if ($check_query) echo '插入成功。';
else echo "执行SQL失败:<BR>错误:".mysql_error();

    $week="星期一 星期二 星期三 星期四 星期五 星期六 星期天";
    $week1 = explode(" ", $week);


    for($j=0;$j<7;$j++)
  {
    $new = rand(3, 7);
    echo $arr[$i];
    $check_query = mysql_query("insert  into didi  values ('{$set}','$week1[$j]','07：00-08：00','{$name}','呼叫总量' ,'$new')", $conn);
    $new = rand(13, 19);
    $check_query = mysql_query("insert  into didi  values ('{$set}','$week1[$j]','08：00-09：00','{$name}','呼叫总量' ,'$new')", $conn);
    $new = rand(4, 8);
    $check_query = mysql_query("insert  into didi  values ('{$set}','$week1[$j]','09：00-10：00','{$name}','呼叫总量' ,'$new')", $conn);
    $new = rand(3, 7);
    $check_query = mysql_query("insert  into didi  values ('{$set}','$week1[$j]','10：00-11：00','{$name}','呼叫总量' ,'$new')", $conn);
    $new = rand(3, 7);
    $check_query = mysql_query("insert  into didi  values ('{$set}','$week1[$j]','11：00-12：00','{$name}','呼叫总量' ,'$new')", $conn);
    $new = rand(3, 7);
    $check_query = mysql_query("insert  into didi  values ('{$set}','$week1[$j]','12：00-13：00','{$name}','呼叫总量' ,'$new')", $conn);
    $new = rand(3, 7);
    $check_query = mysql_query("insert  into didi  values ('{$set}','$week1[$j]','13：00-14：00','{$name}','呼叫总量' ,'$new')", $conn);
    $new = rand(3, 7);
    $check_query = mysql_query("insert  into didi  values ('{$set}','$week1[$j]','14：00-15：00','{$name}','呼叫总量' ,'$new')", $conn);
    $new = rand(3, 7);
    $check_query = mysql_query("insert  into didi  values ('{$set}','$week1[$j]','15：00-16：00','{$name}','呼叫总量' ,'$new')", $conn);
    $new = rand(3, 7);
    $check_query = mysql_query("insert  into didi  values ('{$set}','$week1[$j]','16：00-17：00','{$name}','呼叫总量' ,'$new')", $conn);
    $new = rand(4, 8);
    $check_query = mysql_query("insert  into didi  values ('{$set}','$week1[$j]','17：00-18：00','{$name}','呼叫总量' ,'$new')", $conn);
    $new = rand(7, 13);
    $check_query = mysql_query("insert  into didi  values ('{$set}','$week1[$j]','18：00-19：00','{$name}','呼叫总量' ,'$new')", $conn);
    $new = rand(8, 14);
    $check_query = mysql_query("insert  into didi  values ('{$set}','$week1[$j]','19：00-20：00','{$name}','呼叫总量' ,'$new')", $conn);
    $new = rand(3, 7);
    $check_query = mysql_query("insert  into didi  values ('{$set}','$week1[$j]','20：00-21：00','{$name}','呼叫总量' ,'$new')", $conn);
    $new = rand(3, 7);
    $check_query = mysql_query("insert  into didi  values ('{$set}','$week1[$j]','21：00-22：00','{$name}','呼叫总量' ,'$new')", $conn);
    $new = rand(2, 6);
    $check_query = mysql_query("insert  into didi  values ('{$set}','$week1[$j]','22：00-23：00','{$name}','呼叫总量' ,'$new')", $conn);
    $new = rand(1, 5);
    $check_query = mysql_query("insert  into didi  values ('{$set}','$week1[$j]','23：00-24：00','{$name}','呼叫总量' ,'$new')", $conn);



  }




//echo json_encode($json_data);//打印编码后的json字符串*/
//分页的图表

//$check_query = mysql_query("select location,totalamount from didi where weekday='$ww' and area='天山区' and extime='$h1'",$conn);
//
//#将数据转化成json格式
//$json_data=array('name'=>array(),'data'=>array());
//
////date_default_timezone_set(PRC);
//
//
//while ($row=mysql_fetch_array($check_query,MYSQLI_ASSOC)){
//
//
//
//            array_push($json_data['name'],($row['location']));
//            array_push($json_data['data'],($row['totalamount']));
//
//}
//
//
//    echo json_encode($json_data);//打印编码后的json字符串*/

