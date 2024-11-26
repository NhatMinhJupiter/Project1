<?php

namespace App\Http\Controllers;

class TestController
{
  public function index()
  {
    // This is a test project
    $test = [];
    for ($i = 0; $i < 10; $i++) {
      array_push($test, $i);
    }
  }
  public function test(){
    // This is a test project
    $test1 = [];
    for ($i = 0; $i < 10; $i++) {
      for($j=0;$j<10;$j++){
        array_push($test1, $i*$j);
      }
      
    }
  }
}
