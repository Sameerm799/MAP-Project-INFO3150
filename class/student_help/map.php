<?php include '../view/header.php';?>

	
<?php
if(isset($_POST['courseName'])){
	$courseName = (string)$_POST['courseName'];
	global $db;
	$query = 'SELECT * FROM courses WHERE courseName = :courseName';
	$statement = $db->prepare($query);
	$statement ->bindValue(':courseName', $courseN);
	$statement ->execute(); 
	$courses = $statement->fetchAll();
	$statement->closeCursor();
	return $courses;
	

}
?>

<main>
<?php echo $courseN ?>
</main>

<?php include'../view/footer.php';?>