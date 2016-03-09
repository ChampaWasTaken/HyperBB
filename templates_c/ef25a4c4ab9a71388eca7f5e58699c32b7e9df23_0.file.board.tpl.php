<?php
/* Smarty version 3.1.29, created on 2016-03-08 23:00:33
  from "C:\xampp\htdocs\hbb\themes\Paper\board.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56df4b81c2f070_70164650',
  'file_dependency' => 
  array (
    'ef25a4c4ab9a71388eca7f5e58699c32b7e9df23' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hbb\\themes\\Paper\\board.tpl',
      1 => 1457474347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56df4b81c2f070_70164650 ($_smarty_tpl) {
?>
<div class="wrapper">
	<div class="container">
		<div class="category_wrap">
			<?php if (!empty($_smarty_tpl->tpl_vars['boardInfo']->value['board_desc'])) {?>
				<div class="category_title tooltipped" data-position="top" data-delay="50" data-tooltip="<?php echo $_smarty_tpl->tpl_vars['boardInfo']->value['board_desc'];?>
">
			<?php } else { ?>
				<div class="category_title">
			<?php }?>
				<?php echo $_smarty_tpl->tpl_vars['boardInfo']->value['board_name'];?>

			</div>
			<?php
$_from = $_smarty_tpl->tpl_vars['subboards']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_board_0_saved_item = isset($_smarty_tpl->tpl_vars['board']) ? $_smarty_tpl->tpl_vars['board'] : false;
$_smarty_tpl->tpl_vars['board'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['board']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['board']->value) {
$_smarty_tpl->tpl_vars['board']->_loop = true;
$__foreach_board_0_saved_local_item = $_smarty_tpl->tpl_vars['board'];
?>
				<div class="boardWrap">
					<div class="icon"><i class="fa fa-check-circle"></i></div>
					<?php if (empty($_smarty_tpl->tpl_vars['board']->value['board_desc'])) {?>
						<div class="titleWithDesc">
							<h4 class="withDesc">
								<a href="index.php?page=board&id=<?php echo $_smarty_tpl->tpl_vars['board']->value['board_id'];?>
">
									<?php echo $_smarty_tpl->tpl_vars['board']->value['board_name'];?>

								</a>
							</h4>
							<p><?php echo $_smarty_tpl->tpl_vars['language']->value['total_posts'];?>
 <?php echo $_smarty_tpl->tpl_vars['board']->value['board_posts'];?>
 <?php echo $_smarty_tpl->tpl_vars['language']->value['total_visits'];?>
 <?php echo $_smarty_tpl->tpl_vars['board']->value['board_visits'];?>
</p>
						</div>
					<?php } else { ?>
						<div class="titleWithDesc">
							<h4 class="withDesc">
								<a href="index.php?page=board&id=<?php echo $_smarty_tpl->tpl_vars['board']->value['board_id'];?>
" class="tooltipped" data-position="right" data-delay="50" data-tooltip="<?php echo $_smarty_tpl->tpl_vars['board']->value['board_desc'];?>
">
									<?php echo $_smarty_tpl->tpl_vars['board']->value['board_name'];?>

								</a>
							</h4>
							<p><?php echo $_smarty_tpl->tpl_vars['language']->value['total_posts'];?>
 <?php echo $_smarty_tpl->tpl_vars['board']->value['board_posts'];?>
 <?php echo $_smarty_tpl->tpl_vars['language']->value['total_visits'];?>
 <?php echo $_smarty_tpl->tpl_vars['board']->value['board_visits'];?>
</p>
						</div>
					<?php }?>
					<div class="boardStat">
						<img src="<?php echo $_smarty_tpl->tpl_vars['board']->value['avatar'];?>
" onclick="toggleUserCard(<?php echo $_smarty_tpl->tpl_vars['board']->value['board_last_poster'];?>
);">
						<p>
							<strong><a href="index.php?page=thread&id=<?php echo $_smarty_tpl->tpl_vars['board']->value['board_last_post'];?>
"><?php echo $_smarty_tpl->tpl_vars['board']->value['board_last_post_title'];?>
</a></strong><br/>
							<a href="#!" onclick="toggleUserCard(<?php echo $_smarty_tpl->tpl_vars['board']->value['board_last_poster'];?>
);"><?php echo $_smarty_tpl->tpl_vars['board']->value['name'];?>
</a>
						</p>
					</div>
				</div>
			<?php
$_smarty_tpl->tpl_vars['board'] = $__foreach_board_0_saved_local_item;
}
if ($__foreach_board_0_saved_item) {
$_smarty_tpl->tpl_vars['board'] = $__foreach_board_0_saved_item;
}
?>
			<div class="mobileBoardsWrap">
				<div class="collection">
					<a href="#!" class="collection-item mobileCategoryTitle"><?php echo $_smarty_tpl->tpl_vars['boardInfo']->value['board_name'];?>
</a>
					<div id="mobileBoardContent_<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
">
						<?php
$_from = $_smarty_tpl->tpl_vars['subboards']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_board_1_saved_item = isset($_smarty_tpl->tpl_vars['board']) ? $_smarty_tpl->tpl_vars['board'] : false;
$_smarty_tpl->tpl_vars['board'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['board']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['board']->value) {
$_smarty_tpl->tpl_vars['board']->_loop = true;
$__foreach_board_1_saved_local_item = $_smarty_tpl->tpl_vars['board'];
?>
							<a href="index.php?page=board&id=<?php echo $_smarty_tpl->tpl_vars['board']->value['board_id'];?>
" class="collection-item"><?php echo $_smarty_tpl->tpl_vars['board']->value['board_name'];?>
<span class="new badge">4</span></a>
						<?php
$_smarty_tpl->tpl_vars['board'] = $__foreach_board_1_saved_local_item;
}
if ($__foreach_board_1_saved_item) {
$_smarty_tpl->tpl_vars['board'] = $__foreach_board_1_saved_item;
}
?>
					</div>
				</div>
			</div>
		</div>
		<div>
			
		</div>
	</div>
</div><?php }
}
