<?php

$file = fopen('../data/rw.txt', 'w');
fwrite($file, 'Test data\n');
fclose($file);

$content = file_get_contents('../data/rw.txt');
echo $content;
