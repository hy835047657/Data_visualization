<?php
/**
p * Created by PhpStorm.
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
//$check_query = mysql_query("select locationname from areatable where  areaname= '沙依巴克区' ",$conn);
//$check_query1 = mysql_query("select locationname from areatable where  areaname= '新市区' ",$conn);
//$check_query2 = mysql_query("select locationname from areatable where  areaname= '水磨沟区' ",$conn);
$check_query3 = mysql_query("select locationname from areatable where  areaname= '头屯河区' ",$conn);
$check_query4 = mysql_query("select locationname from areatable where  areaname= '天山区' ",$conn);


$arr3 = array();
$arr4 = array();


//
while( list($n) = mysql_fetch_row($check_query3))   {
    $arr3[]=$n;

}
while( list($n) = mysql_fetch_row($check_query4))   {
    $arr4[]=$n;

}
for( $i=0;$i<count($arr3);$i++)

{
    echo $arr3[$i];

    for($j=0;$j<7;$j++)
    {
        $new = rand(3, 7);
        echo $arr3[$i];
        echo $new;
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '头屯河区' AND weekday = '$week1[$j]' AND extime='07：00-08：00' AND datatype='呼叫总量' AND location='$arr3[$i]'", $conn);
        $new = rand(13, 19);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '头屯河区' AND weekday = '$week1[$j]' AND extime='08：00-09：00' AND datatype='呼叫总量' AND location='$arr3[$i]'", $conn);
        $new = rand(4, 8);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '头屯河区' AND weekday = '$week1[$j]' AND extime='09：00-10：00' AND datatype='呼叫总量' AND location='$arr3[$i]'", $conn);

        $new = rand(3, 7);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '头屯河区' AND weekday = '$week1[$j]' AND extime='10：00-11：00' AND datatype='呼叫总量' AND location='$arr3[$i]'", $conn);
        $new = rand(3, 7);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '头屯河区' AND weekday = '$week1[$j]' AND extime='11：00-12：00' AND datatype='呼叫总量' AND location='$arr3[$i]'", $conn);
        $new = rand(3, 7);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '头屯河区' AND weekday = '$week1[$j]' AND extime='12：00-13：00' AND datatype='呼叫总量' AND location='$arr3[$i]'", $conn);
        $new = rand(3, 7);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '头屯河区' AND weekday = '$week1[$j]' AND extime='13：00-14：00' AND datatype='呼叫总量' AND location='$arr3[$i]'", $conn);
        $new = rand(3, 7);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '头屯河区' AND weekday = '$week1[$j]' AND extime='14：00-15：00' AND datatype='呼叫总量' AND location='$arr3[$i]'", $conn);
        $new = rand(3, 7);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '头屯河区' AND weekday = '$week1[$j]' AND extime='15：00-16：00' AND datatype='呼叫总量' AND location='$arr3[$i]'", $conn);
        $new = rand(3, 7);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '头屯河区' AND weekday = '$week1[$j]' AND extime='16：00-17：00' AND datatype='呼叫总量' AND location='$arr3[$i]'", $conn);
        $new = rand(4, 8);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '头屯河区' AND weekday = '$week1[$j]' AND extime='17：00-18：00' AND datatype='呼叫总量' AND location='$arr3[$i]'", $conn);
        $new = rand(7, 13);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '头屯河区' AND weekday = '$week1[$j]' AND extime='18：00-19：00' AND datatype='呼叫总量' AND location='$arr3[$i]'", $conn);
        $new = rand(8, 14);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '头屯河区' AND weekday = '$week1[$j]' AND extime='19：00-20：00' AND datatype='呼叫总量' AND location='$arr3[$i]'", $conn);
        $new = rand(3, 7);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '头屯河区' AND weekday = '$week1[$j]' AND extime='20：00-21：00' AND datatype='呼叫总量' AND location='$arr3[$i]'", $conn);
        $new = rand(3, 7);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '头屯河区' AND weekday = '$week1[$j]' AND extime='21：00-22：00' AND datatype='呼叫总量' AND location='$arr3[$i]'", $conn);
        $new = rand(2, 6);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '头屯河区' AND weekday = '$week1[$j]' AND extime='22：00-23：00' AND datatype='呼叫总量' AND location='$arr3[$i]'", $conn);
        $new = rand(1, 5);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '头屯河区' AND weekday = '$week1[$j]' AND extime='23：00-24：00' AND datatype='呼叫总量' AND location='$arr3[$i]'", $conn);



    }

}

for( $i=0;$i<count($arr4);$i++)

{
    echo $arr4[$i];

    for($j=0;$j<7;$j++)
    {
        $new = rand(3, 7);
        echo $arr4[$i];
        echo $new;
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '天山区' AND weekday = '$week1[$j]' AND extime='07：00-08：00' AND datatype='呼叫总量' AND location='$arr4[$i]'", $conn);
        $new = rand(13, 19);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '天山区' AND weekday = '$week1[$j]' AND extime='08：00-09：00' AND datatype='呼叫总量' AND location='$arr4[$i]'", $conn);
        $new = rand(4, 8);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '天山区' AND weekday = '$week1[$j]' AND extime='09：00-10：00' AND datatype='呼叫总量' AND location='$arr4[$i]'", $conn);
        $new = rand(3, 7);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '天山区' AND weekday = '$week1[$j]' AND extime='10：00-11：00' AND datatype='呼叫总量' AND location='$arr4[$i]'", $conn);
        $new = rand(3, 7);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '天山区' AND weekday = '$week1[$j]' AND extime='11：00-12：00' AND datatype='呼叫总量' AND location='$arr4[$i]'", $conn);
        $new = rand(3, 7);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '天山区' AND weekday = '$week1[$j]' AND extime='12：00-13：00' AND datatype='呼叫总量' AND location='$arr4[$i]'", $conn);
        $new = rand(3, 7);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '天山区' AND weekday = '$week1[$j]' AND extime='13：00-14：00' AND datatype='呼叫总量' AND location='$arr4[$i]'", $conn);
        $new = rand(3, 7);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '天山区' AND weekday = '$week1[$j]' AND extime='14：00-15：00' AND datatype='呼叫总量' AND location='$arr4[$i]'", $conn);
        $new = rand(3, 7);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '天山区' AND weekday = '$week1[$j]' AND extime='15：00-16：00' AND datatype='呼叫总量' AND location='$arr4[$i]'", $conn);
        $new = rand(3, 7);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '天山区' AND weekday = '$week1[$j]' AND extime='16：00-17：00' AND datatype='呼叫总量' AND location='$arr4[$i]'", $conn);
        $new = rand(4, 8);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '天山区' AND weekday = '$week1[$j]' AND extime='17：00-18：00' AND datatype='呼叫总量' AND location='$arr4[$i]'", $conn);
        $new = rand(7, 13);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '天山区' AND weekday = '$week1[$j]' AND extime='18：00-19：00' AND datatype='呼叫总量' AND location='$arr4[$i]'", $conn);
        $new = rand(8, 14);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '天山区' AND weekday = '$week1[$j]' AND extime='19：00-20：00' AND datatype='呼叫总量' AND location='$arr4[$i]'", $conn);
        $new = rand(3, 7);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '天山区' AND weekday = '$week1[$j]' AND extime='20：00-21：00' AND datatype='呼叫总量' AND location='$arr4[$i]'", $conn);
        $new = rand(3, 7);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '天山区' AND weekday = '$week1[$j]' AND extime='21：00-22：00' AND datatype='呼叫总量' AND location='$arr4[$i]'", $conn);
        $new = rand(2, 6);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '天山区' AND weekday = '$week1[$j]' AND extime='22：00-23：00' AND datatype='呼叫总量' AND location='$arr4[$i]'", $conn);
        $new = rand(1, 5);
        $check_query = mysql_query("UPDATE didi SET totalamount = '$new' WHERE area = '天山区' AND weekday = '$week1[$j]' AND extime='23：00-24：00' AND datatype='呼叫总量' AND location='$arr4[$i]'", $conn);



    }

}
$weekarray=array("星期一","星期二","星期三","星期四","星期五","星期六","星期天");
for($d=0;$d<7;$d++){
    $check_query = mysql_query("select  sum(totalamount) from  didi where weekday='$weekarray[$d]' and datatype='呼叫总量'and extime='07：00-08：00' ",$conn);
    $rows = mysql_fetch_array($check_query);
    $check_query = mysql_query("UPDATE total SET totalamount = '$rows[0]' WHERE weekday = '$weekarray[$d]' AND extime='07：00-08：00' AND datatype='呼叫总量'", $conn);

    $check_query1= mysql_query("select  sum(totalamount) from  didi where weekday='$weekarray[$d]' and datatype='呼叫总量'and extime='08：00-09：00' ",$conn);
    $rows = mysql_fetch_array($check_query1);
    $check_query = mysql_query("UPDATE total SET totalamount = '$rows[0]' WHERE weekday = '$weekarray[$d]' AND extime='08：00-09：00' AND datatype='呼叫总量'", $conn);

    $check_query2 = mysql_query("select sum(totalamount) from  didi where weekday='$weekarray[$d]' and datatype='呼叫总量'and extime='09：00-10：00' ",$conn);
    $rows = mysql_fetch_array($check_query2);
    $check_query = mysql_query("UPDATE total SET totalamount = '$rows[0]' WHERE weekday = '$weekarray[$d]' AND extime='09：00-10：00' AND datatype='呼叫总量'", $conn);

    $check_query3 = mysql_query("select total sum(totalamount) from  didi where weekday='$weekarray[$d]' and datatype='呼叫总量'and extime='10：00-11：00' ",$conn);
    $rows = mysql_fetch_array($check_query3);
    $check_query = mysql_query("UPDATE total SET totalamount = '$rows[0]' WHERE weekday = '$weekarray[$d]' AND extime='10：00-11：00' AND datatype='呼叫总量'", $conn);
    $check_query4 = mysql_query("select  sum(totalamount) from  didi where weekday='$weekarray[$d]' and datatype='呼叫总量'and extime='11：00-12：00' ",$conn);
    $rows = mysql_fetch_array($check_query4);
    $check_query = mysql_query("UPDATE total SET totalamount = '$rows[0]' WHERE weekday = '$weekarray[$d]' AND extime='11：00-12：00' AND datatype='呼叫总量'", $conn);
    $check_query5 = mysql_query("select  sum(totalamount) from  didi where weekday='$weekarray[$d]' and datatype='呼叫总量'and extime='12：00-13：00' ",$conn);
    $rows = mysql_fetch_array($check_query5);
    $check_query = mysql_query("UPDATE total SET totalamount = '$rows[0]' WHERE weekday = '$weekarray[$d]' AND extime='12：00-13：00' AND datatype='呼叫总量'", $conn);
    $check_query6 = mysql_query("select  sum(totalamount) from  didi where weekday='$weekarray[$d]' and datatype='呼叫总量'and extime='13：00-14：00' ",$conn);
    $rows = mysql_fetch_array($check_query6);
    $check_query = mysql_query("UPDATE total SET totalamount = '$rows[0]' WHERE weekday = '$weekarray[$d]' AND extime='13：00-14：00' AND datatype='呼叫总量'", $conn);
    $check_query7 = mysql_query("select  sum(totalamount) from  didi where weekday='$weekarray[$d]' and datatype='呼叫总量'and extime='14：00-15：00' ",$conn);
    $rows = mysql_fetch_array($check_query7);
    $check_query = mysql_query("UPDATE total SET totalamount = '$rows[0]' WHERE weekday = '$weekarray[$d]' AND extime='14：00-15：00' AND datatype='呼叫总量'", $conn);
    $check_query8 = mysql_query("select  sum(totalamount) from  didi where weekday='$weekarray[$d]' and datatype='呼叫总量'and extime='15：00-16：00' ",$conn);
    $rows = mysql_fetch_array($check_query8);
    $check_query = mysql_query("UPDATE total SET totalamount = '$rows[0]' WHERE weekday = '$weekarray[$d]' AND extime='15：00-16：00' AND datatype='呼叫总量'", $conn);
    $check_query9 = mysql_query("select  sum(totalamount) from  didi where weekday='$weekarray[$d]' and datatype='呼叫总量'and extime='16：00-17：00' ",$conn);
    $rows = mysql_fetch_array($check_query9);
    $check_query = mysql_query("UPDATE total SET totalamount = '$rows[0]' WHERE weekday = '$weekarray[$d]' AND extime='16：00-17：00' AND datatype='呼叫总量'", $conn);
    $check_query10 = mysql_query("select  sum(totalamount) from  didi where weekday='$weekarray[$d]' and datatype='呼叫总量'and extime='17：00-18：00' ",$conn);
    $rows = mysql_fetch_array($check_query10);
    $check_query = mysql_query("UPDATE total SET totalamount = '$rows[0]' WHERE weekday = '$weekarray[$d]' AND extime='17：00-18：00' AND datatype='呼叫总量'", $conn);
    $check_query11 = mysql_query("select  sum(totalamount) from  didi where weekday='$weekarray[$d]' and datatype='呼叫总量'and extime='18：00-19：00' ",$conn);
    $rows = mysql_fetch_array($check_query11);
    $check_query = mysql_query("UPDATE total SET totalamount = '$rows[0]' WHERE weekday = '$weekarray[$d]' AND extime='18：00-19：00' AND datatype='呼叫总量'", $conn);
    $check_query12 = mysql_query("select  sum(totalamount) from  didi where weekday='$weekarray[$d]' and datatype='呼叫总量'and extime='19：00-20：00' ",$conn);
    $rows = mysql_fetch_array($check_query12);
    $check_query = mysql_query("UPDATE total SET totalamount = '$rows[0]' WHERE weekday = '$weekarray[$d]' AND extime='19：00-20：00' AND datatype='呼叫总量'", $conn);
    $check_query13 = mysql_query("select  sum(totalamount) from  didi where weekday='$weekarray[$d]' and datatype='呼叫总量'and extime='20：00-21：00' ",$conn);
    $rows = mysql_fetch_array($check_query13);
    $check_query = mysql_query("UPDATE total SET totalamount = '$rows[0]' WHERE weekday = '$weekarray[$d]' AND extime='20：00-21：00' AND datatype='呼叫总量'", $conn);
    $check_query14 = mysql_query("select  sum(totalamount) from  didi where weekday='$weekarray[$d]' and datatype='呼叫总量'and extime='21：00-22：00' ",$conn);
    $rows = mysql_fetch_array($check_query14);
    $check_query = mysql_query("UPDATE total SET totalamount = '$rows[0]' WHERE weekday = '$weekarray[$d]' AND extime='21：00-22：00' AND datatype='呼叫总量'", $conn);
    $check_query15 = mysql_query("select  sum(totalamount) from  didi where weekday='$weekarray[$d]' and datatype='呼叫总量'and extime='22：00-23：00' ",$conn);
    $rows = mysql_fetch_array($check_query15);
    $check_query = mysql_query("UPDATE total SET totalamount = '$rows[0]' WHERE weekday = '$weekarray[$d]' AND extime='22：00-23：00' AND datatype='呼叫总量'", $conn);
    $check_query16 = mysql_query("select  sum(totalamount) from  didi where weekday='$weekarray[$d]' and datatype='呼叫总量'and extime='23：00-24：00' ",$conn);
    $rows = mysql_fetch_array($check_query16);

    $check_query = mysql_query("UPDATE total SET totalamount = '$rows[0]' WHERE weekday = '$weekarray[$d]' AND extime='23：00-24：00' AND datatype='呼叫总量'", $conn);
}
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
//
//}