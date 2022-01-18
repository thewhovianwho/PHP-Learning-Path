<?php

$quote = "the quick brown fox jumps over the lazy dog.\n";

$replaced = preg_replace("/"."the"."/", "That", $quote, 1);

echo $replaced;

?>