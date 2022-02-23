<?php include '../view/header.php'; ?>
<main>
	<aside>
		<h1>Years</h1>
		<nav>
			<ul>
				<?php foreach($years as $year) : ?>
				<li>
					<a href="?year_id=<?php
							echo $year['yearID']; ?>">
						<?php echo $year['yearName']; ?>
					</a>
				</li>
				<?php endforeach; ?>
			</ul>
		</nav>
	</aside>
	<section>
		<h1><?php echo $name; ?></h1>
		<p>Code: <?php echo $number; ?></p>
	</section>
</main>
<?php include '../view/footer.php'; ?>