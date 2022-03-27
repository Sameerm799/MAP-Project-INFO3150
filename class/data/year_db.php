<?php 
function get_edus(){
	global $db;
	$query = 'SELECT * FROM education
			  ORDER BY eduID';
	$statement = $db->prepare($query);
	$statement->execute();
	$edus = $statement->fetchAll();
	$statement->closeCursor();
	return $edus;
}

function get_edu_name($edu_id){
	global $db;
	$query = 'SELECT * FROM education
			  WHERE eduID = :edu_id';
	$statement = $db->prepare($query);
	$statement->bindValue(':edu_id', $edu_id);
	$statement->execute();
	$edu = $statement->fetch();
	$statement->closeCursor();
	$edu_name = $edu['eduName'];
	return $edu_name;
}
?>