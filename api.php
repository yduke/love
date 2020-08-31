<?php
// A file that stores data.
$filename = 'data.dat';        

// Specify the page encoding.
header('Content-type: text/html; charset=utf-8');

if(!file_exists($filename)) {
    die($filename . ' Data file dose not exist.');
}

// Read the entire data file.
$data = file_get_contents($filename);

// Split into arrays by line breaks.
$data = explode(PHP_EOL, $data);

// Get a row of indexes at random.
$result = $data[array_rand($data)];

// Remove excess line breaks
$result = str_replace(array("\r","\n","\r\n"), '', $result);
echo 'document.write("'.htmlspecialchars($result).'");';