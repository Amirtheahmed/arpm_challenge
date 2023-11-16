<?php

function generateCumulativeSumsCSV($filename): void
{
    $individuals = 20;
    $weeks = 52;

    $file = fopen($filename, "w");

    // Generate header row for weeks
    $header = array();
    for ($i = 1; $i <= $weeks; $i++) {
        array_push($header, $i);
    }
    fputcsv($file, $header);

    // Generate data and write to the file
    for ($i = 0; $i < $individuals; $i++) {
        $cumulativeSum = 0;
        $row = array();
        for ($j = 0; $j < $weeks; $j++) {
            $randomValue = mt_rand() / mt_getrandmax(); // Generate a random float between 0 and 1
            $cumulativeSum += $randomValue;
            array_push($row, $cumulativeSum);
        }
        fputcsv($file, $row);
    }

    fclose($file);
}

generateCumulativeSumsCSV("cumulative_sums.csv");
?>
