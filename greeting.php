<?php

function greet($name)
{
  $currentTime = date('H:i');
  return "Good morning " . $name . "! It's " . $currentTime;
}

$username = "John";
$result = greet($username);
echo $result;
