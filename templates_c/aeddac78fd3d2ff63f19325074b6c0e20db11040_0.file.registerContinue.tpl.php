<?php
/* Smarty version 3.1.29, created on 2016-02-27 22:50:26
  from "C:\xampp\htdocs\hbb\themes\Paper\registerContinue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d21a22ba9213_95533152',
  'file_dependency' => 
  array (
    'aeddac78fd3d2ff63f19325074b6c0e20db11040' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hbb\\themes\\Paper\\registerContinue.tpl',
      1 => 1456609783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d21a22ba9213_95533152 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['regStatus']->value['success']) {?>
	<div class="wrapper">
		<div class="container">
			<div class="pageDescriptionWithHeading">
				<h1><?php echo $_smarty_tpl->tpl_vars['language']->value['page_title'];?>
</h1>
				<h2><?php echo $_smarty_tpl->tpl_vars['language']->value['registration_success'];?>
</h2>
			</div>
		</div>
	</div>
<?php } else { ?>
	<div class="wrapper">
		<div class="container">
			<div class="pageDescriptionWithHeading">
				<h1><?php echo $_smarty_tpl->tpl_vars['language']->value['page_title'];?>
</h1>
				<h2><?php echo $_smarty_tpl->tpl_vars['language']->value['page_description'];?>
</h2>
			</div>
			
			<form class="loginForm col s12" action="index.php?page=register&id=continue" method="POST">
				<h4 class="errorOnLogin">
					<?php if ($_smarty_tpl->tpl_vars['regStatus']->value['emailUse']) {
echo $_smarty_tpl->tpl_vars['language']->value['register_emailInUse'];
}?>
					<?php if ($_smarty_tpl->tpl_vars['regStatus']->value['userUse']) {
echo $_smarty_tpl->tpl_vars['language']->value['register_userInUse'];
}?>
					<?php if ($_smarty_tpl->tpl_vars['regStatus']->value['falseEmail']) {
echo $_smarty_tpl->tpl_vars['language']->value['register_incoEmail'];
}?>
					<?php if ($_smarty_tpl->tpl_vars['regStatus']->value['pwNotMatch']) {
echo $_smarty_tpl->tpl_vars['language']->value['register_incoPass'];
}?>
					<?php if ($_smarty_tpl->tpl_vars['regStatus']->value['emptyData']) {
echo $_smarty_tpl->tpl_vars['language']->value['register_emptyFields'];
}?>
				</h4>
				<div class="row cancelBottomMargin">
					<div class="input-field col s12">
						<i class="fa fa-user prefix"></i>
						<input id="register_username" name="register_username" type="text" class="validate">
						<label for="register_username"><?php echo $_smarty_tpl->tpl_vars['language']->value['register_username'];?>
</label>
					</div>
				</div>
				
				<div class="row cancelBottomMargin">
					<div class="input-field col s12">
						<i class="fa fa-envelope prefix"></i>
						<input id="register_email" name="register_email" type="text" class="validate">
						<label for="register_email"><?php echo $_smarty_tpl->tpl_vars['language']->value['register_email'];?>
</label>
					</div>
				</div>
				
				<div class="row cancelBottomMargin">
					<div class="input-field col s12">
						<i class="fa fa-key prefix"></i>
						<input id="register_password" name="register_password" type="password" class="validate">
						<label for="register_password"><?php echo $_smarty_tpl->tpl_vars['language']->value['register_password'];?>
</label>
					</div>
				</div>
				
				<div class="row cancelBottomMargin">
					<div class="input-field col s12">
						<i class="fa fa-key prefix"></i>
						<input id="register_password2" name="register_password2" type="password" class="validate">
						<label for="register_password2"><?php echo $_smarty_tpl->tpl_vars['language']->value['register_password2'];?>
</label>
					</div>
				</div>
				<p onclick="ToggleDialog(true, '<?php echo $_smarty_tpl->tpl_vars['agreement']->value;?>
');">By clicking 'sign up' you agree to the <u>community rules</u></p>
				<button class="btn waves-effect waves-light" type="submit" name="login_submit"><?php echo $_smarty_tpl->tpl_vars['language']->value['register_button'];?>

					<i class="fa fa-sign-in"></i>
				</button>
			</form>
		</div>
	</div>
<?php }
}
}
