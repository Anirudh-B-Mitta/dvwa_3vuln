<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage1.inc.php';

dvwaPageStartup( array( 'authenticated', 'phpids' ) );

$page = dvwaPageNewGrab();
$page[ 'title' ]   = 'DVWA Replica "Welcome"';
$page[ 'page_id' ] = 'home';

$page[ 'body' ] .= "
<div class=\"body_padded\">
	<h1>Welcome to Damn Vulnerable Web Application!</h1>
	<h2>(Replica: only 3 vulnerabilities)</h2>
	<p>This is a sample dvwa application with only 3 vulnerabilities. Namely Brute force, Command Injection and Cross Site Request Forgery</p>
	<hr />
	<br />

	<h2>WARNING!</h2>
	<p>Damn Vulnerable Web Application is damn vulnerable! <em>Do not upload it to your hosting provider's public html folder or any Internet facing servers</em>, as they will be compromised. It is recommend using a virtual machine (such as VirtualBox or VMware ), which is set to NAT networking mode. Inside a guest machine, you can download and install XAMPP for the web server and database.</p>
	<br />
	</hr>
	<h2>Disclaimer</h2>
	<p>We do not take responsibility for the way in which any one uses this application (DVWA). We have made the purposes of the application clear and it should not be used maliciously. We have given warnings and taken measures to prevent users from installing DVWA on to live web servers. If your web server is compromised via an installation of DVWA it is not our responsibility it is the responsibility of the person/s who uploaded and installed it.</p>
	<hr />
	<br />

</div>";

dvwaHtmlEcho( $page );

?>
