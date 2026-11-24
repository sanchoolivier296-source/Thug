<?php
$marks=[72,85,90,64,85];
$highest=max($marks);
$lowest=min($marks);
$total=array_sum($marks);
$count=count($marks);
$average=round($total/$count,1);
echo "highest:" . $highest;
echo "lowest:" . $lowest;
echo "average:" . $average;
?>