<?php

$numbers = [1, 2, 3, 4, 5, 6, 7];
foreach ($numbers as $value) {
    echo "$value <br />";
}
$numbers[0] = "senin";
$numbers[1] = "selasa";
$numbers[2] = "rabu";
$numbers[3] = "kamis";
$numbers[4] = "jumat";
$numbers[5] = "sabtu";
$numbers[6] = "minggu";
foreach ($numbers as $value) {
    echo "$value <br />";
}
