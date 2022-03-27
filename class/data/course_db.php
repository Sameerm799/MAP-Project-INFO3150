<?php
function get_deg_courses_by_edu($edu_id){
	global $db;
	$query = 'SELECT * FROM degreecourses
			  WHERE degreecourses.eduID = :edu_id
			  ORDER BY courseID';
	$statement = $db->prepare($query);
	$statement->bindValue(":edu_id", $edu_id);
	$statement->execute();
	$degreecourses = $statement->fetchAll();
	$statement->closeCursor();
	return $degreecourses;
}

function get_electives_by_edu($edu_id){
	global $db; 
	$query = 'SELECT * FROM electives
			  WHERE electives.eduID = :edu_id
			  ORDER BY courseID';
	$statement = $db->prepare($query);
	$statement->bindValue(":edu_id", $edu_id);
	$statement->execute();
	$electivecourses = $statement->fetchAll();
	$statement->closeCursor();
	return $electivecourses;
}

function get_dip_courses_by_edu($edu_id){
	global $db;
	$query = 'SELECT * FROM diplomacourses
			  WHERE diplomacourses.eduID = :edu_id
			  ORDER BY courseID';
	$statement = $db->prepare($query);
	$statement->bindValue(":edu_id", $edu_id);
	$statement->execute();
	$diplomacourses = $statement->fetchAll();
	$statement->closeCursor();
	return $diplomacourses;
}

function get_courseid($edu_id){
	global $db;
	$query = 'SELECT * FROM comments
			  WHERE comments.eduID = :edu_id
			  ORDER BY courseID';
	$statement = $db->prepare($query);
	$statement->bindValue(":edu_id", $edu_id);
	$statement->execute();
	$coursesIDs = $statement->fetchAll();
	$statement->closeCursor();
	return $coursesIDs;
}

function get_comment($edu_id){
	global $db; 
	$query = 'SELECT * FROM comments
			  WHERE eduID = :edu_id';
	$statement = $db->prepare($query);
	$statement ->bindValue(":edu_id", $edu_id);
	$statement ->execute();
	$commentsec = $statement->fetch();
	return $commentsec;
}

function add_comment($edu_id, $number, $comment){
	global $db; 
	$query = 'INSERT INTO comments
			(eduID, courseID, commentID)
		  VALUES
			(:edu_id, :number, :comment)';
	$statement = $db->prepare($query);
	$statement->bindValue(':edu_id', $edu_id);
	$statement->bindValue(':number', $number);
	$statement->bindValue(':comment', $comment); 
	$statement->execute();
	$statement->closeCursor();
}
?>