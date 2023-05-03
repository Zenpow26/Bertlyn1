<?php
$content = file_get_contents('alice.txt');
$content = strtolower ($content); 
$words = str_word_count($content, 1);
$word_count = array_count_values($words);

foreach ($word_count as $word => $count) {
	echo $word	.'=','<br>'. $count	. PHP_EOL;
}
?>