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
	<section>
		<h1><?php echo $year_name; ?></h1>
		<nav>
		<ul>
			<?php foreach($courses as $course) : ?>
			<li>
				<a href="?action=view_course&amp;course_id=<?php
						echo $course['courseID']; ?>">
					<?php echo $course['courseName']; ?>
				</a>
			</li>
			<?php endforeach; ?>
		</ul>
		</nav>
	</section>
</main>
<?php include '../view/footer.php'; ?>