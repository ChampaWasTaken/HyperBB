<div class="wrapper">
	<div class="container">
		<div class="pageDescriptionWithHeading">
			<h1>{$language['page_title']}</h1>
			<h2>{$language['page_description']}</h2>
		</div>
		
		<form class="loginForm col s12" action="index.php?page=login&id=auth" method="POST">
			{if $failedLogin}
				<h4 class="errorOnLogin">{$language['login_error']}</h4>
			{/if}
			<div class="row cancelBottomMargin">
				<div class="input-field col s12">
					<i class="fa fa-user prefix"></i>
					<input id="login_username" name="login_username" type="text" class="validate">
					<label for="login_username">{$language['login_username']}</label>
				</div>
			</div>
			<div class="row cancelBottomMargin">
				<div class="input-field col s12">
					<i class="fa fa-key prefix"></i>
					<input id="login_password" name="login_password" type="password" class="validate">
					<label for="login_password">{$language['login_password']}</label>
				</div>
			</div>
			
			<input type="checkbox" class="filled-in" id="login_remember" name="login_remember" checked="checked" />
			<label for="login_remember">{$language['login_remember']}</label>
			<br/>
			<br/>
			<button class="btn waves-effect waves-light" type="submit" name="login_submit">Sign in
				<i class="fa fa-sign-in"></i>
			</button>
		</form>
	</div>
</div>