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
		$year_id = 1; 
	}
	$year_name = get_year_name($year_id);
	$years = get_years();
	$courses = get_courses_by_year($year_id);
	include('course_list.php');
	
}else if($action == 'show_add_form'){
	$years = get_years();
	include('course_add.php');
	
}else if($action == 'add_course'){
	$year_id = filter_input(INPUT_POST, 'year_id', 
			FILTER_VALIDATE_INT);
	$number = filter_input(INPUT_POST, 'number');
	$name = filter_input(INPUT_POST, 'name'); 
	$semester = filter_input(INPUT_POST, 'semester');
	if ($year_id == NULL || $year_id == FALSE || $number == NULL || $name == NULL ||
			$semester == NULL){
				$error = "Invalid course data. Check all fields and try again."; 
				include('../errors/error.php'); 
			}else {
				add_course($year_id, $number, $name, $semester);
				header("Location: .?year_id=$year_id");
			}
}

?>