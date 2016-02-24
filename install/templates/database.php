<?php
echo '<script src="install/database.js"></script>
<div class="wrapper">
	<header>
		<h1>Hyper Bulletin Board</h1>
		<h2>HyperBB is a powerful and highly customizable forum software</h2>
	</header>
	<div class="container z-depth-4">
		<div class="installationSteps hide-on-med-and-down">
			<ul>
				<a href="install.php"><li>Requirements</li></a>
				<a href="install.php?=2"><li>Terms and conditions</li></a>
				<li class="active">Database setup</li>
				<li class="disabled">Community setup</li>
				<li class="disabled">Admin account</li>
				<li class="disabled">Status</li>
				<li class="disabled">Finished</li>
			</ul>
		</div>
		<div class="content">
			<div class="catebar">Server setup</div>
			<div class="input-field col s12 m6">
				<select id="db_type" class="icons">
					<option value="database.mysql" data-icon="external/images/mysql-logo.png" class="left circle">MySQL</option>
					<option value="database.mysqli" data-icon="external/images/mysql-logo.png" class="left circle">MySQLi</option>
					<option value="database.mysqli-oop" data-icon="external/images/mysql-logo.png" selected class="left circle">MySQLi OOP</option>
					<option value="database.sqlite" data-icon="external/images/sqlite-logo.png" class="left circle">SQLite</option>
					<option value="database.sqlite-oop" data-icon="external/images/sqlite-logo.png" class="left circle">SQLite OOP</option>
				</select>
				<label>Database type</label>
			</div>
			<form action="install.php?step=4" method="POST" id="sqlite_form" style="display: none;">
				<input name="db_type" class="db_type_change" hidden="hidden" style="display: none;" value="">
			
				<div class="row">
					<div class="input-field col s12">
						<input id="db_database" name="db_database" type="text" class="validate">
						<label for="db_database">Database</label>
					</div>
				</div>
				
				<div class="row">
					<div class="input-field col s12">
						<input id="db_prefix" name="db_prefix" type="text" class="validate">
						<label for="db_prefix">Table prefix</label>
					</div>
				</div>
				
				<input type="submit" class="btn-flat waves-effect waves-greyBlue waves-light right" value="Next">
			</form>
			<form action="install.php?step=4" method="POST" id="mysql_form">
				<input name="db_type" class="db_type_change" hidden="hidden" style="display: none;" value="">
			
				<div class="row">
					<div class="input-field col s12">
						<input id="db_server" name="db_server" type="text" class="validate">
						<label for="db_server">Server</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="db_user" name="db_user" type="text" class="validate">
						<label for="db_user">Database user</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="db_password" name="db_password" type="password" class="validate">
						<label for="db_password">Database user password</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="db_database" name="db_database" type="text" class="validate">
						<label for="db_database">Database</label>
					</div>
				</div>
				
				<div class="row">
					<div class="input-field col s12">
						<input id="db_prefix" name="db_prefix" type="text" class="validate">
						<label for="db_prefix">Table prefix</label>
					</div>
				</div>
				
				<input type="submit" class="btn-flat waves-effect waves-greyBlue waves-light right" value="Next">
			</form>
		</div>
	</div>
</div>';
?>