<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage1.inc.php';

dvwaPageStartup( array( 'phpids' ) );

if( !dvwaIsLoggedIn() ) {
	dvwaRedirect( 'login.php' );
}

dvwaLogout();
dvwaMessagePush( "You have logged out" );
dvwaRedirect( 'login.php' );

?>
