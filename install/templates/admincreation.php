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
				<a href="install.php?=4"><li>Community setup</li></a>
				<li class="active">Admin account</li>
				<li class="disabled">Status</li>
				<li class="disabled">Finished</li>
			</ul>
		</div>
		<div class="content">
			<div class="catebar">Administrator account</div>
			
			<form method="POST" action="install.php?step=6">
				<div class="row">
					<div class="input-field col s12">
						<input id="admin_username" name="admin_username" type="text" class="validate">
						<label for="admin_username">Username</label>
					</div>
				</div>
				
				<div class="row">
					<div class="input-field col s12">
						<input id="admin_email" name="admin_email" type="text" class="validate">
						<label for="admin_email">Email</label>
					</div>
				</div>
				
				<div class="row">
					<div class="input-field col s12">
						<input id="admin_password" name="admin_password" type="password" class="validate">
						<label for="admin_password">Password</label>
					</div>
				</div>
				
				<div class="row">
					<div class="input-field col s12">
						<input id="admin_password2" name="admin_password2" type="password" class="validate">
						<label for="admin_password2">Repeat password</label>
					</div>
				</div>
				
				<input type="submit" class="btn-flat waves-effect waves-greyBlue waves-light right" value="Next">
			</form>
		</div>
	</div>
</div>';
?>