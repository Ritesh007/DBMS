<?php
$selector = '/ /div/class/id';
$i=4;
$j=0;
$tagname[$j] = strtok($selector,'/');
//$first=$tagname[$j];
echo $tagname[$j].'ff<br/>';

while($i>0)
{
    $j++;
    $tagname[$j] = strtok('/');
    echo $tagname[$j].'<br/>';
    $i--;
}


$k=0;
//echo $first.'<br/>';
while($tagname[$k])
{
    $k++;
    echo $tagname[$k].'<br/>';
}
echo "hi";
?>