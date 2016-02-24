<?php
echo '<div class="wrapper">
	<header>
		<h1>Hyper Bulletin Board</h1>
		<h2>HyperBB is a powerful and highly customizable forum software</h2>
	</header>
	<div class="container z-depth-4">
		<div class="installationSteps hide-on-med-and-down">
			<ul>
				<li class="active">Requirements</li>
				<li class="disabled">Terms and conditions</li>
				<li class="disabled">Database setup</li>
				<li class="disabled">Community setup</li>
				<li class="disabled">Admin account</li>
				<li class="disabled">Status</li>
				<li class="disabled">Finished</li>
			</ul>
		</div>
		<div class="content">
			<div class="catebar">Requirements</div>
			<p>', TimeGreeting() ,' web master and thank you for choosing HyperBB!</p>
			<p>This is the first installation step and HyperBB will now conduct some important tests</p>
			<p class="title">MySQLi class:</p>
			<p>', class_exists('mysqli') ? 'Exists!' : 'Doesnt exist, HyperBB can use procedural MySQL' ,'</p>
			<p class="title">SQLite3 class:</p>
			<p>', class_exists('SQLite3') ? 'Exists!' : 'Doesnt exist, HyperBB can use procedural SQLite' ,'</p>
			<p class="title">Required 5.0 and above</p>
			<p>', version_compare(phpversion(), '5.0', '>') ? 'Yours is ' . phpversion() : 'Test <u>failed</u>, php version ' . phpversion() ,'</p>
			<a href="install.php?step=2" class="waves-effect  waves-greyBlue btn-flat right">Next <i class="fa fa-chevron-right right"></i></a>
		</div>
	</div>
</div>';
?>