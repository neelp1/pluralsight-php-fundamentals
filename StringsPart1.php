<?php
//double quote

$currency = "penny";

$sampleStr = "Hello $currency where are you?";

echo $sampleStr;

$num = 2;

echo "\n{$num}nd place\n";
echo $num."nd place\n";

//here Doc
echo <<<EOT
some ome noungvd
dnoanfndf unganv
vanvdvndn
EOT;

print "hwegw all L: jdnvsn\n";
echo "ags"," ", "arhag", "garg\n";

$lowerStr = "this is lower case";

$upperStr = strtoupper($lowerStr);

echo $upperStr."\n";

echo strlen($lowerStr);
echo strpos($lowerStr, "is", 4);

$someStr = "to be or not to be?";

$replacement = str_replace("be", "see", $someStr, $count);

echo $replacement;

echo $count;
?>