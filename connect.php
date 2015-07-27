<?php
$DBHost = "newbon2.db.9127094.hostedresource.com";
$DBName = "newbon2";
$DBUser = "newbon2";
$DBPassword = "A2ff6cd2d5c3!";
//$DBPassword = "a2ff6cd2d5c3";
$videoondemand = mysql_pconnect($DBHost, $DBUser, $DBPassword);
mysql_select_db($DBName, $videoondemand) or die("Opps some thing went wrong");
$link = $videoondemand;
?>
