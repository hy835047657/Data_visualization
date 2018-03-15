<!DOCTYPE html>
<html style="height: 100%">
<head>

    <meta charset="utf-8">
    <!--<link rel="icon" href="/locate.ico">-->
    <!--<link rel="shortcut icon" type="image/ico" href="../locate.ico" />-->
    <!--<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">-->
    <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">

    <script id="JS_core" charset="utf-8" src="http://img2.233.com/x/??sea-modules/seajs/seajs/2.2.1/sea.js,sea-config.js,sea-modules/seajs/seajs-combo/1.0.1/seajs-combo.js?v=4523396212723713"></script>
    <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="//static.galileo.xiaojukeji.com/static/tms/api/public/other/070b116331b897b5c06eb468f8fc72ed.ico" type="image/x-icon">
    <link rel="stylesheet" href="//me.xiaojukeji.com/project/stargate-auth/css/login.css?_v=140799">
</head>

<style type="text/css">
    *{
        margin: 0px;
        padding:0px;
    }
    i{
        color: #ffffff;
    }
    .buttonred{

        background:#E43C59 ;
        color: white;
        position: fixed;
        left:15px;
        width: 200px;
        height: 60px;

    }
    #container1
    {
        /*background:#414a1b;*/
        position:fixed!important;
        left: 220px;
        top: 80px;
        width: 100%;
        height: 90%

    }
    .call{
        position: fixed;
        top: 70px;
        font-size: 150%;
        color: white;

    }
    #container-piechart1{
        position: fixed!important;
        top: 80px;
        left:250px;
        width: 300px;
        height: 300px;
        line-height: 500px;
        text-align: center;
        /*border: 1px solid #000;*/
        background-color: #293C55

    }
    #container-piechart2{
        position: fixed;
        top: 60px;
        left:220px;
        width: 200px;
        height: 200px;
        line-height: 500px;
        text-align: center;
        /*border: 1px solid #000;*/
        background-color: #293C55

    }

    #container-bar{
        position: fixed!important;
        top: 60px;
        left:1300px;
        width: 600px;
        height: 400px;
        line-height: 500px;
        text-align: center;
        /*border: 1px solid #000;*/
        background-color: #293C55

    }
    .topbody{
        width:900px;
        margin: 0 auto;
    }
    .topbar{
        position: fixed;
        left: 0px;
        top: 0px;
        width:100%;
        height:80px;
        background-color: #293C55;
        display: inline-block;
    }
    .topbar li{
        float:left;
    }
    .toplist{

        display: inline-block;
        list-style-type:none;
    }
    .toplist a{
        margin:0 20px;
        color:#FFF;
        text-decoration: none;
    }
    .title,.toplist a{
        display:block;

        display: block;
        float: left;
    }
    .toplist a{
        padding:15px 20px 15px 20px;
    }
    .title{
        color:#FFF;
        text-decoration: none;
        padding:15px 30px 15px 30px;
    }
    ol, ul { list-style: none;}
    #sidebar { min-height: 720px; width:220px; float: left; top:80px;border-left: 0px solid #fff; background:#293C55; position: fixed; }
    /*#sidebar .logo { display:block; margin: 77px 0px 50px 28px; width: 149px; height: 49px; }*/
    #sidebar .main-nav > ul > li { text-decoration: none;position: relative; color: white; padding-left: 20px; font: bold 20px 'Dosis'; line-height: 80px; letter-spacing: 2px; }
    #sidebar .main-nav > ul { margin-left: -5px; }
    #sidebar .main-nav > ul > li a { color: white; display: inline-block; width: 100%; height: 100%; }
    #sidebar .main-nav > ul > li:hover,
    #sidebar .main-nav > ul > li.active { text-decoration: none; border-left: 20px solid #fa8919;  padding-left: 28px; }
    #sidebar .main-nav > ul > li:hover > a,
    #sidebar .main-nav > ul > li.active > a { text-decoration: none; color: #fff; }
    #sidebar .main-nav > ul > li ul {text-decoration: none; display: none; position: absolute; left: 190px; top: 0px; width: 250px; background:#293C55; z-index: 9999; }
    #sidebar .main-nav > ul > li ul li:hover{ border-left: 20px solid #fa8919;  padding-left: 10px; }
    #sidebar .main-nav > ul > li ul  { padding-left: 10px; }
    #sidebar .main-nav > ul > li:hover ul { display: block; }
    /*#sidebar .main-nav > ul > li ul li:hover { background: #111011; }*/
    #sidebar .main-nav > ul > li ul li:hover a { color: #fff; }
