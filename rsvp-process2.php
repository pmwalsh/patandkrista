<?phpdefine('DB_NAME', 'patandkr_guests');define('DB_USER', 'patandkr');define('DB_PASSWORD', 'In!!u@JCZb');define('DB_HOST', 'localhost');// Open connection to database$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);if (!$link) {	die('Could not connect: ' . mysql_error());}$db_selected = mysql_select_db(DB_NAME, $link);if (!$db_selected) {	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());}$info1 = $_POST['primary_guest'];$info2 = $_POST['primary_attending'];$info3 = $_POST['primary_rehearsal'];$info4 = $_POST['primary_entree'];$info5 = $_POST['housing'];$info6 = $_POST['secondary_guest'];$info7 = $_POST['secondary_attending'];$info8 = $_POST['secondary_rehearsal'];$info9 = $_POST['secondary_entree'];          $result = mysql_query("UPDATE rsvp SET           		 primary_attending = '$info2',          		 primary_rehearsal = '$info3',          		 primary_entree = '$info4',          		 housing = '$info5',          		 secondary_guest = '$info6',          		 secondary_attending = '$info7',          		 secondary_rehearsal = '$info8',          		 secondary_entree = '$info9',          		 submitted = 1           		 WHERE primary_guest = '$info1'");if(!$result) {  die('Could not update data: ' . mysql_error());  mysql_close();}mysql_free_result($result);mysql_close();?>