<?php
require_once("config.php");
foreach ($instances as $version => $instance) {
	if ($instance[3] == "mysqli") {
		$db = mysql_connect($instance[4], $instance[5], $instance[6]);
		mysql_query("DROP DATABASE ". $instance[7]);
	} else if ($instance[3] == "pgsql") {
		$db = mysql_connect($instance[4], $instance[5], $instance[6]);
		mysql_query("DROP DATABASE ". $instance[7]);
	}
	system('rm '. $instance[0] .'config.php');
	system('php '. $instance[0] .'admin/cli/install.php --agree-license --non-interactive --allow-unstable --wwwroot='. $instance[1] .' --dataroot='. $instance[2] .' --dbtype='. $instance[3] .' --dbhost='. $instance[4] .' --dbuser='. $instance[5] .' --dbpass='. $instance[6] .' --dbname='. $instance[7] .' --fullname='. $instance[7] .' --shortname='. $instance[7] .' --adminuser='. $user .' --adminpass='. $pass);
}
