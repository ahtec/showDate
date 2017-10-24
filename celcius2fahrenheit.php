<?php

//Dit byzonder produc is onder licemtie van T Jones en G doets
// celsuius +40 * 1.8 dan  -40


$celsius = $_GET['celc'];
echo $celsius;


$farenheit = $celsius + 40;
$farenheit = $farenheit * 1.8;
$farenheit = $farenheit - 40;
echo " in fahrenheir is dit " . $farenheit;
?>
