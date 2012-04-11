<?php
$user = "admin";
$pass = "Moodle#2012";

//					0				1					2				3	4		5	6	  7		8		    9
//		   "version"   	array("moodledir", 			"wwwroot", 				"datadir", 		       "dbtype", "dbhost",    "dbuser", "dbpass", "dbname",	"local git branch", "remote git branch"),
$reset     = array("i19" => 	array("/www/repos/istable19/moodle/", 	"http://jason.moodle.local/istable19", 	"/www/repos/istable19/data/",  "mysqli", "localhost", "root",   "moodle", "istable19",  "istable19",        ""),
                   "i20" => 	array("/www/repos/istable20/moodle/", 	"http://jason.moodle.local/istable20", 	"/www/repos/istable20/data/",  "mysqli", "localhost", "root",   "moodle", "istable20",  "istable20",        ""),
                   "i21" => 	array("/www/repos/istable21/moodle/", 	"http://jason.moodle.local/istable21", 	"/www/repos/istable21/data/",  "mysqli", "localhost", "root",   "moodle", "istable21",  "istable21",        ""),
                   "i22" => 	array("/www/repos/istable22/moodle/", 	"http://jason.moodle.local/istable22", 	"/www/repos/istable22/data/",  "mysqli", "localhost", "root",   "moodle", "istable22",  "stable22",         ""),
                   "imaster" => array("/www/repos/imaster/moodle/", 	"http://jason.moodle.local/imaster", 	"/www/repos/imaster/data/",    "mysqli", "localhost", "root",   "moodle", "imaster",    "master",           ""),

		   "ialt" =>	array("/www/repos/altmaster/moodle/", 	"http://jason.moodle.local/altmaster", 	"/www/repos/altmaster/data/",  "mysqli", "localhost", "root",   "moodle", "altmaster",  "master",           ""),

		   "ip20" => 	array("/www/repos/ipStable20/moodle/", 	"http://jason.moodle.local/ipstable20",	"/www/repos/ipStable22/data/", "pgsql",  "localhost", "root",   "moodle", "ipstable20", "MOODLE_20_STABLE", ""),
		   "ip21" => 	array("/www/repos/ipStable21/moodle/", 	"http://jason.moodle.local/ipstable21",	"/www/repos/ipStable22/data/", "pgsql",  "localhost", "root",   "moodle", "ipstable21", "MOODLE_21_STABLE", ""),
		   "ip22" => 	array("/www/repos/ipStable22/moodle/", 	"http://jason.moodle.local/ipstable22",	"/www/repos/ipStable22/data/", "pgsql",  "localhost", "root",   "moodle", "ipstable22", "stable22",         ""),
		   "ipmaster" => array("/www/repos/ipMaster/moodle/", 	"http://jason.moodle.local/ipmaster",	"/www/repos/ipMaster/data/",   "pgsql",  "localhost", "root",   "moodle", "ipmaster",   "master",           ""),
	 	  );


$update    = array("19" => 	array("/www/repos/stable19/moodle/", 	"http://jason.moodle.local/stable19", 	"/www/repos/stable19/data/",  "mysqli", "localhost", "root",   "moodle", "stable19",    "stable19",         "MOODLE_19_STABLE:MOODLE_19_STABLE"),
                   "20" => 	array("/www/repos/stable20/moodle/", 	"http://jason.moodle.local/stable20", 	"/www/repos/stable20/data/",  "mysqli", "localhost", "root",   "moodle", "stable20",    "stable20",         "MOODLE_20_STABLE:MOODLE_20_STABLE"),
                   "21" => 	array("/www/repos/stable21/moodle/", 	"http://jason.moodle.local/stable21", 	"/www/repos/stable21/data/",  "mysqli", "localhost", "root",   "moodle", "stable21",    "stable21",         "MOODLE_21_STABLE:MOODLE_21_STABLE"),
                   "22" => 	array("/www/repos/stable22/moodle/", 	"http://jason.moodle.local/stable22", 	"/www/repos/stable22/data/",  "mysqli", "localhost", "root",   "moodle", "stable22",    "stable22",         "MOODLE_22_STABLE:MOODLE_22_STABLE"),
                   "master" => array("/www/repos/master/moodle/", 	"http://jason.moodle.local/master", 	"/www/repos/master/data/",    "mysqli", "localhost", "root",   "moodle", "master",      "master",           "master:master"),
	 	  );

