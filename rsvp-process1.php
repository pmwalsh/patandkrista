<?phpdefine('DB_NAME', 'patandkr_guests');define('DB_USER', 'patandkr_admin');define('DB_PASSWORD', 'In!!u@JCZb');define('DB_HOST', 'patandkrista.com');// Open connection to database$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);if (!$link) {	die('Could not connect: ' . mysql_error());}$db_selected = mysql_select_db(DB_NAME, $link);if (!$db_selected) {	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());}//echo 'Connected successfully';//Form variables$guest_code = $_POST['code'];//Clean upfunction cleanData($str) {	$str = trim($str);    $str = strip_tags($str);    $str = strtolower($str);    return $str;}        $guest_code = cleanData($guest_code);$error = "";	if(isset($submitted)) {    if($guest_code == '') {    	$error .= '<p class="error">Please enter your RSVP code.</p>' . "\n";    } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", $guest_code)) {        $error .= '<p class="error">Please enter a valid email address.</p>' . "\n";    }    if(!$error) {        // Add to database / pull up database profile    	$add_email  = "INSERT INTO subscribers (email,date) VALUES ('$email',CURDATE())";        mysql_query($add_email) or die(mysql_error());    } else {    	echo $error;    }}?>