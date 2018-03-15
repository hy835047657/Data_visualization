<?php
/**
 * Created by PhpStorm.
 * User: huyue
 * Date: 2017/10/26
 * Time: 11:00
 */
error_reporting(0);
//error_reporting  =  E_ALL & ~E_NOTICE & ~E_STRICT

header("Content-Type:text/json;   charset=utf-8");

$mysql_database='person'; //改成自己的mysql数据库名

print_r($week);

$conn=mysql_connect("localhost","root","");

//$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
mysql_query("set names 'utf8'"); //数据库输出编码 应该与你的数据库编码保持一致.
mysql_select_db($mysql_database); //打开数据库
$week="星期一 星期二 星期三 星期四 星期五 星期六 星期天";
$week1 = explode(" ", $week);
$check_query = mysql_query("select locationname from areatable where  areaname= '沙依巴克区' ",$conn);
$check_query1 = mysql_query("select locationname from areatable where  areaname= '新市区' ",$conn);
$check_query2 = mysql_query("select locationname from areatable where  areaname= '水磨沟区' ",$conn);
$check_query3 = mysql_query("select locationname from areatable where  areaname= '头屯河区' ",$conn);


$arr = array();
$arr1 = array();
$arr2 = array();
$arr3 = array();


while( list($n) = mysql_fetch_row($check_query))   {
    $arr[]=$n;

}
while( list($n) = mysql_fetch_row($check_query1))   {
    $arr1[]=$n;

}
while( list($n) = mysql_fetch_row($check_query2))   {
    $arr2[]=$n;

}
while( list($n) = mysql_fetch_row($check_query3))   {
    $arr3[]=$n;

}
//for( $i=0;$i<count($arr3);$i++)
//
//{
//    echo $arr3[$i];
////    echo  $i;
//    for($j=0;$j<7;$j++)
//    {
//        $new = rand(3, 7);
//        echo $arr3[$i];
//        $check_query = mysql_query("insert  into didi  values ('头屯河区','$week1[$j]','07：00-08：00','$arr3[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(13, 19);
//        $check_query = mysql_query("insert  into didi  values ('头屯河区','$week1[$j]','08：00-09：00','$arr3[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(4, 8);
//        $check_query = mysql_query("insert  into didi  values ('头屯河区','$week1[$j]','09：00-10：00','$arr3[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('头屯河区','$week1[$j]','10：00-11：00','$arr3[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('头屯河区','$week1[$j]','11：00-12：00','$arr3[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('头屯河区','$week1[$j]','12：00-13：00','$arr3[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('头屯河区','$week1[$j]','13：00-14：00','$arr3[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('头屯河区','$week1[$j]','14：00-15：00','$arr3[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('头屯河区','$week1[$j]','15：00-16：00','$arr3[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('头屯河区','$week1[$j]','16：00-17：00','$arr3[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(4, 8);
//        $check_query = mysql_query("insert  into didi  values ('头屯河区','$week1[$j]','17：00-18：00','$arr3[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(7, 13);
//        $check_query = mysql_query("insert  into didi  values ('头屯河区','$week1[$j]','18：00-19：00','$arr3[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(8, 14);
//        $check_query = mysql_query("insert  into didi  values ('头屯河区','$week1[$j]','19：00-20：00','$arr3[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('头屯河区','$week1[$j]','20：00-21：00','$arr3[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('头屯河区','$week1[$j]','21：00-22：00','$arr3[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(2, 6);
//        $check_query = mysql_query("insert  into didi  values ('头屯河区','$week1[$j]','22：00-23：00','$arr3[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(1, 5);
//        $check_query = mysql_query("insert  into didi  values ('头屯河区','$week1[$j]','23：00-24：00','$arr3[$i]','呼叫总量' ,'$new')", $conn);
//
//
//
//    }
//
//}
//for( $i=0;$i<count($arr2);$i++)
//
//{
//    echo $arr2[$i];
////    echo  $i;
//    for($j=0;$j<7;$j++)
//    {
//        $new = rand(3, 7);
//        echo $arr2[$i];
//        $check_query = mysql_query("insert  into didi  values ('水磨沟区','$week1[$j]','07：00-08：00','$arr2[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(13, 19);
//        $check_query = mysql_query("insert  into didi  values ('水磨沟区','$week1[$j]','08：00-09：00','$arr2[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(4, 8);
//        $check_query = mysql_query("insert  into didi  values ('水磨沟区','$week1[$j]','09：00-10：00','$arr2[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('水磨沟区','$week1[$j]','10：00-11：00','$arr2[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('水磨沟区','$week1[$j]','11：00-12：00','$arr2[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('水磨沟区','$week1[$j]','12：00-13：00','$arr2[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('水磨沟区','$week1[$j]','13：00-14：00','$arr2[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('水磨沟区','$week1[$j]','14：00-15：00','$arr2[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('水磨沟区','$week1[$j]','15：00-16：00','$arr2[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('水磨沟区','$week1[$j]','16：00-17：00','$arr2[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(4, 8);
//        $check_query = mysql_query("insert  into didi  values ('水磨沟区','$week1[$j]','17：00-18：00','$arr2[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(7, 13);
//        $check_query = mysql_query("insert  into didi  values ('水磨沟区','$week1[$j]','18：00-19：00','$arr2[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(8, 14);
//        $check_query = mysql_query("insert  into didi  values ('水磨沟区','$week1[$j]','19：00-20：00','$arr2[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('水磨沟区','$week1[$j]','20：00-21：00','$arr2[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('水磨沟区','$week1[$j]','21：00-22：00','$arr2[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(2, 6);
//        $check_query = mysql_query("insert  into didi  values ('水磨沟区','$week1[$j]','22：00-23：00','$arr2[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(1, 5);
//        $check_query = mysql_query("insert  into didi  values ('水磨沟区','$week1[$j]','23：00-24：00','$arr2[$i]','呼叫总量' ,'$new')", $conn);
//
//
//
//    }
//
//}
//for( $i=0;$i<count($arr1);$i++)
//
//{
//    echo $arr1[$i];
////    echo  $i;
//    for($j=0;$j<7;$j++)
//    {
//        $new = rand(3, 7);
//        echo $arr1[$i];
//        $check_query = mysql_query("insert  into didi  values ('新市区','$week1[$j]','07：00-08：00','$arr1[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(13, 19);
//        $check_query = mysql_query("insert  into didi  values ('新市区','$week1[$j]','08：00-09：00','$arr1[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(4, 8);
//        $check_query = mysql_query("insert  into didi  values ('新市区','$week1[$j]','09：00-10：00','$arr1[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('新市区','$week1[$j]','10：00-11：00','$arr1[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('新市区','$week1[$j]','11：00-12：00','$arr1[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('新市区','$week1[$j]','12：00-13：00','$arr1[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('新市区','$week1[$j]','13：00-14：00','$arr1[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('新市区','$week1[$j]','14：00-15：00','$arr1[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('新市区','$week1[$j]','15：00-16：00','$arr1[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('新市区','$week1[$j]','16：00-17：00','$arr1[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(4, 8);
//        $check_query = mysql_query("insert  into didi  values ('新市区','$week1[$j]','17：00-18：00','$arr1[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(7, 13);
//        $check_query = mysql_query("insert  into didi  values ('新市区','$week1[$j]','18：00-19：00','$arr1[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(8, 14);
//        $check_query = mysql_query("insert  into didi  values ('新市区','$week1[$j]','19：00-20：00','$arr1[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('新市区','$week1[$j]','20：00-21：00','$arr1[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(3, 7);
//        $check_query = mysql_query("insert  into didi  values ('新市区','$week1[$j]','21：00-22：00','$arr1[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(2, 6);
//        $check_query = mysql_query("insert  into didi  values ('新市区','$week1[$j]','22：00-23：00','$arr1[$i]','呼叫总量' ,'$new')", $conn);
//        $new = rand(1, 5);
//        $check_query = mysql_query("insert  into didi  values ('新市区','$week1[$j]','23：00-24：00','$arr1[$i]','呼叫总量' ,'$new')", $conn);
//
//
//
//    }
//
//}
//for( $i=0;$i<count($arr);$i++)
//
//{
//    echo $arr[$i];
////    echo  $i;
//    for($j=0;$j<7;$j++)
//  {
//    $new = rand(3, 7);
//    echo $arr[$i];
//    $check_query = mysql_query("insert  into didi  values ('沙依巴克区','$week1[$j]','07：00-08：00','$arr[$i]','呼叫总量' ,'$new')", $conn);
//    $new = rand(13, 19);
//    $check_query = mysql_query("insert  into didi  values ('沙依巴克区','$week1[$j]','08：00-09：00','$arr[$i]','呼叫总量' ,'$new')", $conn);
//    $new = rand(4, 8);
//    $check_query = mysql_query("insert  into didi  values ('沙依巴克区','$week1[$j]','09：00-10：00','$arr[$i]','呼叫总量' ,'$new')", $conn);
//    $new = rand(3, 7);
//    $check_query = mysql_query("insert  into didi  values ('沙依巴克区','$week1[$j]','10：00-11：00','$arr[$i]','呼叫总量' ,'$new')", $conn);
//    $new = rand(3, 7);
//    $check_query = mysql_query("insert  into didi  values ('沙依巴克区','$week1[$j]','11：00-12：00','$arr[$i]','呼叫总量' ,'$new')", $conn);
//    $new = rand(3, 7);
//    $check_query = mysql_query("insert  into didi  values ('沙依巴克区','$week1[$j]','12：00-13：00','$arr[$i]','呼叫总量' ,'$new')", $conn);
//    $new = rand(3, 7);
//    $check_query = mysql_query("insert  into didi  values ('沙依巴克区','$week1[$j]','13：00-14：00','$arr[$i]','呼叫总量' ,'$new')", $conn);
//    $new = rand(3, 7);
//    $check_query = mysql_query("insert  into didi  values ('沙依巴克区','$week1[$j]','14：00-15：00','$arr[$i]','呼叫总量' ,'$new')", $conn);
//    $new = rand(3, 7);
//    $check_query = mysql_query("insert  into didi  values ('沙依巴克区','$week1[$j]','15：00-16：00','$arr[$i]','呼叫总量' ,'$new')", $conn);
//    $new = rand(3, 7);
//    $check_query = mysql_query("insert  into didi  values ('沙依巴克区','$week1[$j]','16：00-17：00','$arr[$i]','呼叫总量' ,'$new')", $conn);
//    $new = rand(4, 8);
//    $check_query = mysql_query("insert  into didi  values ('沙依巴克区','$week1[$j]','17：00-18：00','$arr[$i]','呼叫总量' ,'$new')", $conn);
//    $new = rand(7, 13);
//    $check_query = mysql_query("insert  into didi  values ('沙依巴克区','$week1[$j]','18：00-19：00','$arr[$i]','呼叫总量' ,'$new')", $conn);
//    $new = rand(8, 14);
//    $check_query = mysql_query("insert  into didi  values ('沙依巴克区','$week1[$j]','19：00-20：00','$arr[$i]','呼叫总量' ,'$new')", $conn);
//    $new = rand(3, 7);
//    $check_query = mysql_query("insert  into didi  values ('沙依巴克区','$week1[$j]','20：00-21：00','$arr[$i]','呼叫总量' ,'$new')", $conn);
//    $new = rand(3, 7);
//    $check_query = mysql_query("insert  into didi  values ('沙依巴克区','$week1[$j]','21：00-22：00','$arr[$i]','呼叫总量' ,'$new')", $conn);
//    $new = rand(2, 6);
//    $check_query = mysql_query("insert  into didi  values ('沙依巴克区','$week1[$j]','22：00-23：00','$arr[$i]','呼叫总量' ,'$new')", $conn);
//    $new = rand(1, 5);
//    $check_query = mysql_query("insert  into didi  values ('沙依巴克区','$week1[$j]','23：00-24：00','$arr[$i]','呼叫总量' ,'$new')", $conn);
//
//
//
//  }
////
//}