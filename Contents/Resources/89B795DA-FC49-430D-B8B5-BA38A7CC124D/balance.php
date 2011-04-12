#!/usr/bin/php
<?php

$input = file_get_contents('php://stdin');
$lines = explode("\n", $input);

$maxPos = -1;
foreach($lines as $line) {
    if (preg_match('/^([^=]+)(\=.*)$/', $line, $matches)) {
        $maxPos = max($maxPos, strlen(rtrim($matches[1])) + 1);
    }
}

$first = true;
foreach($lines as $line) {
    if (!$first) echo "\n";
    $first = false;
    $matches = array();
    if (preg_match('/^([^=]+)(\=.*)$/', $line, $matches)) {
        echo rtrim($matches[1]) . str_repeat(' ', $maxPos - strlen(rtrim($matches[1]))) . $matches[2];
    } else {
        echo $line;
    }
}

//if (substr($input, -1) == "\n") echo "\n";

?>