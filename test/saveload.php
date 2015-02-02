<?php
$area = $_POST['area'];
$file = 'savedtext.txt';
$current = file_get_contents($file);
$current .= $file;
file_put_contents($file, $area);