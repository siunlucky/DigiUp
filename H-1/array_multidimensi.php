<?php

$nilai = array(
    "Faisal" => array(
        "physics" => 61,
        "maths" => 11,
        "chemistry" => 20
    ),
    "Alan" => array(
        "physics" => 30,
        "maths" => 32,
        "chemistry" => 10
    ),
    "Memet" => array(
        "physics" => 31,
        "maths" => 22,
        "chemistry" => 99
    )
);

echo "Marks for Faisal in physics : ";
echo $nilai['Faisal']['physics'] . "<br />";
echo "Marks for Alan in maths : ";
echo $nilai['Alan']['maths'] . "<br />";
echo "Marks for Memet in chemistry : ";
echo $nilai['Memet']['chemistry'] . "<br />";
