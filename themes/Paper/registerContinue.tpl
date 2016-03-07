{if $regStatus['success']}
	<div class="wrapper">
		<div class="container">
			<div class="pageDescriptionWithHeading">
				<h1>{$language['page_title']}</h1>
				<h2>{$language['registration_success']}</h2>
			</div>
		</div>
	</div>
{else}
	<div class="wrapper">
		<div class="container">
			<div class="pageDescriptionWithHeading">
				<h1>{$language['page_title']}</h1>
				<h2>{$language['page_description']}</h2>
			</div>
			
			<form class="loginForm col s12" action="index.php?page=register&id=continue" method="POST">
				<h4 class="errorOnLogin">
					{if $regStatus['emailUse']}{$language['register_emailInUse']}{/if}
					{if $regStatus['userUse']}{$language['register_userInUse']}{/if}
					{if $regStatus['falseEmail']}{$language['register_incoEmail']}{/if}
					{if $regStatus['pwNotMatch']}{$language['register_incoPass']}{/if}
					{if $regStatus['emptyData']}{$language['register_emptyFields']}{/if}
				</h4>
				<div class="row cancelBottomMargin">
					<div class="input-field col s12">
						<i class="fa fa-user prefix"></i>
						<input id="register_username" name="register_username" type="text" class="validate">
						<label for="register_username">{$language['register_username']}</label>
					</div>
				</div>
				
				<div class="row cancelBottomMargin">
					<div class="input-field col s12">
						<i class="fa fa-envelope prefix"></i>
						<input id="register_email" name="register_email" type="text" class="validate">
						<label for="register_email">{$language['register_email']}</label>
					</div>
				</div>
				
				<div class="row cancelBottomMargin">
					<div class="input-field col s12">
						<i class="fa fa-key prefix"></i>
						<input id="register_password" name="register_password" type="password" class="validate">
						<label for="register_password">{$language['register_password']}</label>
					</div>
				</div>
				
				<div class="row cancelBottomMargin">
					<div class="input-field col s12">
						<i class="fa fa-key prefix"></i>
						<input id="register_password2" name="register_password2" type="password" class="validate">
						<label for="register_password2">{$language['register_password2']}</label>
					</div>
				</div>
				<p onclick="ToggleDialog(true, '{$agreement}');">By clicking 'sign up' you agree to the <u>community rules</u></p>
				<button class="btn waves-effect waves-light" type="submit" name="login_submit">{$language['register_button']}
					<i class="fa fa-sign-in"></i>
				</button>
			</form>
		</div>
	</div>
{/if}