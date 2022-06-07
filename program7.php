<?php
$n1 = 'A';
for($i=0;$i<=2;$i++)
{
	for($j=0;$j<=$i;$j++)
	{
		echo "*";
	}
	echo "<br>";
} 
echo "<br>";
for($i=2;$i>=0;$i--)
{  
    for($j=0;$j<=$i;$j++)  
    {
    	echo $j+1;
    }
    echo "<br>";      
}
echo "<br>";
for($i=0;$i<=2;$i++)
{
	for($j=0;$j<=$i;$j++)
	{
		echo $n1++;
	}
	echo "<br>";
}
?>
