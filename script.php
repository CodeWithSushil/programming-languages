<?php
  $startTime = microtime(true);
  
  $numbers = range(1, 1000000);
  
  $sum = 0;
  
  foreach($numbers as $number){
  
    $sum += $number;
    
  }
  
  $endTime = microtime(true);
  
  $executionTime = ($endTime - $startTime);
  
  echo "Sum: $sum\n";
  
  $executionTime *= 1000;
  
  echo "Execution Time: $executionTime milisecond\n";
