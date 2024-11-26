<?php

function greet($name)
{
  $currentDate = date('Y-m-d');
  return "Welcome back " . $name . "! Today is " . $currentDate;
}

$username = "Alice";
$result = greet($username);
echo $result;
