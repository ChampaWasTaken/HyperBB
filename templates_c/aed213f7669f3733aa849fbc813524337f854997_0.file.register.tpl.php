<?php
/* Smarty version 3.1.29, created on 2016-02-25 18:58:10
  from "C:\xampp\htdocs\hbb\themes\Paper\register.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56cf40b279feb4_86126547',
  'file_dependency' => 
  array (
    'aed213f7669f3733aa849fbc813524337f854997' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hbb\\themes\\Paper\\register.tpl',
      1 => 1456423077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56cf40b279feb4_86126547 ($_smarty_tpl) {
?>
<div class="wrapper">
	<div class="container">
		<div class="pageDescriptionWithHeading">
			<h1><?php echo $_smarty_tpl->tpl_vars['language']->value['page_title'];?>
</h1>
			<h2><?php echo $_smarty_tpl->tpl_vars['language']->value['page_description'];?>
</h2>
		</div>
		
		<form class="loginForm col s12" action="index.php?page=register&id=success" method="POST">
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
			
			<button class="btn waves-effect waves-light" type="submit" name="login_submit"><?php echo $_smarty_tpl->tpl_vars['language']->value['register_button'];?>

				<i class="fa fa-sign-in"></i>
			</button>
		</form>
	</div>
</div><?php }
}
