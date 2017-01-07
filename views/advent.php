<?php

include BASE_URI.'\models\data.model.php';


// Construct the advent calendar HTML
// When constructing the calendar, only respond with the data for today or
// before, not any of the days after so we can't peek.
function CalendarView() {
    $idx = 1;

    $obj = AdventCalendar();

    // Loop through the object that was returned by the advent.model.  This will get
    // us all of the verses, activities and day numbers for the current point in the
    // calendar.
    foreach ($obj as $day) {

        // For ease, let's prep some variables
        // BUG: Need to get a citation in for the verse
        $verse = $day['verse'];
        $activity = $day['activity'];
        $day = $day['day'] + '1';

        echo '
            <li class="calendar-day col-md-2 col-sm-4">
                <div class="calendar-day-inner is-past">
                    <div class="day-cover">
                        <span class="day-cover-date">' . $day . '</span>
                    </div>
                    <div class="day-detail">
                        <div class="day-detail-verse">
                            <blockquote class="dat-detail-verse-text">' . $verse . '</blockquote>
                        </div>
                        <div class="day-detail-activity">
                            <p class="day-detail-activity-text">' . $activity . '</p>
                        </div>
                    </div>
                </div>
            </li>
        ';
        // TODO: if there are images on instagram, post them in a gallery.  The day card is swipable as below:
        // Verse/Activity -> image -> image -> ... -> loop to beginning
        // Is appended to day-detail with ajax

        // Increment the counter for the next phase.
        $idx++;
    }

    // Pick up where we left off from the previous loop.  This will fill in the rest
    // of the calendar which cannot be viewed.
    for ($i = $idx; $i <= 25; $i++) {
        echo '
            <li class="calendar-day col-md-2 col-sm-4">
                <div class="calendar-day-inner">
                    <div class="day-cover">
                        <span class="day-cover-date">' . $i . '</span>
                    </div>
                </div>
            </li>
        ';
    }
}

// TODO: On entry, the user sees today's information in a modal.
?>


<main class="container">
    <ul class="calendar row">
        <?php CalendarView(); ?>
    </ul>
</main>