<?php

$action = $_GET["action"];
$name = $_GET["name"];
$file = $name . ".txt";

if(@file_get_contents($file) == false) {
	@file_put_contents($file, 0);
}

if($action == "add") {
	$hit_count = @file_get_contents($file); // read the hit count from file
	echo "Download added";
	$hit_count++; // increment the hit count by 1
	@file_put_contents($file, $hit_count); // store the new hit count
}

if($action == "count") {
	$hit_count = @file_get_contents($file); // read the hit count from file
	echo $hit_count; //  display the hit count
}

?>