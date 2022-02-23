<?php include '../view/header.php';?>
<main> 
	<h1>Courses</h1>
	
	<aside>
		<h2>Years</h2>
		<nav>
		<ul>
		<?php foreach ($years as $year) : ?>
			<li>
			<a href = "?year_id=<?php echo $year['yearID']; ?>">
				<?php echo $year['yearName']; ?>
			</a>
			</li>
		<?php endforeach; ?>
		</ul>
		</nav>
	</aside>
	
	<section> 
		<h2><?php echo $year_name; ?></h2>
		<table>
			<tr>
				<th>Number</th>
				<th>Name</th>
				<th>Semester</th>
				<th>&nbsp;</th>
			</tr>
			<?php foreach($courses as $course) : ?>
			<tr>
				<td><?php echo $course['courseNumber']; ?></td>
				<td><?php echo $course['courseName']; ?></td>
				<td><?php echo $course['semester']; ?></td>
			</tr>
			<?php endforeach; ?>
		</table>
		<p>
			<a href="?action=show_add_form">Add Course</a>
		</p>
	</section>
</main>
<?php include '../view/footer.php'; ?>