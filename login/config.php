 <?php
session_start();
define('file:///home/prerak/Desktop/Imperial/index.html', filter_var('file:///home/prerak/Desktop/Imperial/index.html', FILTER_SANITIZE_URL));
// Visit https://code.google.com/apis/console to generate your
// oauth2_client_id, oauth2_client_secret, and to register your oauth2_redirect_uri.
define('126825442650-64lnlmuegq6mug3b16hufierlp75qngq.apps.googleusercontent.com','prerak');
define('bsocPVXjB-lzZNxzq4Oxqsfg','OAUTH CLIENT SECRET');
define('http://localhost/social/login.php?google','OAUTH REDIRECT URI');//example:http://localhost/social/login.php?google
define('APPROVAL_PROMPT','auto');
define('ACCESS_TYPE','offline');
 
//For facebook
define('APP_ID','Facebook App ID');
define('APP_SECRET','Facebook App Secret');
?>