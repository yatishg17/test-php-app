<?php

date_default_timezone_set('UTC');

$file = fopen('../data/rw.txt', 'w');
fwrite($file, date('c') . "\n");
fclose($file);

$content = file_get_contents('../data/rw.txt');
echo $content;
