<?php
require_once("config.php");
foreach ($update as $version => $instance) {
	
	system('cd '. $instance[0]);
echo 'cd '. $instance[0];

//	system('mv config.php ../');
//	system('git checkout *');
//	system('mv ../config.php ./');
//	system('git fetch --all --prune');
//	system('git checkout '. $instance[8]);
//	system('git pull');
//	system('git push github refs/remotes/origin/'. $instance[9]);
//	system('php admin/cli/upgrade.php --non-interactive --allow-unstable');
//	system('php admin/cli/cron.php');

}
/*
foreach ($reset as $version => $instance) {
	system('cd '. $instance[0]);
	system('mv config.php ../');
	system('git checkout *');
	system('mv ../config.php ./');
	system('git fetch --all --prune');
	system('git checkout '. $instance[8]);
	system('git pull');
	system('php admin/cli/upgrade.php --non-interactive --allow-unstable');
	system('php admin/cli/cron.php');

}
*/
