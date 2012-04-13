<?php
require_once("config.php");
foreach ($update as $instance) {
	system('cd '. $instance[1] .';
		mv config.php ../;
		git checkout *;
		mv ../config.php ./;
		git fetch --all --prune;
		git checkout '. $instance[9] .';
		git pull;
		git push github refs/remotes/origin/'. $instance[10] .';
		php admin/cli/upgrade.php --non-interactive --allow-unstable;
		php admin/cli/cron.php');
}
foreach ($reset as $instance) {
	system('cd '. $instance[1] .';
		mv config.php ../;
		git checkout *;
		mv ../config.php ./;
		git fetch --all --prune;
		git pull;
		php admin/cli/upgrade.php --non-interactive --allow-unstable;
		php admin/cli/cron.php');
}
