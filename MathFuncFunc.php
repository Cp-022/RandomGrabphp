<?php
  $one = 1;
  $two = 3;
  $l = $_POST['manier'];
  echo $l;
  function plus($one,$two){
    $three = $one + $two;
    echo "This is a plus function the result of ". $one . " plus " . $two . " is " . $three ;
  }
  function keer($one,$two){
    $three = $one * $two;
    echo "\nThis is a multiply function the result of ". $one . " times " . $two . " is " . $three ;
  }
  function minus($one,$two){
    $three = $one - $two;
    echo "\nThis is a minus function the result of ". $one . " minus " . $two . " is " . $three ;
  }
  function divide($one,$two){
    $three = $one / $two;
    echo "\nThis is a divide function the result of ". $one . " divided by " . $two . " is " . $three ;
  }
  function math($l,$one,$two){
    switch($l){
      case '+':
        plus($one,$two);
        echo "wadonsd";
        break;
      case '*':
        keer($one,$two);
        break;
      case "-":
        minus($one,$two);
        break;
      case "/":
        divide($one,$two);
        break;
      default:
        echo "woops";
    }
  }
  math($l,$one,$two);
  echo "I made it"
?>
