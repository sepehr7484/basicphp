<?php

$text='sajjad ahmadi';
echo strlen($text).'<br>';//lenght string varibale
echo str_word_count($text).'<br>';//count word
echo strrev($text).'<br>';
echo strpos($text, 'sajjad').'<br>';
echo str_replace('sajjad', 'ali', $text);
echo str_replace($text, $replace, $subject);