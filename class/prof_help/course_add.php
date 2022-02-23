<?php include '../view/header.php';?>
<main>
	<h1> Add Course</h1>
	<form action="index.php" method="post" id="add_cours_form">
		<input type="hidden" name="action" value="add_course">
		
		<label>Year:</label>
		<select name="year_id">
		<?php foreach($years as $year) : ?>
			<option value ="<?php echo $year['yearID']; ?>">
			<?php echo $year['yearName']; ?>
			</option>
		<?php endforeach; ?>
		</select>
		<br>
		
		<label>Coures Number:</label>
		<input type="text" name="number" />
		<br>
		
		<label>Name:</label>
		<input type="text" name="name" />
		<br>
		
		<label>Semester:</label>
		<input type="text" name="semester" />
		<br>
		
		<label>&nbsp;</label>
		<input type="submit" value="Add Course" />
		<br>
	</form>
	<p> <a href="index.php?action=list_courses">View Course List</a>
	</p>
	
</main>
<?php include '../view/footer.php';?>