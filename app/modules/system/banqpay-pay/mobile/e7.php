<?php

// HAWHAW example how to make tables
// Norbert Huffschmid 
// 1.5.2004 

require("../hawhaw.inc");

$myPage = new HAW_deck("October 2001", HAW_ALIGN_CENTER);
$myPage->use_simulator();

if (!isset($_REQUEST['who']))
{
  $name_a = array("Peter", "Mary", "John", "Jane", "Norbert", "Sue", "Mike",
                  "Jenny", "Lloyd", "Tamara", "Ben", "Betty", "Tom", "Clara",
                  "Bob", "Ellen", "Rick", "Nicole", "Jack", "Liz", "Edward",
                  "Monica", "Bill", "Maria", "Pedro", "Nelly", "Ted", "Kitty",
                  "Andy", "Sabrina", "George", "", "", "", "");
   
  $myCalendar = new HAW_table();

  $headline = new HAW_row();
  
  $fmt = HAW_TEXTFORMAT_SMALL | HAW_TEXTFORMAT_BOLD; // text format for headline
  
  $monday    = new HAW_text("M", $fmt);  $headline->add_column($monday);
  $tuesday   = new HAW_text("T", $fmt);  $headline->add_column($tuesday);
  $wednesday = new HAW_text("W", $fmt);  $headline->add_column($wednesday);
  $thursday  = new HAW_text("T", $fmt);  $headline->add_column($thursday);
  $friday    = new HAW_text("F", $fmt);  $headline->add_column($friday);
  $saturday  = new HAW_text("S", $fmt);  $headline->add_column($saturday);
  $sunday    = new HAW_text("S", $fmt);  $headline->add_column($sunday);
  
  $myCalendar->add_row($headline);
  
  for ($week = 0; $week < 5; $week++)
  {
    $line[$week] = new HAW_row();
  
    for ($day = 0; $day < 7; $day++)
    {
      $i = $week * 7 + $day;  // day index
      $name = $name_a[$i];
      $link[$i] = new HAW_link($i+1, $_SERVER['PHP_SELF'] . "?who=" . $name, $name);
  
      if ($i < 31) $line[$week]->add_column($link[$i]);
      else         $line[$week]->add_column();        // make some empty cells
    }

    $myCalendar->add_row($line[$week]);
  }
  
  $myPage->add_table($myCalendar);
}
else
{
  // display event for selected name
  $myText = new HAW_text("Today is " . $_REQUEST['who'] . "'s birthday!", HAW_TEXTFORMAT_BOLD);
  $myPage->add_text($myText);
}

$myPage->create_page();

?>
