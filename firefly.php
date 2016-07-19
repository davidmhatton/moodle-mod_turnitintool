<?php

// Include the basics from CFG
unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle29';
$CFG->dbuser    = 'moodle';
$CFG->dbpass    = 'mdl_Dev_S@y';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
);

$CFG->wwwroot   = 'http://moodle29.turnitin.dev';
$CFG->dataroot  = '/var/www/moodledata29';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 02777;

require_once('/var/www/site/moodles/moodle29/lib/setup.php');
include __DIR__.'/lib.php';



public function SetModule()
{
    $module = $DB->get_record("modules", array("name" => "turnitintool"));
    $coursemodule = new stdClass();
    $coursemodule->course = $courseid;
    $coursemodule->module = $module->id;
    $coursemodule->added = time();
    $coursemodule->instance = $toolid;
    $coursemodule->section = 0;

    include_once($CFG->dirroot."/course/lib.php");

    // Add Course module and get course section.
    if (! $coursemodule->coursemodule = add_course_module($coursemodule) ) {
        echo $OUTPUT->notification(get_string('migrationassignmenterror1', 'turnitintooltwo', $courseid));
        turnitintooltwo_activitylog(get_string('migrationassignmenterror1', 'turnitintooltwo', $courseid), "REQUEST");
        return false;
    }

    if (is_callable('course_add_cm_to_section')) {
        if (!$sectionid = course_add_cm_to_section($coursemodule->course,
        $coursemodule->coursemodule, $coursemodule->section)) {
            echo $OUTPUT->notification(get_string('migrationassignmenterror2', 'turnitintooltwo', $courseid));
            turnitintooltwo_activitylog(get_string('migrationassignmenterror2', 'turnitintooltwo', $courseid), "REQUEST");
            return false;
        }
    } else {
        if (!$sectionid = add_mod_to_section($coursemodule)) {
            echo $OUTPUT->notification(get_string('migrationassignmenterror2', 'turnitintooltwo', $courseid));
            turnitintooltwo_activitylog(get_string('migrationassignmenterror2', 'turnitintooltwo', $courseid), "REQUEST");
            return false;
        }
    }
}


/**
 * Create a new TII V1 assignment in the specified course number, using the given name and description.
 * @param int $newCourse The course into which this new assignment is to be created.
 * @param string $newName The name of the new assignment.
 * @param string $newdesc The description of the new assignment.
 */
public function MakeNewV1($newCourse, $newCourseModule, $newName, $newDesc) {


    $newAssign->name = $newName;
    $newAssign->type = "0";
    $newAssign->numparts = "1";
    $newAssign->portfolio = "0";
    $newAssign->maxfilesize = "0";
    $newAssign->defaultdtstart = "1468829266";
    $newAssign->defaultdtdue = "1469434066";
    $newAssign->defaultdtpost = "1469434066";
    $newAssign->anon = "0";
    $newAssign->studentreports = "0";
    $newAssign->allowlate = "0";
    $newAssign->reportgenspeed = "0";
    $newAssign->submitpapersto = "1";
    $newAssign->spapercheck = "1";
    $newAssign->internetcheck = "1";
    $newAssign->journalcheck = "1";
    $newAssign->excludebiblio = "0";
    $newAssign->excludequoted = "0";
    $newAssign->excludevalue = "";
    $newAssign->excludetype = "1";
    $newAssign->transmatch = "0";
    $newAssign->ownerid = "";
    $newAssign->grade = 100;
    $newAssign->gradecat = "2";
    $newAssign->gradepass =  NULL;
    $newAssign->visible = "1";
    $newAssign->cmidnumber = "";
    $newAssign->groupmode = "0";
    $newAssign->course = (string)$newCourse; // Course number. Needs to be ranged between 2 and 101 inclusive.
    $newAssign->coursemodule = ?; // TODO: insert a new row in the table, get the new id, and feed it in here.
    $newAssign->section = 0;
    $newAssign->module = 23;
    $newAssign->modulename = "turnitintool";
    $newAssign->instance = "";
    $newAssign->add = "turnitintool";
    $newAssign->update = 0;
    $newAssign->return = 0;
    $newAssign->sr = 0;
    $newAssign->submitbutton2 = "Save and return to course";
    $newAssign->groupingid = 0;
    $newAssign->completion = 0;
    $newAssign->completionview = 0;
    $newAssign->completionexpected = 0;
    $newAssign->completiongradeitemnumber =  NULL;
    $newAssign->conditiongradegroup =  array();
    $newAssign->conditionfieldgroup =  array();
    $newAssign->intro = $newDesc;
    $newAssign->introformat = "1";

    // var_dump($newAssign);
    turnitintool_add_instance($newAssign);
}

MakeNewV1($newAssign, 4);
