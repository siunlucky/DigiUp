<?php
$salaries = array("Faisal" => 2000, "Mamad" =>
1000, "Raisa" => 500);
echo "Gaji Faisal Sebanyak " . $salaries['Faisal'] .
    "<br />";
echo "Gaji Mamad Sebanyak " . $salaries['Mamad'] .
    "<br />";
echo "Gaji Raisa Sebanyak " . $salaries['Raisa'] .
    "<br />";
/* Second method to create array. */
$salaries['Faisal'] = "high";
$salaries['Mamad'] = "medium";
$salaries['Raisa'] = "low";
echo "Gaji Faisal Sebanyak " . $salaries['Faisal'] .
    "<br />";
echo "Gaji Mamad Sebanyak " . $salaries['Mamad'] .
    "<br />";
echo "Gaji Raisa Sebanyak " . $salaries['Raisa'] .
    "<br />";
