<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <title>My China 2016 </title>
    <meta http-equiv="Content-Type" content="text/html; charset=GB2312" />
    <link rel="shortcut icon" href="../../image/JW.gif">
    <style>
        body {margin: 15px; background-color: #111; color: white; text-align:center;}
		h1{font-size:35px;}
		h2{margin-left: 5px;}
        p{font-family: "Times New Roman"; font-size: 20px;}
        .red{color:red;}
		.yellow{color:yellow;}
		.trip{display:inline-block; width: 800px; text-align:left;}
        .city {border: 1px solid white;}
        .onmyway img {width: 60px; height: 120px; display: inline-block; vertical-align: middle;}
        .onmyway span {display: inline-block; vertical-align: middle;}
    </style>
</head>

<body>
    <div class="trip" >
	<?php
        function DisplayTrip($city, $visits, $private, $transportation){
			echo "<div class='city'><h2>$city</h2><ul>";
			for ($i = 0; $i < count($visits); $i++)
				echo "<li>$visits[$i]</li>";

			$mode = $_GET["mode"];
			if ($mode == "private"){
				for ($i = 0; $i < count($private); $i++)
					echo "<li class='yellow'>$private[$i]</li>"; 
			}

			if($transportation != '')
				echo "</ul></div><div class='onmyway'><img src='arrow-248-xxl.png' alt='down arrow'><span>$transportation </span></div>";
        }

echo "<h1 style='text-align:center;'>April</h1>";

	$city = "";
	$visits = array();
	$private = array();
	$transportation = "";

	$city = "4th Flight";
        $visits = array("West Lafayette: Get up at 6:00", "Chicago: Buy iPhone SESilver64G*1, SERose16G*1");
        $private = array();
        $transportation = "Walk: 6:30 to CityBus Center
        <br>Greyhound: LFYT(7:30) to CHI(9:30), $31 (Priority Boarding)
        <br>Flight: ORD(4th 12:55) to Beijing(5th 15:15)";
		DisplayTrip($city, $visits, $private, $transportation);

	$city = "6th 北京";
        $visits = array(
        "7th 13:15 Visa: 北京市朝阳区安家楼路55号", 
        "8th 中午 高中小聚", 
        "9th 晚上 大学小聚", 
        "10th 姜主席 初中小聚", 
        "11th 9:30 石油大学工商管理学院 新办公楼B1115室 郭院长", 
        "11th 晚 wjs神秘饺子",
		"住: 大运村、xgz");
		$private = array("配眼镜", "金嗓子", "北航：各种食堂、老麻抄手、超市发饺子、稻香村", 
		"北航周边：川渝美食、没名生煎、冰与火、宇宙卷饼、711关东煮、果时间、四川燃面、木生火、南门包子、田老师、高兴火锅", 
		"南锣鼓巷：文宇奶酪", "前门: 全聚德，老舍茶馆（爆肚）",
		"其他吃：PizzaHut、满记、麻小、干锅牛蛙、水饺王");
        $transportation = "长途汽车";
        DisplayTrip($city, $visits, $private, $transportation);
		
	$city = "13th 东营";
        $visits = array("14th 银座初中聚会","24th 西城高中聚会", "26th yk婚礼");
        $private = array("利津：水煎包", "西城：过桥米线、老边饺子");
        $transportation = "长途汽车to济南：￥120<br>公交车去机场<br>飞机 遥墙（19:05）to 浦东（20:40）";
        DisplayTrip($city, $visits, $private, $transportation);

	/*$city = "15th 泰安 <span class='red'>(未定)</span> <a href='http://www.mount-tai.com.cn/137.shtml' target='_blank'>攻略</a>";
        $visits = array("泰山");
        $private = array("泰山门票￥125*3人","吃：￥200*3天", "住: 酒店（￥300*2天）");
        $transportation = "长途：￥120*2（东营） + ￥50（济南）";
        DisplayTrip($city, $visits, $private, $transportation);

	$city = "18th 济南";
        $visits = array("经管学院：山东财经（emailed），山东师范","吃：50/天*2", "住: ￥60/晚*2 <span class='red'>(未定)</span>");
        $private = array("泉城广场","把子肉");
        $transportation = "长途汽车：￥120 <span class='red'>(未定)</span>";
        DisplayTrip($city, $visits, $private, $transportation);

	$city = "20th 东营";
        $visits = array("利津：水煎包、凉皮、水饺、大坝、肉夹馍、煎饼、做被子", 
        "同学：wl, zq, jxp",
        "26号yk婚礼：￥1000", "住: 奶奶姥娘");
        $private = array();
        $transportation = "最早一班ね酒?贷span class='red'>(未定)</span>to济南：￥120<br>公交车去机场<br>飞机 遥墙（19:05）to 浦东（20:40）";
        DisplayTrip($city, $visits, $private, $transportation);
    */

	$city = "27th 济南";
        $visits = array("山大zsy","章丘wl");
        $private = array();
        $transportation = "公交车去机场";
        DisplayTrip($city, $visits, $private, $transportation);

	$city = "27th 上海";
        $visits = array("经管学院", 
        "同学：smx, lfz",
        "住: 上海浙杭公寓（远东大道￥100）+ 枫叶速8酒店（￥150*4）");
        $private = array();
        $transportation = "飞机 浦东（21:00）to 长乐（22:45）";
        DisplayTrip($city, $visits, $private, $transportation);
	
echo"<h1 style='text-align:center'>May</h1>";

	$city = "2nd 福州";
        $visits = array("经管学院：福州大学、福建农林大学、福建师范大学（emailed）", "晚饭：聚春园佛跳墙", 
	"住: 火车站榕新酒店");
        $private = array("佛跳墙￥400");
        $transportation = "动车 福州（08:00）to 宁德（08:41）";
        DisplayTrip($city, $visits, $private, $transportation);

	$city = "4th 宁德";
        $visits = array("吃喝玩: 海鲜、上金贝 and more");
        $private = array();
        $transportation = "动车（8:23）宁德 to 桐乡（13:17）
        <br>1h公交K282 桐乡火车站to乌镇汽车站";
        DisplayTrip($city, $visits, $private, $transportation);

	$city = "6th 桐乡乌镇 <a href='http://www.wuzhenyou.com/article/html/103.html' target='_blank'>攻略</a>";
        $visits = array("东西栅联票￥150：15:00到，先东栅，17:30之前进西栅，出西栅住下", 
        "晚饭：茅老太臭豆腐、吴妈馄饨、定胜糕", 
        "住宿：乌镇壹捌零主题酒店，大猴嘴三人间￥198");
        $private = array();
        $transportation = "坐K282回桐乡，动车（11:08）桐乡 to 杭州东（11:26）";
        DisplayTrip($city, $visits, $private, $transportation);

	$city = "7th 杭州";
        $visits = array("西湖+船￥60", "三潭印月+虎跑￥60", "雷峰塔西溪湿地￥105", "宋城￥300", 
        "行程：13:30到西湖吃午饭，15:00游西湖，18:00从雷峰塔坐车往宋城，22:00回酒店", 
        "午饭：外婆家西湖醋鱼、西湖龙井", "晚饭：市里东坡肉、叫花鸡、莼菜汤", 
        "住宿:  杭州鼎豪酒店</span>");
        $private = array();
        $transportation = "动车（8:17）杭州东 to 苏州（09:59）";
        DisplayTrip($city, $visits, $private, $transportation);

	$city = "8th 苏州";
        $visits = array("上午：拙政园￥70","下午：留园￥45、寒山寺",
        "午饭：观前街松鹤楼或得月楼松鼠桂鱼", "晚饭：寒山寺素斋馆",  
         "住:  苏州陶然居宾馆￥178");
        $private = array();
        $transportation = "动车 苏州（11:34）to 上海（12:06）";
        DisplayTrip($city, $visits, $private, $transportation);

	$city = "9th 上海";
        $visits = array("城隍庙", "KTV", "住: 速8酒店（上海浦东机场晨阳路店）￥200");
        $private = array();
        $transportation = "飞机 浦东（12:20）to 南苑（14:10）：￥500";
        DisplayTrip($city, $visits, $private, $transportation);

	$city = "10th 北京";
        $visits = array("休息", "住: 大运村xgz宿舍");
        $private = array();
        $transportation = "Flight: Beijing(12th 16:10) to ORD(12th 16:10)<br>
        $48 Reindeer： Terminal 5 Door 5E 9:30 PM to PMU 01:30 AM";
        DisplayTrip($city, $visits, $private, $transportation);

	$city = "12th West Lafayette";
        $visits = array("5.15 Commencement Ceremony");
        $private = array();
        $transportation = "";
        DisplayTrip($city, $visits, $private, $transportation);

    ?>
    </div><br>

*日期划分以当晚所在城市决定<br>

</body>
</html>