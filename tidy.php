<?php
$text = "the quick brown fox";
$result = str_replace("quick", "slow", $text);
$result = ucwords($result);
echo "Full result: " . $result . "<br>";
echo "First 8: " . substr($result, 0, 8);
?>
