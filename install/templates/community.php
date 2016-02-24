<?php
echo '<div class="wrapper">
	<header>
		<h1>Hyper Bulletin Board</h1>
		<h2>HyperBB is a powerful and highly customizable forum software</h2>
	</header>
	<div class="container z-depth-4">
		<div class="installationSteps hide-on-med-and-down">
			<ul>
				<a href="install.php"><li>Requirements</li></a>
				<a href="install.php?=2"><li>Terms and conditions</li></a>
				<a href="install.php?=3"><li>Database setup</li></a>
				<li class="active">Community setup</li>
				<li class="disabled">Admin account</li>
				<li class="disabled">Status</li>
				<li class="disabled">Finished</li>
			</ul>
		</div>
		<div class="content">
			<div class="catebar">Community setup</div>
			
			<form method="POST" action="install.php?step=5">
				<div class="row">
					<div class="input-field col s12">
						<input id="community_name" name="community_name" type="text" class="validate">
						<label for="community_name">Community name</label>
					</div>
				</div>
				
				<div class="row">
					<div class="input-field col s12">
						<input id="community_url" name="community_url" type="text" class="validate" value="', getURL() ,'">
						<label for="community_url">Community url</label>
					</div>
				</div>
				
				<div class="input-field col s12 m6">
					<select name="community_timezone" id="db_type">';
						foreach(DateTimeZone::listIdentifiers() as $tz) {
							$current_tz = new DateTimeZone($tz);
							$offset =  $current_tz->getOffset($dt);
							$transition =  $current_tz->getTransitions($dt->getTimestamp(), $dt->getTimestamp());
							$abbr = $transition[0]['abbr'];

							echo '<option value="' .$tz. '">' .$tz. ' [' .$abbr. ' '. Installation::formatOffset($offset). ']</option>';
						}
					echo'</select>
					<label>Database type</label>
				</div>
				
				<input type="submit" class="btn-flat waves-effect waves-greyBlue waves-light right" value="Next">
			</form>
		</div>
	</div>
</div>';
?>