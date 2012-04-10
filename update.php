<?php
require_once("config.php");
foreach ($update as $version => $instance) {
	system('cd '. $instance[0] .';
		mv config.php ../;
		git checkout *;
		mv ../config.php ./;
		git fetch --all --prune;
		git checkout '. $instance[8] .';
		git pull;
		git push github refs/remotes/origin/'. $instance[9] .';
		php admin/cli/upgrade.php --non-interactive --allow-unstable;
		php admin/cli/cron.php');
}
foreach ($reset as $version => $instance) {
	system('cd '. $instance[0] .';
		mv config.php ../;
		git checkout *;
		mv ../config.php ./;
		git fetch --all --prune;
		git pull;
		php admin/cli/upgrade.php --non-interactive --allow-unstable;
		php admin/cli/cron.php');
}
