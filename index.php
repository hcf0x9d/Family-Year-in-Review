<?php

/**
 * This will be a Single Page App and will need to be constructed using MVC and
 * OO principals.  For simplicity, it should be flat-file
 *
 * Before Christmas:
 * 		Users visit, see paperchain items (a la Starbucks holiday free coffee campaign)
 * 			Each day user sees today's item
 * 			User can see previous items, but not future items
 * On Christmas:
 * 		Year highlights available
 * On New Year's Eve @midnight:
 * 		Video is available (Year in review video)
 *
 * Users can:
 * 		Sign up for mailing list -> updates emailed to them
 * 		Share items or a link?
 *
 * Password protected and public versions?
 * *
 */


/*

TODO: Wire up Google Analytics for some tracking love

*/

include 'models/config.model.php';
include 'controllers/view.controller.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Merry Christmas from the Fukuras!</title>
    <!-- TODO: OG links for FB shareouts et cetera -->

    <link rel="stylesheet" href="/lib/css/style.css">
</head>
<body>
    <?php getView(); ?>

    <script src="/lib/js/classes.js"></script>
</body>
</html>