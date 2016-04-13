<?php

chdir(__DIR__);

date_default_timezone_set('UTC');

$file = fopen('./data/cron.txt', 'w');
fwrite($file, date('c') . "\n");
fclose($file);

$content = file_get_contents('./data/cron.txt');
echo $content;
