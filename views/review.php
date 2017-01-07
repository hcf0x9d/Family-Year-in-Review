<?php

/**
 * Year in Review
 */

include BASE_URI.'\models\data.model.php';

function BuildEvents () {
    $evtObj = ReviewModel();

    print_r($evtObj);
}

function BuildStats () {

}

?>
<article>
    <header>
        <!-- Intro Card -->
    </header>
    <section>
        <!-- Summary Section -->
    </section>
    <section>
        <!-- Review -->
        <ul>
            <?php BuildEvents(); ?>
            <!-- ======================================================================= -->
            <!-- SECTION: TOP EVENTS                                                     -->

            <!--

                Each event item gets its own panel consisting of
                - Image
                - Title
                - Summary

             -->

            <!-- END SECTION: TOP EVENTS                                                 -->
            <!-- ======================================================================= -->
        </ul>
    </section>
    <section></section>
</article>