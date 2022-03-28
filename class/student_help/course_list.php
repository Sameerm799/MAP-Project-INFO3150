<?php include '../view/header.php'; ?>

<main>
	<p>User Logged In: <?php echo htmlspecialchars($_SESSION["username"]); ?> </p>
	
	<aside>
		
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
			<li>Offer Course</li>
			<li><a href="logout.php">Logout</a>
		</ul>
		</nav>
	</aside>
	
	<section>
		<h2><?php echo $edu_name; ?></h2>
		<table>	
			<tr>
				<th>Course Number</th>
				<th>Course Name</th>
				<th>Pre-requiste</th>
				<th>Semester</th>
				<th>Completed</th>
				
				
			</tr>
			<?php foreach($degreecourses as $degreecourse) :?>
			<tr>
				<td><?php echo $degreecourse['courseID'];?> </td>
				<td><?php echo $degreecourse['courseName'];?> </td>
				<td><?php echo $degreecourse['prereqID']; ?> </td>
				<td><?php echo $degreecourse['semester']; ?></td>
				<td><?php echo $degreecourse['completed']; ?></td>
			</tr>
			<?php endforeach; ?>
			
			<?php foreach($diplomacourses as $diplomacourse) :?>
			<tr>
				<td><?php echo $diplomacourse['courseID'];?> </td>
				<td><?php echo $diplomacourse['courseName'];?> </td>
				<td><?php echo $diplomacourse['prereqID']; ?> </td>
				<td><?php echo $diplomacourse['semester']; ?></td>
				<td><?php echo $diplomacourse['completed']; ?></td>
			</tr>
			<?php endforeach; ?>
		</table>
		
		<h2>Electives</h2>
		<p>Electives not needed for Diploma Program</p>
		<table>	
			<tr>
				<th>Course Number</th>
				<th>Course Name</th>
				<th>Pre-requiste</th>
				<th>Semester</th>
				<th>Completed</th>
			</tr>
			<?php foreach($electivecourses as $electivecourse) :?>
			<tr>
				<td><?php echo $electivecourse['courseID'];?> </td>
				<td><?php echo $electivecourse['courseName'];?> </td>
				<td><?php echo $electivecourse['prereqID']; ?> </td>
				<td><?php echo $electivecourse['semester']; ?></td>
				<td><?php echo $electivecourse['completed']; ?></td>
			</tr>
			<?php endforeach; ?>
		</table>
	</section>
</main>

<?php include '../view/footer.php'; ?>