
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
//date_default_timezone_set(Europe/Berlin);
date_default_timezone_set(PRC);

$weekarray=array("天","一","二","三","四","五","六");
$ww= "星期".$weekarray[date("w")];
$h=date('H');

$w=date('W');
//$check_query5 = mysql_query("select  sum(totalamount) from  didi where weekday='星期二' and datatype='呼叫总量'and extime='13：00-14：00' ",$conn);
//$rows = mysql_fetch_array($check_query5);
//$check_query6 = mysql_query("insert into  total values('13：00-14：00','呼叫总量','星期二','$rows[0]') ",$conn);


$check_query = mysql_query("select extime , totalamount from  total where weekday='$ww'",$conn);

#将数据转化成json格式
$json_data=array('categories'=>array(),'data'=>array(),'time',);
$arr=array();


if(substr($h,0,1)=='0'){

    $h=intval(substr($h,1,2));
    $h2=$h+1;
    $h1=$h."：00-".$h2."：00";
//    echo $h;
}

else{

    $h=intval(substr($h,0,2));

    $h2=$h+1;
    $h1=$h."：00-".$h2."：00";
//    echo $h1;
}


class S{
    public $time;
    public $amount;
}

while($row=mysql_fetch_array($check_query)){
    $s=new S();
    if(substr($row['extime'],0,1=='0')){

        $ex=intval(substr($row['extime'],1,2));
        $ex2=$ex+1;
//        echo  $ex2;
        $str=$ex."：00-".$ex2."：00";
        if($ex<$h)
        {

            $s->amount=$row["totalamount"];
        }



    }
    else{
        $ex=intval(substr($row['extime'],0,2));
        $ex2=$ex+1;
        $str=$ex."：00-".$ex2."：00";
        if($ex<$h)
        {
//            array_push($json_data['categories'],$row['extime']);
            $s->amount=$row["totalamount"];
        }


    }
//    array_push($json_data['categories'],$row['extime']);
    $s->time=$str;

//    array_push($json_data['categories'],$str);

//
//    $s->time=$row["extime"];
//    $s->amount=$row["totalamount"];
    //填充数组
    $arr[]=$s;
}

//对变量进行json编码
echo json_encode($arr);





//
//分页的图表
//
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
//echo json_encode($json_data);//打印编码后的json字符串*/

