<?php include '../view/header.php';?>
<main>
	<h1> Add Comment </h1>
	<form action="index.php" method="post" id="add_comment_form">
		<input type = "hidden" name="action" value="add_comment">
		
		<label>Course Number: </label>
		<input type="text" name="number" />
		<br>
		
		<label>Comment: </label>
		<textarea name="comment" rows="4" cols"50"></textarea>
		<br>
		
		<label>&nbsp;</label>
		<input type="submit" value="Add Comment" />
		<br>
	</form>
	<p><a href="index.php?action=list_comments">View Comments</a>
	</p>
	
</main>
<?php include '../view/footer.php';?>