</style>
<body style="height: 100%; margin: 0">
<div class="topbar">
    <div class="topbody">
        <div  style=" position: fixed;left:40px;top: 25px"class="logo">
        </div>
        <p style=" position: fixed;left:100px;top: 30px; color:white;font-size: 18px;font-weight:bold;">滴滴数据中心</p>

        <ul class="toplist">

            <a style="position:fixed;left:300px;top:20px"><i class="fa fa-map-marker "></i> &nbsp;乌鲁木齐</a>
            <a  style="position:fixed;left:600px;top:20px"id="nowDiv" onload="show()"><i class="fa fa-clock-o "></i></a>
            <a  style="position:fixed;left:1000px;top:20px"id="nowWeek" onload="show()"></a>

            <!--            <a style="position:relative;display:block; margin-left:200px">欢迎您：</a>-->
            <a style="position:fixed;left:1500px;top:20px"><i class="fa fa-sign-out "></i> &nbsp;退出</a>
        </ul>
    </div>

</div>
<aside id="sidebar">
    <nav class="main-nav">
        <ul>
            <li><a style="text-decoration: none;"href="mapurmq.php">乌鲁木齐</a></li>
            <li ><a href="tianshan.php">天山区</a></li>
            <li><a style="text-decoration: none;"href="shaqu.php">沙依巴克区</a></li>
            <li><a style="text-decoration: none;"href="xinshiqu.php">新市区</a></li>
            <li><a style="text-decoration: none;"href="shuimogou.php">水磨沟区</a></li>
            <li  class="active"><a style="text-decoration: none;"href="toutunhe.php">头屯河区</a></li>


            <!--<li><a href="contact.html">CONTACT US</a></li>-->
        </ul>
    </nav>
</aside>
<div id="container" style="background:#08304A;height: 100%"></div>
<div id="container1"   ></div>
<div id="container-piechart1" ></div>
<img style="position:fixed;left:270px;top:450px;height: 80px ;width:80px" src='image/clock.png'/>
<p style="position:fixed;left:350px;top:460px;font-size: 20px;color: #a9c6c9" >当前平均接单时长</p>
<p id='receivetime'style="position:fixed;left:355px;top:480px;font-size: 35px;font-weight: bold;color: #fa8919" ></p>
<!--<button type="button" class="buttonred" style="top: 300px;font-familiy:黑体;size:40px" value="天山区" >天山区</button>-->
<!--<button type="button" class="buttonred" style="top: 400px" value="新市区" >新市区</button>-->
<!--<button type="button" class="buttonred" style="top: 500px" value="水磨沟区" >水磨沟区</button>-->
<!--<button type="button" class="buttonred" style="top: 600px" value="沙依巴克区" >沙依巴克区</button>-->

<!--<div id="container-piechart1" ></div>-->
<!--<div id="container-piechart2" ></div>-->



<!--<label class="call" style="left: 30px">呼叫应答率</label>-->
<!--<label class="call" style="left: 250px;">应答取消率</label>-->


