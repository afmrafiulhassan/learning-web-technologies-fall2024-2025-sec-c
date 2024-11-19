<?php

    $array = [
        [1, 2, 3, "A"],
        [1, 2, "B", "C"],
        [1, "D", "E", "F"]
    ];

for ($i = 3; $i > 0; $i--) 

{
    for ($j = 1; $j <= $i; $j++)
    {
        echo($j . " ");
    }
    
    echo("<br>");
}

echo "<br>";

$char = "A";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo ($char . " ");
        $char++;
    }

    echo "<br>";
}

?>