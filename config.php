<?php
$user = "admin";
$pass = "Moodle#2012";

//					0				1					2				3	4		5	6	 7
//		   "version"   	array("moodledir", 			"wwwroot", 				"datadir", 		       "dbtype", "dbhost",    "dbuser", "dbpass", "dbname"),
$reset     = array("i19" => 	array("/www/repos/istable19/moodle/", 	"http://jason.moodle.local/istable19", 	"/www/repos/istable19/data/",  "mysqli", "localhost", "root",   "moodle", "istable19"),
                   "i20" => 	array("/www/repos/istable20/moodle/", 	"http://jason.moodle.local/istable20", 	"/www/repos/istable20/data/",  "mysqli", "localhost", "root",   "moodle", "istable20"),
                   "i21" => 	array("/www/repos/istable21/moodle/", 	"http://jason.moodle.local/istable21", 	"/www/repos/istable21/data/",  "mysqli", "localhost", "root",   "moodle", "istable21"),
                   "i22" => 	array("/www/repos/istable22/moodle/", 	"http://jason.moodle.local/istable22", 	"/www/repos/istable22/data/",  "mysqli", "localhost", "root",   "moodle", "istable22"),
                   "imaster" => array("/www/repos/imaster/moodle/", 	"http://jason.moodle.local/imaster", 	"/www/repos/imaster/data/",    "mysqli", "localhost", "root",   "moodle", "imaster"),

		   "ialt" =>	array("/www/repos/altmaster/moodle/", 	"http://jason.moodle.local/altmaster", 	"/www/repos/altmaster/data/",  "mysqli", "localhost", "root",   "moodle", "altmaster"),

		   "ip20" => 	array("/www/repos/ipStable20/moodle/", 	"http://jason.moodle.local/ipstable20",	"/www/repos/ipStable22/data/", "pgsql",  "localhost", "root",   "moodle", "ipstable20"),
		   "ip21" => 	array("/www/repos/ipStable21/moodle/", 	"http://jason.moodle.local/ipstable21",	"/www/repos/ipStable22/data/", "pgsql",  "localhost", "root",   "moodle", "ipstable21"),
		   "ip22" => 	array("/www/repos/ipStable22/moodle/", 	"http://jason.moodle.local/ipstable22",	"/www/repos/ipStable22/data/", "pgsql",  "localhost", "root",   "moodle", "ipstable22"),
		   "ipmaster" => array("/www/repos/ipMaster/moodle/", 	"http://jason.moodle.local/ipmaster",	"/www/repos/ipMaster/data/",   "pgsql",  "localhost", "root",   "moodle", "ipmaster"),
	 	  );


$update    = array("19" => 	array("/www/repos/stable19/moodle/", 	"http://jason.moodle.local/stable19", 	"/www/repos/stable19/data/",  "mysqli", "localhost", "root",   "moodle", "stable19"),
                   "20" => 	array("/www/repos/stable20/moodle/", 	"http://jason.moodle.local/stable20", 	"/www/repos/stable20/data/",  "mysqli", "localhost", "root",   "moodle", "stable20"),
                   "21" => 	array("/www/repos/stable21/moodle/", 	"http://jason.moodle.local/stable21", 	"/www/repos/stable21/data/",  "mysqli", "localhost", "root",   "moodle", "stable21"),
                   "22" => 	array("/www/repos/stable22/moodle/", 	"http://jason.moodle.local/stable22", 	"/www/repos/stable22/data/",  "mysqli", "localhost", "root",   "moodle", "stable22"),
                   "master" => array("/www/repos/master/moodle/", 	"http://jason.moodle.local/master", 	"/www/repos/master/data/",    "mysqli", "localhost", "root",   "moodle", "master"),

		   "i19" => 	array("/www/repos/istable19/moodle/", 	"http://jason.moodle.local/istable19", 	"/www/repos/istable19/data/",  "mysqli", "localhost", "root",   "moodle", "istable19"),
                   "i20" => 	array("/www/repos/istable20/moodle/", 	"http://jason.moodle.local/istable20", 	"/www/repos/istable20/data/",  "mysqli", "localhost", "root",   "moodle", "istable20"),
                   "i21" => 	array("/www/repos/istable21/moodle/", 	"http://jason.moodle.local/istable21", 	"/www/repos/istable21/data/",  "mysqli", "localhost", "root",   "moodle", "istable21"),
                   "i22" => 	array("/www/repos/istable22/moodle/", 	"http://jason.moodle.local/istable22", 	"/www/repos/istable22/data/",  "mysqli", "localhost", "root",   "moodle", "istable22"),
                   "imaster" => array("/www/repos/imaster/moodle/", 	"http://jason.moodle.local/imaster", 	"/www/repos/imaster/data/",    "mysqli", "localhost", "root",   "moodle", "imaster"),

		   "ialt" =>	array("/www/repos/altmaster/moodle/", 	"http://jason.moodle.local/altmaster", 	"/www/repos/altmaster/data/",  "mysqli", "localhost", "root",   "moodle", "altmaster"),

		   "ip20" => 	array("/www/repos/ipStable20/moodle/", 	"http://jason.moodle.local/ipstable20",	"/www/repos/ipStable22/data/", "pgsql",  "localhost", "root",   "moodle", "ipstable20"),
		   "ip21" => 	array("/www/repos/ipStable21/moodle/", 	"http://jason.moodle.local/ipstable21",	"/www/repos/ipStable22/data/", "pgsql",  "localhost", "root",   "moodle", "ipstable21"),
		   "ip22" => 	array("/www/repos/ipStable22/moodle/", 	"http://jason.moodle.local/ipstable22",	"/www/repos/ipStable22/data/", "pgsql",  "localhost", "root",   "moodle", "ipstable22"),
		   "ipmaster" => array("/www/repos/ipMaster/moodle/", 	"http://jason.moodle.local/ipmaster",	"/www/repos/ipMaster/data/",   "pgsql",  "localhost", "root",   "moodle", "ipmaster"),
	 	  );