<!--<a class="demo" href="http://www.html5tricks.com/demo/css3-toggle-switch-button/index.html" target="_blank">在线演示</a>-->
<script src="js/echarts-gl.js" type="text/javascript"></script>
<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts-all-3.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/dataTool.min.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/china.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/world.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=ZUONbpqGBsYGXNIYHicvbAbM"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/bmap.min.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/jquery/jquery.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts-all-3.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/dataTool.min.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/china.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/world.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=ZUONbpqGBsYGXNIYHicvbAbM"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/bmap.min.js"></script>
<script type="text/javascript">


    function setOption(d,g) {

        var myChart = document.getElementById('container1');
        var myChart = echarts.init(myChart);
        var app = {};

        app.title = '乌鲁木齐';


//        var geoCoordMap = {
//
//
//
//        '东门街道':  [87.637374,43.803461],
//        '新华北路街道':  [87.618216,43.802308],
//        '青年路街道':  [87.625327,43.81282],
//        '碱泉街道': [87.652085,43.806381],
//        '延安路街道':  [87.640636,43.759488],
//        '红雁街道':  [87.654334,43.745841],
//
//    };
//        console.log(geoCoordMap);
//    var data = [
//        {name:'燕儿窝街道', value: 200},
//        {name:'胜利路街道', value: 300},
//        {name:  '团结路街道', value: 430},
//        {name: '解放南路街道', value: 320},
//        {name:  '新华南路街道', value: 210},
//        {name:  '和平路街道', value: 190},
//        {name:  '解放北路街道', value: 30},
//        {name:  '幸福路街道', value: 280},
//        {name:  '东门街道', value: 100},
//        {name: '新华北路街道', value: 120},
//        {name:  '青年路街道', value: 90},
//        {name: '碱泉街道', value: 80},
//        {name: '延安路街道', value: 120},
//        {name: '红雁街道', value: 89},
//    ]
//        console.log(data);
        var mainData = [];
        mainData.push({
            name: '时速',
            value: 60,
            prevalue: 50,
            hismax: 455898
        });
        mainData.push({
            name: '接单时长',
            value: 1332042,
            prevalue: 1552305,
            hismax: 1896900
        });

        var convertData = function (data, geo) {
            var res = [];
            for (var i = 0; i < data.length; i++) {
                var geoCoord = geo[data[i].name];
//                console.log(geoCoord);

                if (geoCoord) {
                    res.push({
                        name: data[i].name,
                        value: geoCoord.concat(data[i].value)
                    });
                }
            }

            return res;
        };

//        console.log(convertData(d, g));
        var selectedItems = [];
        var categoryData = [];
        var barData = [];
        //   var maxBar = 30;
        var sum = 0;
//    var count = s.length;
        for (var i = 0; i < d.length; i++) {
            categoryData.push(d[i].name);
            barData.push(d[i].value);
//            console.log(barData);
            sum += d[i].value;
        }
//

        var option = {


            bmap: {
//            center: [120.631007, 31.308762],
//            zoom: 12,
                center: [87.633486, 43.8029],
                zoom: 14,
                roam: true,
                enableMapClick: false,
//            mapStyle:'midnight',
//            map.setMapStyle({style:'midnight'});
                mapStyle: {
                    'styleJson': [
                        {
                            "featureType": "water",
                            "elementType": "all",
                            "stylers": {
                                "color": "#021019"
                            }
                        },
                        {
                            "featureType": "highway",
                            "elementType": "geometry.fill",
                            "stylers": {
                                "color": "#000000"
                            }
                        },
                        {
                            "featureType": "highway",
                            "elementType": "geometry.stroke",
                            "stylers": {
                                "color": "#147a92"
                            }
                        },
                        {
                            "featureType": "arterial",
                            "elementType": "geometry.fill",
                            "stylers": {
                                "color": "#000000"
                            }
                        },
                        {
                            "featureType": "arterial",
                            "elementType": "geometry.stroke",
                            "stylers": {
                                "color": "#0b3d51"
                            }
                        },
                        {
                            "featureType": "local",
                            "elementType": "geometry",
                            "stylers": {
                                "color": "#000000"
                            }
                        },
                        {
                            "featureType": "land",
                            "elementType": "all",
                            "stylers": {
                                "color": "#08304b"
                            }
                        },
                        {
                            "featureType": "railway",
                            "elementType": "geometry.fill",
                            "stylers": {
                                "color": "#000000"
                            }
                        },
                        {
                            "featureType": "railway",
                            "elementType": "geometry.stroke",
                            "stylers": {
                                "color": "#08304b"
                            }
                        },
                        {
                            "featureType": "subway",
                            "elementType": "geometry",
                            "stylers": {
                                "lightness": -70
                            }
                        },
                        {
                            "featureType": "building",
                            "elementType": "geometry.fill",
                            "stylers": {
                                "color": "#000000"
                            }
                        },
                        {
                            "featureType": "all",
                            "elementType": "labels.text.fill",
                            "stylers": {
                                "color": "#857f7f"
                            }
                        },
                        {
                            "featureType": "all",
                            "elementType": "labels.text.stroke",
                            "stylers": {
                                "color": "#000000"
                            }
                        },
                        {
                            "featureType": "building",
                            "elementType": "geometry",
                            "stylers": {
                                "color": "#022338"
                            }
                        },
                        {
                            "featureType": "green",
                            "elementType": "geometry",
                            "stylers": {
                                "color": "#062032"
                            }
                        },
                        {
                            "featureType": "boundary",
                            "elementType": "all",
                            "stylers": {
                                "color": "#1e1c1c"
                            }
                        },
                        {
                            "featureType": "manmade",
                            "elementType": "all",
                            "stylers": {
                                "color": "#022338"
                            }
                        }
                    ]
                }

            },
            title: {
                text: "头屯河区",
                left: 'center',
                top: 5,
                backgroundColor: "rgba(255,255,255,0.8)",
                textStyle: {
                    color: "#2B98DC",
                    fontWeight: "bold"
                }
            },
//        tooltip : {
//            trigger: 'item',
//            textStyle: {
//                color: '#fff'
////                fontSize: 14,
////                size:14
//            }
//        },
            tooltip: {
                trigger: 'item',           // 触发类型，默认数据触发，见下图，可选为：'item' ¦ 'axis'
                showDelay: 20,             // 显示延迟，添加显示延迟可以避免频繁切换，单位ms
                hideDelay: 100,            // 隐藏延迟，单位ms
                transitionDuration: 0.4,  // 动画变换时间，单位s
                backgroundColor: 'rgba(0,0,0,0.7)',     // 提示背景颜色，默认为透明度为0.7的黑色
                borderColor: '#333',       // 提示边框颜色
                borderRadius: 4,           // 提示边框圆角，单位px，默认为4
                borderWidth: 0,            // 提示边框线宽，单位px，默认为0（无边框）
                padding: 5,                // 提示内边距，单位px，默认各方向内边距为5，
                                           // 接受数组分别设定上右下左边距，同css
                axisPointer: {            // 坐标轴指示器，坐标轴触发有效
                    type: 'line',         // 默认为直线，可选为：'line' | 'shadow'
                    lineStyle: {          // 直线指示器样式设置
                        color: '#48b',
                        width: 2,
                        type: 'solid'
                    },
                    shadowStyle: {                       // 阴影指示器样式设置
                        width: 'auto',                   // 阴影大小
                        color: 'rgba(150,150,150,0.3)'  // 阴影颜色
                    }
                },
                textStyle: {
                    color: '#fff'
//                fontSize: '16'
                }
            },
            visualMap: {
                type: 'piecewise',
                show: true,
                bottom: '10',
                left: "10",
                orient: 'vertical',
                backgroundColor: "rgba(255,255,255,0.8)",

                min: 100,
                max: 500,
                seriesIndex: 0,
                calculable: true,
                pieces: [{
                    max: 2,
                }, {
                    max: 4,
                }, {
                    max: 6,
                }, {
                    max: 8,
                }, {
                    max: 10,
                }, {
                    min: 20,

                }],
                inRange: {
//                color: ['#5AB1EF', '#2EC7C9', '#B6A2DE', "#FFB980", '#D87A80']
                    color: ['#fae41c', '#fac81f', '#fa9a1e', '#fa691d', '#fa8919']
                    // color: ['green', 'red']
                    //color:['lightskyblue', 'red']
                }
            },
            grid: {
                right: 60,
                top: 100,
                bottom: 40,
                width: '30%',
                x:1100
            },
            xAxis: {
                type: 'value',
                scale: true,
                position: 'top',
                min:0,
                boundaryGap: false,
                splitLine: {
                    show: false
                },
                axisLine: {
                    show: false
                },
                axisTick: {
                    show: false
                },
                axisLabel: {
                    margin: 2,
                    textStyle: {
                        color: '#aaa'
                    }
                },
            },
            yAxis: {
                type: 'category',
                //  name: 'TOP 20',
                nameGap: 16,
                axisLine: {
                    show: true,
                    lineStyle: {
                        color: '#ddd'
                    }
                },
                axisTick: {
                    show: false,
                    lineStyle: {
                        color: '#ddd'
                    }
                },
                axisLabel: {
                    interval: 0,
                    textStyle: {
                        color: '#ddd'
                    }
                },
                data: categoryData
            },
            series: [{

                type: 'effectScatter',
                coordinateSystem: 'bmap',
                data: convertData(d, g),
//            symbolSize: function (val) {
//                return val[2] / 10;
//            },
//            label: {
//                normal: {
//                    formatter: '{b}',
//                    position: 'right',
//                    show: false
//                },
//                emphasis: {
//                    show: true
//                }
//            },
//            data: points,
                zlevel: 2,
                rippleEffect: {
                    period: 4,
                    scale: 4,
                    brushType: 'stroke',
                },
                hoverAnimation: true,
                label: {
                    normal: {
                        formatter: '{b}',
                        position: 'right',
                        show: true,

                    },
                    emphasis: {
                        show: true
                    }
                },


                symbolSize: 20,
                itemStyle: {
                    normal: {
                        color: '#fff',
                        borderColor: 'gold'
//                    font-size:14px;
                    }
                },

            }, {
                id: 'bar',
                zlevel: 2,
                type: 'bar',
                symbol: 'none',
                itemStyle: {
                    normal: {
                        color: '#ddb926'
                    }
                },

                data: d
            }


            ]

        }

        myChart.setOption(option);
        setTimeout(init, 0)





        function init() {
            initMap();
        }
        function getMap() {
            return myChart.getModel().getComponent('bmap').getBMap();
        }
        function initMap() {
            var top_left_navigation = new BMap.NavigationControl({
                type: BMAP_NAVIGATION_CONTROL_SMALL
            });
            var map = getMap();

            //map.centerAndZoom("苏州", 13);
            map.addControl(top_left_navigation);
            map.disableDoubleClickZoom();
            return map;
        }
    }
    function getStyle(value){
        if(value<=30){
            return {
                splitNumber:3,     //刻度数量
                min: 0,
                max: 30,
                startAngle: 225,
                endAngle: 144,
                color: [
                    [1, '#FF0000']
                ]
            };
        }else if(value>=90){
            return {
                splitNumber:1,     //刻度数量
                min: 90,
                max: 100,
                startAngle: -18,
                endAngle: -45,
                color: [
                    [1, '#60b044']
                ]
            };
        }else{
            return {
                splitNumber:6,     //刻度数量
                min: 30,
                max: 90,
                startAngle: 144,
                endAngle: -18,
                color: [
                    [1, '#ffce00']
                ]
            };
        }

    }
    function setspeed(s){
        console.log(s);
    var data=["OEE",s];
//    var data=["OEE",40];
    var style=getStyle(data[1]);
    var myChart= document.getElementById('container-piechart1');
    var myChart = echarts.init(myChart);
    var app = {};

    var option = {
//        backgroundColor: '#24273e',

        tooltip: {
            formatter: "{a} <br/>{b} : {c}"
        },

        series: [
            {
                name: data[0],
                type: 'gauge',
                splitNumber:10,     //刻度数量
                min: 0,
                max: 100,
                radius: '92%',      //图表尺寸
                axisLine: {
                    show: true,
                    lineStyle: {
                        width: 2,
                        shadowBlur: 0,
                        color: [
                            [1, '#24273e']
                        ]
                    }
                },
                axisTick: {
                    show: true,
                    lineStyle: {
                        color:'#7887ae',
                        width: 1
                    },
                    length: 8,
                    splitNumber:5
                },
                splitLine: {
                    show: true,
                    length: 12,
                    lineStyle: {
                        color:'#7887ae',
                    }
                },
                axisLabel: {
                    distance: 2,
                    textStyle: {
                        color: "#7887ae",
                        fontSize: "14",
                    },
                    formatter: function(e) {
                        switch (e + "") {
                            case "0":
                                return "0";
                            default:
                                return e;
                        }
                    }

                },
                pointer: { //仪表盘指针
                    show: 0
                },

                detail: {
//                    show:false
                    borderColor: '#fff',
                    shadowColor: '#fff', //默认透明
                    shadowBlur: 5,

                    offsetCenter: [0, '0%'], // x, y，单位px
                    textStyle: { // 其余属性默认使用全局文本样式，详见TEXTSTYLE
//                        fontWeight: 'bolder',
                        color: '#a9c6c9',
                        fontSize: 20,
                    },
                    formatter: '当前时速'

                },

                data: [{
                    name: "",
                    value: data[1]

                }]
            },
            {
                name: data[0],
                type: 'gauge',
                splitNumber:style.splitNumber,     //刻度数量
                min: style.min,
                max: style.max,
                startAngle: style.startAngle,
                endAngle: style.endAngle,
                radius: '92%',      //图表尺寸
                axisLine: {
                    show: true,
                    lineStyle: {
                        width: 2,
                        shadowBlur: 0,
                        color: style.color
                    }
                },
                axisTick: {
                    show: true,
                    lineStyle: {
                        color:'auto',
                        width: 1
                    },
                    length: 8,
                    splitNumber: 5
                },
                splitLine: {
                    show: true,
                    length: 12,
                    lineStyle: {
                        color:'auto',
                    }
                },
                axisLabel: {
                    show:false




                },
                pointer: { //仪表盘指针
                    show: 1,
                    length: '70%',
                    width: 2
                },
                detail: {
                    borderColor: '#fff',
                    shadowColor: '#fff', //默认透明
                    shadowBlur: 5,

                    offsetCenter: [0, '30%'], // x, y，单位px
                    textStyle: { // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        fontWeight: 'bolder',
                        color: '#fa8919',
                        fontSize: 35,
                    },
                    formatter: '{value}km/h'

                },
                data: [{
                    name: "",
                    value: data[1]
                }]

            }]
    };


    myChart.setOption(option);
        }


    var d=new Array();
    function TestAjax(){
        $.ajax({
            type: "get",
//            async: false,     //异步执行
            url: "chartdata3.php",   //SQL数据库文件
            data: {},         //发送给数据库的数据
            dataType: "json", //json类型
            success: function(result) {
//

                d=result.data;
                t=result.time;
                speed=result.speed;
                coor=result.coor;
                console.log(d);
                console.log(coor);
                setspeed(speed);
                setOption(d,coor);
                var num = document.getElementById("receivetime");
                num.innerHTML = t+ '分钟';
            },
            error:function(errmsg){
                alert("error"+JSON.stringify(errmsg));
            }
        });
//        return extime,num;
    }
    //
    //    //执行异步请求
    TestAjax();
    var merge = function() {
        return Array.prototype.concat.apply([], arguments)
    }


    function show(){
        var date = new Date(); //日期对象
        var now = "";
        var weekd="";
        now = date.getFullYear()+"年"; //读英文就行了
        now = now + (date.getMonth()+1)+"月"; //取月的时候取的是当前月-1如果想取当前月+1就可以了
        now = now + date.getDate()+"日";
        now = now + date.getHours()+"时";
        now = now + date.getMinutes()+"分";
        now = now + date.getSeconds()+"秒";
        if(date.getDay()=='1')
            weekd="星期一"
        else if(date.getDay()=='2')
            weekd="星期二"
        else if(date.getDay()=='3')
            weekd="星期三"
        else if(date.getDay()=='4')
            weekd="星期四"
        else if(date.getDay()=='5')
            weekd="星期五"
        else if(date.getDay()=='6')
            weekd="星期六"
        else if(date.getDay()=='7')
            weekd="星期天"
        week=weekd;
        console.log(weekd);
        document.getElementById("nowDiv").innerHTML = now; //div的html是now这个字符串
        document.getElementById("nowWeek").innerHTML=weekd;

    }

    setInterval(show,1000); //设置过1000毫秒就是1秒，调用show方法

</script>