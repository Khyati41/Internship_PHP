<?php
$color=array("Pink","Blue","Black");
echo "I like " . $color[0] . ", " . $color[1] . " and " . $color[2] . ".<br>";

echo "<br>Using array_count_values() function:<br>";
print_r(array_count_values($color));

$num=array("1","2","3");


echo "<br><br>Using array_combine() function:<br>";
$a=array_combine($num,$color);

print_r($a);


echo "<br><br>Using array_change_key_case() function:<br>";
print_r(array_change_key_case($color));

echo "<br><br>Using array_flip() function:<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result1=array_flip($a1);
print_r($result1);

echo "<br><br>Using array_intersect() function:<br>";
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$result2=array_intersect($a1,$a2);
print_r($result2);

echo "<br><br>Using array_product(5,5) function:<br>";
$a=array(5,5);
echo(array_product($a));

echo "<br><br>Using array_rand() function:<br> Values: ";

$b=array("red","green","blue","yellow","brown");
print_r($b);
echo "<br><br>Output:<br>";
$random_keys=array_rand($b,3);
echo $b[$random_keys[0]]."<br>";
echo $b[$random_keys[1]]."<br>";
echo $b[$random_keys[2]]."<br>";

echo "<br><br>Using array_replace() function:<br>";
print_r(array_replace($a1,$b));


echo "<br><br>Using array_reverse() function:<br>";
print_r(array_reverse($a1));

echo "<br><br>Using array_sum(5,15,25) function:<br>";
$num1=array(5,15,25);
echo array_sum($num1);

echo "<br><br>Original Array:<br>";
print_r($a1);
echo "<br><br>Using rsort() function:<br>";
rsort($color);
print_r($a1);

echo "<br><br>Using asort() function:<br>";
asort($a1);
print_r($a1);

echo "<br><br>Using ksort() function:<br>";
ksort($a1);
print_r($a1);

echo "<br><br>Using count() function:<br>";
echo count($color);

?>