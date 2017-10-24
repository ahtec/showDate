<?php

$nummers = array("zondag", "maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag");
//echo $nummers[5];
$lenghtArray = count($nummers);

for ($dagnr = 0; $dagnr < 31;) {
    for ($i = 0; $i < $lenghtArray; $i++) {
        echo "<br>" . $nummers[$i];
        echo ++$dagnr;
        if ($dagnr >= 31) {
            exit(0);
        }
    }
}
