<?php
$selector = '/div/class/id';
$i=3;
$j=0;
//$tagname[$j] = strtok($selector,'/');
//echo $tagname[$j].'<br/>';

while($i>0)
{
    $j++;
//    $tagname[$j] = strtok('/');
 $tagname[$j] = strtok($selector,'/');
 echo $tagname[$j].'<br/>';
    $i--;
}
$k=0;
while($tagname[$k])
{
    $k++;
    echo $tagname[$k].'<br/>';
}
echo "hi";
?>