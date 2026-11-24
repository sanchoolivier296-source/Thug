<?php
$items = ["milk", "bread", "eggs"];

array_push($items, "rice");

if (in_array("eggs", $items)) {
    echo "Yes,";
} else {
    echo "No";
}

$total = count($items);
echo $total . " items,";
$list = implode(", ", $items);
echo $list;

?>
