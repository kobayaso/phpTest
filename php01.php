<?php

$a = 3;
$b = 7;
echo $a + $b;
echo "\n";

$array_month = ['January','Februry','March','April','May','June','August','September','October','November','December'];
echo $array_month[7];
echo "\n";

$hello = "Hello";
$name = "小林";
$world = "'s World!";

echo $hello . $name . $world;
echo "\n";

$tech_boost = "tech";

$tech_boost .= " boost";
echo $tech_boost;
echo "\n";

$calendar_2020 = [
    "January" => "1月",
    "February" => "2月",
    "March" => "3月",
    "April" => "4月",
    "May" => "5月",
    "June" => "6月",
    "Jury" => "7月",
    "August" => "8月",
    "September" => "9月",
    "October" => "10月",
    "November" => "11月",
    "December" => "12月"
];

echo $calendar_2020["December"];
echo "\n";

?>
