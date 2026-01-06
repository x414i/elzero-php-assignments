<?php
// Elzero Web School
// PHP - Basics
// Lesson 11

$a = 200;
$b = &$a;
$a = 100;

echo $b; // 100