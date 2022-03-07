<?php
require('../data/database.php');
require('../data/year_db.php');
require('../data/course_db.php');


$action = filter_input(INPUT_POST, 'action');
if($action == NULL){
	$action = filter_input(INPUT_GET, 'action');
	if($action == NULL){
		$action = 'list_courses';
	}
}

if($action == 'list_courses'){
	$year_id = filter_input(INPUT_GET, 'year_id', 
			FILTER_VALIDATE_INT);
	if($year_id == NULL || $year_id == FALSE){
		$category_id = 1;
	}
	$years = get_years();
	$year_name = get_year_name($year_id);
	$courses = get_courses_by_year($year_id);
	include('course_list.php');
}else if($action == 'view_course'){
	$course_id = filter_input(INPUT_GET, 'course_id',
			FILTER_VALIDATE_INT);
	if($course_id == NULL || $course_id == FALSE){
		$error = 'Missing or incorrect coures id.';
		include('../errors/error.php');
	}else{
		$years = get_years();
		$course = get_course($course_id);
		
		$number = $course['courseNumber'];
		$name = $course['courseName'];
		
		
		include('course_view.php');
	}
}


?>