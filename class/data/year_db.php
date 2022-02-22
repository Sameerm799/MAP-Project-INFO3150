<?php 
function get_years(){
	global $db;
	$query = 'SELECT * FROM years
			  ORDER BY yearID';
	$statement = $db->prepare($query);
	$statement->execute();
	$years = $statement->fetchAll();
	$statement->closeCursor();
	return $years;
}

function get_year_name($year_id){
	global $db;
	$query = 'SELECT * FROM years
			  WHERE yearID = :year_id';
	$statement = $db->prepare($query);
	$statement->bindValue(':year_id', $year_id);
	$statement->execute();
	$year = $statement->fetch();
	$statement->closeCursor();
	$year_name = $year['yearName'];
	return $year_name;
}
?>