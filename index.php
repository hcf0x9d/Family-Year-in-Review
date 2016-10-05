<?php

/**
 * This will be a Single Page App and will need to be constructed using MVC and
 * OO principals.  For simplicity, it should be flat-file
 *
 * TODO: Setup the schema for controllers and models
 *
 * TODO: Log the goals of the application (Client view)
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
 *
 * TODO: Prototype.  The application itself should be view agnostic (as much as possible)
 *
 */


/*

Flow:

-> page hit
-> run to the DB, grab the appropriate stuff
-> return json
-> select view to display (paper chain, year in review or video)
-> modify/build view with javascript
-> log successful view in DB

*/

include 'models/config.model.php';
include 'controllers/view.controller.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Client View</title>
</head>
<body>
    <?php getView(); ?>
</body>
</html>