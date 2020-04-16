<?php

require_once( 'lib/helpers.php' );
require_once( 'lib/acf.php' );
require_once( 'lib/enqueue-assets.php' );

function after_pagination() {
	echo 'this is a text';
}

add_action( 'thundercage_after_pagination' , 'after_pagination' )

?>
