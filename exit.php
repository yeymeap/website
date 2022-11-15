<?php 
	session_start();
	session_destroy();
	Header( "HTTP/1.1 301 Moved Permanently" ); /* véglegesen átirányítva */
    Header( "Location: index.php" ); /* hova van átirányítva */
    exit;
?>