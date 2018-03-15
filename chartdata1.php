
<?php
error_reporting(0);
//error_reporting  =  E_ALL & ~E_NOTICE & ~E_STRICT

header("Content-Type:text/json;   charset=utf-8");

$mysql_database='person'; //改成自己的mysql数据库名

print_r($week);

$conn=mysql_connect("localhost","root","");

//$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
mysql_query("set names 'utf8'"); //数据库输出编码 应该与你的数据库编码保持一致.南昌网站建设公司百恒网络PHP工程师建议用UTF-8 国际标准编码.
mysql_select_db($mysql_database); //打开数据库

//主页的图表
date_default_timezone_set(PRC);
$weekarray=array("天","一","二","三","四","五","六");
$ww= "星期".$weekarray[date("w")];
$h=date('H')+2;


$w=date('W');


#将数据转化成json格式
$json_data=array('categories'=>array(),'data'=>array());

//date_default_timezone_set(PRC);

if(substr($h,0,1)=='0'){

    $h=intval(substr($h,1,2));
    $h2=$h+1;
    $h1=$h."：00-".$h2."：00";
//    echo $h1;
}

else{

    $h=intval(substr($h,0,2));

    $h2=$h+1;
    $h1=$h."：00-".$h2."：00";
//    echo $h1;
}


$check_query = mysql_query("select location , totalamount from  didi where weekday='$ww' and extime='$h1' and area='天山区'",$conn);
$check_query1 = mysql_query("select locationname ,x,y from areatable where areaname='天山区' AND x <> 0",$conn);

//分页的图表

//$check_query1 = mysql_query("insert into `areatable` values('天山区','幸福路街道','87.640686','43.786324')  ",$conn);
//$check_query1 = mysql_query("insert into `areatable` values('天山区','新华北路街道','87.618216','43.802308')  ",$conn);
//
//$check_query1 = mysql_query("insert into `areatable` values('天山区','东门街道','87.637374','43.803461')  ",$conn);
//
//$check_query1 = mysql_query("insert into `areatable` values('天山区','青年路街道','87.625327','43.81282')  ",$conn);
//$check_query1 = mysql_query("insert into `areatable` values('天山区','碱泉街道','87.652085','43.806381')  ",$conn);
//$check_query1 = mysql_query("insert into `areatable` values('天山区','延安路街道','87.640636','43.759488')  ",$conn);
//
//
//

#将数据转化成json格式
$a=array();
$b=array();
$json_data=array('data'=>array(),'x'=>array(),'y'=>array(),'coor'=>array( ),'time','speed');

//date_default_timezone_set(PRC);
if(9==$h || $h==10 )
{
    $json_data['time']=rand(13,18);
    $json_data['speed']=rand(17,25);
}
else if($h>10 && $h<=18)
{
    $json_data['time']=rand(3,7);
    $json_data['speed']=rand(30,35);
}
else if($h>=19 && $h<21)
{
    $json_data['time']=rand(13,18);
    $json_data['speed']=rand(17,25);
}
else
{
    $json_data['time']=rand(3,7);
    $json_data['speed']=rand(30,40);
}

$i=0;
while ($row=mysql_fetch_array($check_query,MYSQLI_ASSOC)){



    $json_data['data'][$i]['name']=$row['location'];
    $json_data['data'][$i]['value']=intval($row['totalamount']);
//    array_push($json_data['data']['value'],($row['totalamount']));
    $i++;

}
$json_data['data'] = (array)$json_data['data'];
while ($row=mysql_fetch_array($check_query1,MYSQLI_ASSOC)){



//    array_push($json_data['x'],($row['x']));
//    array_push($json_data['y'],($row['y']));
//    array_push($b,($row['locationname']));
//    $a='{$json_data['x']},{$json_data['y']}';
//    $a=$row['x'].",".$row['y'];




   $json_data['coor'][$row['locationname']][0]=$row['x'];
    $json_data['coor'][$row['locationname']][1]=$row['y'];
//    echo $a;



}



echo json_encode($json_data);//打印编码后的json字符串*/

