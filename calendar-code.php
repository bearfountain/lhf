<?php

$edit = ($_GET['edit'] == 'true' ? true : false);

mysql_connect('localhost', 'lhf', '19alligators');
mysql_select_db('lhf');

if(isset($_GET['action'])) {
  if($_GET['action'] == 'add') {
    
  }
  else if($_GET['action'] == 'edit') {
    
  }
  else if($_GET['action'] == 'delete') {
    
  }
}


/* From davidwalsh.name/php-calendar */
/* draws a calendar */
function draw_calendar($month,$year, $edit){

  // draw table
  $calendar = '<table class="calendar">';

  // table headings
  $headings = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
  $calendar.= '<tr class="calendar-row"><td class="calendar-day-head">' . implode('</td><td class="calendar-day-head">', $headings) . '</td></tr>';

  /* days and weeks vars now ... */
  $running_day = date('w',mktime(0,0,0,$month,1,$year));
  $days_in_month = date('t',mktime(0,0,0,$month,1,$year));
  $days_in_this_week = 1;
  $day_counter = 0;
  $dates_array = array();

  // row for week one
  $calendar.= '<tr class="calendar-row">';

  // print "blank" days until the first of the current week
  for($x = 0; $x < $running_day; $x++) {
    $calendar.= '<td class="calendar-day-np">&nbsp;</td>';
    $days_in_this_week++;
  }

  // keep going with days....
  for($list_day = 1; $list_day <= $days_in_month; $list_day++) {

    $calendar.= '<td class="calendar-day ' . ($running_day == 6 ? 'sunday' : '') . '">';

    // add in the day numbe
    $calendar.= '<div class="day-number">' . $list_day . '</div>';


    // Query the database for events on this day
    $event_query = mysql_query("SELECT * FROM events WHERE date BETWEEN '$year:$month:$list_day 00-00-00' AND '$year:$month:$list_day 23:59:59'");

    while(null != ($row = mysql_fetch_assoc($event_query))) {
      $calendar .= "<p><strong>{$row['title']}</strong> {$row['description']}</p>";
    }



    // If editing is enabled, show the 'add event' link
    if($edit == true) {
      $calendar .= "<p><a href='#' class='add-event'>add event</a></p>";
    }
      
    $calendar.= '</td>';
    if($running_day == 6) {
      $calendar.= '</tr>';
      if(($day_counter+1) != $days_in_month) {
        $calendar.= '<tr class="calendar-row">';
      }
      $running_day = -1;
      $days_in_this_week = 0;
    }
    $days_in_this_week++; $running_day++; $day_counter++;
  }

  // finish the rest of the days in the week
  if($days_in_this_week < 8) {
    for($x = 1; $x <= (8 - $days_in_this_week); $x++) {
      $calendar.= '<td class="calendar-day-np">&nbsp;</td>';
    }
  }

  /* final row */
  $calendar .= '</tr>';

  /* end the table */
  $calendar .= '</table>';
  
  /* all done, return result */
  return $calendar;
}

echo '<h2>May 2012</h2>';
echo draw_calendar(5, 2012, $edit);

?>

<a href='#' class='edit-calendar'>edit calendar</a>

<?php
?>

<div class='event-add-form'>
      <form action='calendar.php?action=add'>
        <label for='title'>Title: </label> <input type='text' name='title' />
        <label for='description'>Description: </label> <input type='text' name='title' />
        <label for='location'>Location: </label> <input type='text' name='title' />
      </form>
</div>

