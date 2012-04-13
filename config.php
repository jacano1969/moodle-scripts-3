<?php
$user = "admin";
$pass = "Moodle#2012";

//			 0	    1					2					3				4	 5	      6	  	7	  8		9		    10
//		   array("version", "moodledir", 			"wwwroot", 				"datadir", 		       "dbtype", "dbhost",    "dbuser", "dbpass", "dbname",	"local git branch", "remote git branch"),
$reset     = array(array("20", 	     "/www/repos/istable20/moodle/", 	"http://jason.moodle.local/istable20", 	"/www/repos/istable20/data/",  "mysqli", "localhost", "root",   "moodle", "istable20",  "istable20",        ""),
                   array("21", 	     "/www/repos/istable21/moodle/", 	"http://jason.moodle.local/istable21", 	"/www/repos/istable21/data/",  "mysqli", "localhost", "root",   "moodle", "istable21",  "istable21",        ""),
                   array("22", 	     "/www/repos/istable22/moodle/", 	"http://jason.moodle.local/istable22", 	"/www/repos/istable22/data/",  "mysqli", "localhost", "root",   "moodle", "istable22",  "stable22",         ""),
                   array("23", 	     "/www/repos/imaster/moodle/", 	"http://jason.moodle.local/imaster", 	"/www/repos/imaster/data/",    "mysqli", "localhost", "root",   "moodle", "imaster",    "master",           ""),

		   array("23", 	     "/www/repos/altmaster/moodle/", 	"http://jason.moodle.local/altmaster", 	"/www/repos/altmaster/data/",  "mysqli", "localhost", "root",   "moodle", "altmaster",  "master",           ""),

		   array("20",       "/www/repos/ipStable20/moodle/", 	"http://jason.moodle.local/ipstable20",	"/www/repos/ipStable20/data/", "pgsql",  "localhost", "root",   "moodle", "ipstable20", "MOODLE_20_STABLE", ""),
		   array("21",       "/www/repos/ipStable21/moodle/", 	"http://jason.moodle.local/ipstable21",	"/www/repos/ipStable21/data/", "pgsql",  "localhost", "root",   "moodle", "ipstable21", "MOODLE_21_STABLE", ""),
		   array("22",       "/www/repos/ipStable22/moodle/", 	"http://jason.moodle.local/ipstable22",	"/www/repos/ipStable22/data/", "pgsql",  "localhost", "root",   "moodle", "ipstable22", "stable22",         ""),
		   array("23",       "/www/repos/ipMaster/moodle/", 	"http://jason.moodle.local/ipmaster",	"/www/repos/ipMaster/data/",   "pgsql",  "localhost", "root",   "moodle", "ipmaster",   "master",           ""),
	 	  );

$update    = array(array("19",       "/www/repos/stable19/moodle/", 	"http://jason.moodle.local/stable19", 	"/www/repos/stable19/data/",  "mysqli", "localhost", "root",   "moodle", "stable19",    "stable19",         "MOODLE_19_STABLE:MOODLE_19_STABLE"),
                   array("20",       "/www/repos/stable20/moodle/", 	"http://jason.moodle.local/stable20", 	"/www/repos/stable20/data/",  "mysqli", "localhost", "root",   "moodle", "stable20",    "stable20",         "MOODLE_20_STABLE:MOODLE_20_STABLE"),
                   array("21",       "/www/repos/stable21/moodle/", 	"http://jason.moodle.local/stable21", 	"/www/repos/stable21/data/",  "mysqli", "localhost", "root",   "moodle", "stable21",    "stable21",         "MOODLE_21_STABLE:MOODLE_21_STABLE"),
                   array("22",       "/www/repos/stable22/moodle/", 	"http://jason.moodle.local/stable22", 	"/www/repos/stable22/data/",  "mysqli", "localhost", "root",   "moodle", "stable22",    "stable22",         "MOODLE_22_STABLE:MOODLE_22_STABLE"),
                   array("23",       "/www/repos/master/moodle/", 	"http://jason.moodle.local/master", 	"/www/repos/master/data/",    "mysqli", "localhost", "root",   "moodle", "master",      "master",           "master:master"),
	 	  );

