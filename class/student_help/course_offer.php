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

	<h1> Course Offer </h1>	
	
	<aside>
	</aside>
	
	<section>
	
	</ul>
	
		<table>
			<tr>
				<th>Course Number</th>
				<th>Course Name</th>
				<th>Pre-requiste</th>
				<th>Semester</th>
			</tr>
			
			<h2><?php echo $edu_name; ?></h2>
			<?php foreach($degreeNcompleted as $degreeNcomplete) :?>
			<tr>
				<td><?php echo $degreeNcomplete['courseID'];?> </td>
				<td><?php echo $degreeNcomplete['courseName'];?> </td>
				<td><?php echo $degreeNcomplete['prereqID']; ?> </td>
				<td><?php echo $degreeNcomplete['semester']; ?></td>
			</tr>
			<?php endforeach; ?>
			
			<?php foreach($diplomaNcompleted as $diplomaNcomplete) :?>
			<tr>
				<td><?php echo $diplomaNcomplete['courseID'];?> </td>
				<td><?php echo $diplomaNcomplete['courseName'];?> </td>
				<td><?php echo $diplomaNcomplete['prereqID']; ?> </td>
				<td><?php echo $diplomaNcomplete['semester']; ?></td>
			</tr>
			<?php endforeach; ?>
			
		</table>
	</section>
</main>

<?php include '../view/footer.php'; ?>