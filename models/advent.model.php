<?php

function AdventCalendar() {

    $xml = simplexml_load_file(BASE_URI.'/lib/advent.xml');
    $day = 2;

    $days = $xml->day;

    $obj = array();

    // For each of the day elements in the XML up to the current day number, do
    // something.  TODO: Get the verse and the activity, and pass it as an object.
    for ($i=0; $i <= $day; $i++) {
        $obj[] = array('day' => $i, 'verse' => $days[$i]->verse, 'activity' => $days[$i]->activity);
    }

    return $obj;
}