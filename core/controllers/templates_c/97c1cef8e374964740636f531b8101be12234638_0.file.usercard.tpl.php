<?php
/* Smarty version 3.1.29, created on 2016-03-07 21:29:08
  from "C:\xampp\htdocs\hbb\themes\Paper\usercard.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dde4944a6481_36411025',
  'file_dependency' => 
  array (
    '97c1cef8e374964740636f531b8101be12234638' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hbb\\themes\\Paper\\usercard.tpl',
      1 => 1457382545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56dde4944a6481_36411025 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\hbb\\external\\libs\\plugins\\modifier.date_format.php';
?>
<div class="cover" style="background: url('<?php echo $_smarty_tpl->tpl_vars['user']->value['cover'];?>
'); background-size: cover; background-position: center;"></div>
<a href="index.php?page=profile&id=<?php echo $_smarty_tpl->tpl_vars['userId']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
" class="avatar z-depth-2"></a>
<h2><a href="index.php?page=profile&id=<?php echo $_smarty_tpl->tpl_vars['userId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</a></h2>
<table class="bordered">
	<tbody>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['language']->value['user_group'];?>
</td>
            <td>Administrator</td>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['language']->value['post_count'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['posts'];?>
</td>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['language']->value['reg_date'];?>
</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value['register_date']);?>
</td>
		</tr>
	</tbody>
</table>
<div class="pmsection">
	<a class="waves-effect waves-light btn"><i class="fa fa-envelope left"></i><?php echo $_smarty_tpl->tpl_vars['language']->value['private_mes'];?>
</a>
</div><?php }
}
