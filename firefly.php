<?php
/**
 * @package   turnitintool
 * @copyright 2016 Turnitin
 *
 */
require_once ($CFG->dirroot.'/course/moodleform_mod.php');
require_once ($CFG->dirroot.'/mod/turnitintool/lib.php');

// Courses 2 to 101
/*
for ($i=2; $i <= 101; $i++) {
    $newAssignment->name = "Test Assignment for Course ".$i;
    $newAssignment->type = 0;
    $newAssignment->numparts = 1;
    $newAssignment->portfolio = 0;
    $newAssignment->maxfilesize = 0;
    $newAssignment->defaultdtstart = 1468330556;
    $newAssignment->defaultdtdue = 1468935356;
    $newAssignment->defaultdtpost = 1468935356;
    $newAssignment->anon = 0;
    $newAssignment->studentreports = 0;
    $newAssignment->allowlate = 0;
    $newAssignment->reportgenspeed = 0;
    $newAssignment->submitpapersto = 1;
    $newAssignment->spapercheck = 1;
    $newAssignment->internetcheck = 1;
    $newAssignment->journalcheck = 1;
    $newAssignment->excludebiblio = 0;
    $newAssignment->excludequoted = 0;
    $newAssignment->excludevalue;
    $newAssignment->excludetype = 1;
    $newAssignment->transmatch = 0;
    $newAssignment->ownerid;
    $newAssignment->grade = 100;
    $newAssignment->grade_rescalegrades;
    $newAssignment->gradecat = 1;
    $newAssignment->gradepass;
    $newAssignment->visible = 1;
    $newAssignment->cmidnumber;
    $newAssignment->groupmode = 0;
    $newAssignment->availabilityconditionsjson = {"op":"&","c":[],"showc":[]};
    $newAssignment->tags;
    $newAssignment->course = $i;
    $newAssignment->coursemodule = 11;
    $newAssignment->section = 0;
    $newAssignment->module = 23;
    $newAssignment->modulename = "turnitintool";
    $newAssignment->instance;
    $newAssignment->add = "turnitintool";
    $newAssignment->update = 0;
    $newAssignment->return = 0;
    $newAssignment->sr = 0;
    $newAssignment->competency_rule = 0;
    $newAssignment->submitbutton = "Save and display";
    $newAssignment->groupingid = 0;
    $newAssignment->completion = 0;
    $newAssignment->completionview = 0;
    $newAssignment->completionexpected = 0;
    $newAssignment->completiongradeitemnumber;
    $newAssignment->conditiongradegroup = Array ( );
    $newAssignment->conditionfieldgroup = Array ( );
    $newAssignment->intro;
    $newAssignment->introformat = 1;
}
*/
$newAssignment=stdClass;
$newAssignment->name = "Firefly test";
$newAssignment->type = 0;
$newAssignment->numparts = 1;
$newAssignment->portfolio = 0;
$newAssignment->maxfilesize = 0;
$newAssignment->defaultdtstart = 1468330556;
$newAssignment->defaultdtdue = 1468935356;
$newAssignment->defaultdtpost = 1468935356;
$newAssignment->anon = 0;
$newAssignment->studentreports = 0;
$newAssignment->allowlate = 0;
$newAssignment->reportgenspeed = 0;
$newAssignment->submitpapersto = 1;
$newAssignment->spapercheck = 1;
$newAssignment->internetcheck = 1;
$newAssignment->journalcheck = 1;
$newAssignment->excludebiblio = 0;
$newAssignment->excludequoted = 0;
$newAssignment->excludevalue = NULL;
$newAssignment->excludetype = 1;
$newAssignment->transmatch = 0;
$newAssignment->ownerid = NULL;
$newAssignment->grade = 100;
$newAssignment->grade_rescalegrades = NULL;
$newAssignment->gradecat = 1;
$newAssignment->gradepass = NULL;
$newAssignment->visible = 1;
$newAssignment->cmidnumber = NULL;
$newAssignment->groupmode = 0;
$newAssignment->availabilityconditionsjson = {"op":"&","c":[],"showc":[]};
$newAssignment->tags = NULL;
$newAssignment->course = 2;
$newAssignment->coursemodule = 11;
$newAssignment->section = 0;
$newAssignment->module = 23;
$newAssignment->modulename = "turnitintool";
$newAssignment->instance = NULL;
$newAssignment->add = "turnitintool";
$newAssignment->update = 0;
$newAssignment->return = 0;
$newAssignment->sr = 0;
$newAssignment->competency_rule = 0;
$newAssignment->submitbutton = "Save and display";
$newAssignment->groupingid = 0;
$newAssignment->completion = 0;
$newAssignment->completionview = 0;
$newAssignment->completionexpected = 0;
$newAssignment->completiongradeitemnumber = NULL;
$newAssignment->conditiongradegroup = Array ( );
$newAssignment->conditionfieldgroup = Array ( );
$newAssignment->intro = NULL;
$newAssignment->introformat = 1;

var_dump(newAssignment);

// turnitintool_add_instance($newAssignment);
