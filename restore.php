<?php

define('CLI_SCRIPT', true);

require_once('/www/repos/imaster/moodle/config.php');
require_once($CFG->dirroot . '/lib/pagelib.php');
require_once($CFG->dirroot . '/backup/util/includes/restore_includes.php');

$tempdir = '1';
$course_to_restore_to = 3;
$user_doing_the_restore   = 2; //Admin
//$user_doing_the_restore   = 3; //Teacher

// Force cleaning of the whole course (nasty PAGE hack!)
$PAGE = new page_course();
$PAGE->set_course($DB->get_record('course', array('id' => $course_to_restore_to)));
remove_course_contents($course_to_restore_to, false);

$inittime = microtime(true);
$initmem  = memory_get_usage(true);

// restore contents in tempdir into existing course
$rc = new restore_controller($tempdir, $course_to_restore_to, backup::INTERACTIVE_YES, backup::MODE_GENERAL, $user_doing_the_restore, backup::TARGET_NEW_COURSE);
if ($rc->get_status() == backup::STATUS_REQUIRE_CONV) {
    echo "format: {$rc->get_format()} detected. Conversion needed";
    $rc->convert();
}
$rc->finish_ui();

$rc->save_controller();
$rc=restore_controller::load_controller($rc->get_restoreid());

if (!$rc->execute_precheck(false)) {
    $results = $rc->get_precheck_results();
    print_object($results);
}
$rc->save_controller();
$rc=restore_controller::load_controller($rc->get_restoreid());

// Advance the startdate by one year
$rc->get_plan()->get_setting('course_startdate')->set_value(
    $rc->get_plan()->get_setting('course_startdate')->get_value() + (365 * 24 * 60 * 60));

if (empty($results['errors'])) {
    $rc->execute_plan();
} else {
    print_object('Restore stopped due to errors in prechecks');
}

$rc->get_results();
$rc->destroy();


