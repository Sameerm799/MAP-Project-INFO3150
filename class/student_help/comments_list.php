<?php include '../view/header.php';?>
<main>
<p>User Logged In: <?php echo htmlspecialchars($_SESSION["username"]); ?> </p>
	<nav>
		<ul>
			<?php foreach($edus as $edu) : ?>
			<li>
				<a href="?edu_id=<?php echo $edu['eduID'];?>">
					<?php echo $edu['eduName']; ?>
				</a>
			</li>
			<?php endforeach; ?>
			<li><a href ="?action=list_comments">Comments</a></li>
			<li><a href ="?action=list_offers">Course Offer</a></li>
			<li><a href="logout.php">Logout</a>
		</ul>
		</nav>
	<h1>Comments</h1>
	
	<aside>
		
		
	</aside>

	<section>
		
		<table>
			<tr>
				<th>Course Number</th>
				<th>Comment</th>
			</tr>
			<?php foreach($coursesIDs as $courseID) :?>
			<tr>
				<td><?php echo $courseID['courseID'];?></td>
				<td><?php echo $courseID['commentID'];?></td>
			</tr>
			<?php endforeach; ?>
		</table>
		
		<p>
			<a href="?action=show_comment_form">Add comment </a>
		</p>
	</section>
</main>



<?php include '../view/footer.php';?>