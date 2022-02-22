<?php include '../view/header.php';?>
<main> 
	<h1>Courses</h1>
	
	<aside>
		<h2>Years</h2>
		<nav>
		<ul>
		<?php foreach ($years as $year) : ?>
			<li>
			<a href = "?year_id=<?php echo $category['yearID']; ?>">
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
				<th>Code</th>
				<th>Name</th>
				<th>&nbsp;</th>
			</tr>
			<?php foreach($courses as $course) : ?>
			<tr>
				<td><?php echo $course['courseCode']; ?></td>
				<td><?php echo $course['courseName']; ?></td>
			</tr>
			<?php endforeach; ?>
		</table>
	</section>
</main>
<?php include '../view/footer.php'; ?>