<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include "stopWatch.php";
$watch = new stopWatch();
$watch->setStartTime();
echo "thoi gian bat dau la: ".$watch->getStartTime()." microsecond";
echo "<br>";
for ($i=0;$i<10000;$i++){
    echo $i;
};
$watch->setEndTime();
echo "thoi gian ket thuc la: ".$watch->getEndTime()." microsecond";
echo"<br>";
echo "thoi gian thuc hien vong lap la: ".$watch->getTime()."microsecond";
?>
