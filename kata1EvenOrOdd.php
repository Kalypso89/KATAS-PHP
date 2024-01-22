<?php

function even_or_odd1(int $n): string {
    if ($n%2 == 0) {  
      return "Even";
    }
      return "Odd"; 
  }

function even_or_odd2(int $n): string {
    return ["Even", "Odd"][$n % 2];
}

function even_or_odd3(int $n): string {
    return ($n % 2) ?  "Odd" : "Even";
}

function even_or_odd4(int $n): string {
    if ($n%2) {  
        return "Odd"; 
    }
    return "Even";
}

// function even_or_odd5(int $n): string {
//     return (($n%2) && "Odd") || "Even";
// } (this would work in JavaScript, but it doesn't in PHP)

echo even_or_odd1(4) ."\n";//we use \n to add a line break when working on the terminal

echo even_or_odd1(5) ."\n";

echo even_or_odd2(4) ."<br>";//we use a <br> tag to display the line break on the browser

echo even_or_odd2(5) ."<br>";

echo even_or_odd3(4) ."<br>";

echo even_or_odd3(5) ."<br>";

echo even_or_odd4(4) ."<br>";

echo even_or_odd4(5) ."<br>";