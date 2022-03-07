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

function add_course($course_id, $year_id, $number, $name, $semester){
	global $db; 
	$query = 'INSERT INTO courses
				(courseID, yearID, courseNumber, courseName, semester)
			  VALUES
				(:course_id, :year_id, :number, :name, :semester)';
	$statement = $db->prepare($query); 
	$statement->bindValue(':course_id', $course_id);
	$statement->bindValue(':year_id', $year_id);
	$statement->bindValue(':number', $number);
	$statement->bindValue(':name', $name); 
	$statement->bindValue(':semester', $semester); 
	$statement->execute(); 
	$statement->closeCursor();
}

