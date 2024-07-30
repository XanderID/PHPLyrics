<?php
echo "Hi Qi ^_^" . PHP_EOL . PHP_EOL;

$lyrics = [
    ["So many adventures couldn't happen today", 0.53, 8.09],
    ["So many songs we forgot to play", 0.49, 9.77],
    ["So many dreams swinging out of the blue", 0.68, 9.44],
    ["We let them come true", 0.66, 18.06],
    [],
    ["Forever young", 0.60, 12.42],
    ["I want to be forever young", 0.62, 25.0],
    ["Do you really want to live, forever", 0.50, 10.21],
    ["forever and ever?", 1.51, 10.31]
];

foreach($lyrics as $timeline){
    if(empty($timeline)){
        echo PHP_EOL;
        continue;
    }

    $lyric = str_split($timeline[0]);
    foreach($lyric as $text){
        echo $text;
        usleep((1000 * 100) * $timeline[1]);
    }

    usleep((1000 * 100) * $timeline[2]);

    echo PHP_EOL;
}

echo PHP_EOL . "Thank You.....";
?>