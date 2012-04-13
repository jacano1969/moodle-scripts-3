<?php
require_once("config.php");
foreach ($reset as $instance) {
	echo 'Reset: '. $instance[8] ." -- \n";
	if ($instance[4] == "mysqli") {
		$db = mysql_connect($instance[5], $instance[6], $instance[7]);
		mysql_query("DROP DATABASE ". $instance[8]);
	} else if ($instance[4] == "pgsql") {
		$db = pg_connect('host='. $instance[5] .' dbname=postgres user='. $instance[6] .' password='. $instance[7]);
		pg_query('DROP DATABASE '. $instance[8]);
		pg_query('CREATE DATABASE '. $instance[8] .' OWNER '. $instance[6]);
	}
	unlink( $instance[1] .'config.php');
	system('rm -rf '. $instance[3] .'/*');
	system('php '. $instance[1] .'admin/cli/install.php --agree-license --non-interactive --allow-unstable --wwwroot='. $instance[2] .' --dataroot='. $instance[3] .' --dbtype='. $instance[4] .' --dbhost='. $instance[5] .' --dbuser='. $instance[6] .' --dbpass='. $instance[7] .' --dbname='. $instance[8] .' --fullname='. $instance[8] .' --shortname='. $instance[8] .' --adminuser='. $user .' --adminpass='. $pass .' > /dev/null');
	system('chown www-data:www-data '. $instance[1] .'config.php');
	system('mkdir -p '. $instance[3] .'/temp/backup/1/');
	system('unzip course'. $instance[0] .'.mbz -d '. $instance[3] .'/temp/backup/1/ > /dev/null');	
	system('chown -R www-data:www-data '. $instance[3]);
	system('chmod -R 777 '. $instance[3]);
	system('php _restore.php '. $instance[1]);
}
