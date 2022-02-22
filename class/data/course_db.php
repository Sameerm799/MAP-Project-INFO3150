<?php
function get_courses_by_year($year_id){
	global $db;
	$query = 'SELECT * FROM courses
			  WHERE courses.yearID = :year_id
			  ORDER BY courseID';
	$statement = $db->prepare($query);
	$statement->bindValue(":year_id", $year_id);
	$statement->execute();
	$courses = $statement->fetchAll();
	$statement->closeCursor();
	return $courses;
}

function get_course($course_id){
	global $db;
	$query = 'SELECT * FROM courses
			  WHERE courseID = :course_id';
	$statement = $db->prepare($query);
	$statement->bindValue("course_id", $course_id);
	$statement->execute();
	$course = $statement->fetch();
	$statement->closeCursor();
	return $course;
}