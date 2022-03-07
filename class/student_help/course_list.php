<?php include '../view/header.php'; ?>
<main>
	<aside>
		<h1>Years</h1>
		<nav>
		<ul>
			<?php foreach($years as $year) : ?>
			<li>
				<a href="?year_id=<?php echo $year['yearID'];?>">
					<?php echo $year['yearName']; ?>
				</a>
			</li>
			<?php endforeach; ?>
		</ul>
		</nav>
	</aside>
	<form action="cart.php" method="post">
		<h1><?php echo $year_name; ?></h1>
		<nav>
		<ul>
			<?php foreach($courses as $course) : ?>
			<li>
					<?php echo $course['courseName'];?>
					<ul>
						<li>
							<?php echo $course['courseNumber'];?>
							<?php echo $course['semester'];?>
							<input type="submit" value="Add Course">
						</li>
					</ul>
			</li>
			<?php endforeach; ?>
		</ul>
		</nav>
	</form>
	
	
		
</main>

<?php include '../view/footer.php'; ?>