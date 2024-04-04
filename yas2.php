<?php
$numbers=array(100,205,345,465,565,676,777,869,999);
$largest=$numbers[0];
$smallest=$numbers[0];
foreach($numbers as $number)
{
if($number>$largest)
{
$largest=$number;
}
if($number<$smallest)
{
$smallest=$number;
}
}
echo"The largest number is:".$largest."<br>";
echo"The smallest number is:".$smallest;
?>