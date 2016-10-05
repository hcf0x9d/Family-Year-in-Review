<?php

function getView() {
    date_default_timezone_set('America/Los_Angeles');

    $dateAdvent = strtotime('2016-01-01 0:00:00');
    $dateReview = strtotime('2016-12-25 0:00:00');
    $dateVideo = strtotime('2017-01-01 0:00:00');

    $dateNow = strtotime('now');

    if ($dateNow >= $dateAdvent && $dateNow < $dateReview) {
        $view = 'advent.php';
    }

    if ($dateNow >= $dateReview && $dateNow < $dateVideo) {
        $view = 'review.php';
    }

    if ($dateNow >= $dateVideo) {
        $view = 'video.php';
    }

    // This isn't a very good implementation, but it gets the job done.
    include 'views/'.$view;
}

