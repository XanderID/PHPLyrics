<?php
echo "Hi Qi ^_^" . PHP_EOL . PHP_EOL;

$lyrics = [
    ["I'll love you till the day that I die", 0.60, 25.0],
    ["Till the day that I die", 0.62, 30.0],
    ["Till the light leaves my eyes", 0.50, 27.56],
    ["Till the day that I die", 0.78, 30.0]
];

foreach($lyrics as $timeline){
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