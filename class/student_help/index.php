<?php
require('../data/database.php');
require('../data/year_db.php');
require('../data/course_db.php');

session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../index.php");
    exit;
}

$action = filter_input(INPUT_POST, 'action');
if($action == NULL){
	$action = filter_input(INPUT_GET, 'action');
	if($action == NULL){
		$action = 'list_courses';
	}
}

if($action == 'list_courses'){
	$edu_id = filter_input(INPUT_GET, 'edu_id', 
			FILTER_VALIDATE_INT);
	if($edu_id == NULL || $edu_id == FALSE){
		$edu_id = 1;
	}
	$edus = get_edus();
	$edu_name = get_edu_name($edu_id);
	$degreecourses = get_deg_courses_by_edu($edu_id);
	$diplomacourses = get_dip_courses_by_edu($edu_id);
	$electivecourses = get_electives_by_edu($edu_id);
	include('course_list.php');
	
}else if($action == 'list_comments'){
	$educomment_id = filter_input(INPUT_GET, 'edu_id', FILTER_VALIDATE_INT);
	if($educomment_id == NULL || $edu_id == FALSE){
	    $educomment_id=1;
	}
	$edus = get_edus();
	$coursesIDs = get_courseid($educomment_id);
	include('comments_list.php');

}else if($action == 'show_comment_form'){
	include('comments_add.php');
	
}else if($action == 'add_comment'){
	$edu_id = filter_input(INPUT_POST, 'edu_id',
		FILTER_VALIDATE_INT); 
	$number = filter_INPUT(INPUT_POST, 'number');
	$comment = filter_input(INPUT_POST, 'comment');
	if($number == NULL || $comment == NULL){
		$error = "Invalid comment data. Check all fields and try again.";
		include('../errors/error.php');
	}else{
		$edu_id = 1; 
		add_comment($edu_id, $number, $comment);
		header("Location: .?edu_id=$edu_id");
	}
}


?>