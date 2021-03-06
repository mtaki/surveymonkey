<?php
/*
* Convert JSON file to CSV and output it.
*
* JSON should be an array of objects, dictionaries with simple data structure
* and the same keys in each object.
* The order of keys it took from the first element.
*
* Example:
* json:
* [
*  { "key1": "value", "kye2": "value", "key3": "value" },
*  { "key1": "value", "kye2": "value", "key3": "value" },
*  { "key1": "value", "kye2": "value", "key3": "value" }
* ]
*
* The csv output: (keys will be used for first row):
* 1. key1, key2, key3
* 2. value, value, value
* 3. value, value, value
* 4. value, value, value
*
* Uses:
* json-to-csv.php file.json > file.csv
*/

if (empty($argv[1])) die("The json file name or URL is missed\n");
$jsonFilename = $argv[1];

$json = file_get_contents($jsonFilename);
$array = json_decode($json, true);
$f = fopen('php://output', 'w');

$firstLineKeys = false;
foreach ($array as $line)
{
	if (empty($firstLineKeys))
	{
		$firstLineKeys = array_keys($line);
		fputcsv($f, $firstLineKeys);
		$firstLineKeys = array_flip($firstLineKeys);
	}
	// Using array_merge is important to maintain the order of keys acording to the first element
	fputcsv($f, array_merge($firstLineKeys, $line));
}
?>