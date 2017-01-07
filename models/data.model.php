<?php

function AdventCalendar() {

    $xml = simplexml_load_file(BASE_URI.'/lib/advent.xml');
    $day = 2;

    $days = $xml->day;

    $obj = array();

    // For each of the day elements in the XML up to the current day number, do
    // something.
    for ($i=0; $i <= $day; $i++) {
        $obj[] = array('day' => $i, 'verse' => $days[$i]->verse, 'activity' => $days[$i]->activity);
    }

    return $obj;
}

function ReviewModel() {

    $xml = simplexml_load_file(BASE_URI.'/lib/review.xml');

    $event = $xml->events->event;
    $evtCount = $event->count();

    $stat = $xml->statistics->stat;
    $statCount = $stat->count();

    $evtObj = array();
    $statObj = array();

    for ($i = 0; $i < $evtCount; $i++) {

        $evtObj[] = array(
            'title' => $event[$i]->title,
            'image' => $event[$i]->image,
            'summary' => $event[$i]->summary,
        );
    }

    for ($i = 0; $i < $statCount; $i++) {

        $statObj[] = array(
            'title' => $stat[$i]->title,
            'image' => $stat[$i]->image,
            'data' => $stat[$i]->data,
            'label' => $stat[$i]->label,
        );
    }

    return array('events' => $evtObj, 'stats' => $statObj);
}

function VideoModel() {
    // Return the video...
    $xml = simplexml_load_file(BASE_URI.'/lib/video.xml');

    return array('title' => $xml->title, 'summary' => $xml->summary, 'embed' => $xml->embed);
}