<?php
/* Smarty version 3.1.29, created on 2016-03-07 21:27:21
  from "C:\xampp\htdocs\hbb\themes\Paper\boards.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dde4298b7ee4_79348697',
  'file_dependency' => 
  array (
    '28ad82904ed542319b0b7ff9ec646c3e4b02d51b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hbb\\themes\\Paper\\boards.tpl',
      1 => 1457382436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56dde4298b7ee4_79348697 ($_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
Javascript/boards.js"><?php echo '</script'; ?>
>
<div class="wrapper">
	<div class="container">
		<?php
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_category_0_saved_item = isset($_smarty_tpl->tpl_vars['category']) ? $_smarty_tpl->tpl_vars['category'] : false;
$_smarty_tpl->tpl_vars['category'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['category']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
$__foreach_category_0_saved_local_item = $_smarty_tpl->tpl_vars['category'];
?>
			<?php if (!isset($_smarty_tpl->tpl_vars['catShuffle']->value[$_smarty_tpl->tpl_vars['category']->value['category_id']])) {?>
				<div class="category_wrap">
					<div class="category_title tooltipped" id="category_<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
" data-position="top" data-delay="50" data-tooltip="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_desc'];?>
">
						<?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>

						<i class="fa fa-toggle-on toggleCategory" data-categoryid="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"></i>
					</div>
					<div id="boardBontent_<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
">
						<?php
$_from = $_smarty_tpl->tpl_vars['boards']->value[$_smarty_tpl->tpl_vars['category']->value['category_id']];
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
$_smarty_tpl->tpl_vars['board'] = $__foreach_board_1_saved_local_item;
}
if ($__foreach_board_1_saved_item) {
$_smarty_tpl->tpl_vars['board'] = $__foreach_board_1_saved_item;
}
?>
					</div>
					<div class="mobileBoardsWrap">
						<div class="collection">
							<a href="#!" class="collection-item mobileCategoryTitle" id="mobileCat_<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
" data-categoryid="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>
</a>
								<div id="mobileBoardContent_<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
">
									<?php
$_from = $_smarty_tpl->tpl_vars['boards']->value[$_smarty_tpl->tpl_vars['category']->value['category_id']];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_board_2_saved_item = isset($_smarty_tpl->tpl_vars['board']) ? $_smarty_tpl->tpl_vars['board'] : false;
$_smarty_tpl->tpl_vars['board'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['board']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['board']->value) {
$_smarty_tpl->tpl_vars['board']->_loop = true;
$__foreach_board_2_saved_local_item = $_smarty_tpl->tpl_vars['board'];
?>
										<a href="#!" class="collection-item"><?php echo $_smarty_tpl->tpl_vars['board']->value['board_name'];?>
<span class="new badge">4</span></a>
									<?php
$_smarty_tpl->tpl_vars['board'] = $__foreach_board_2_saved_local_item;
}
if ($__foreach_board_2_saved_item) {
$_smarty_tpl->tpl_vars['board'] = $__foreach_board_2_saved_item;
}
?>
								</div>
						 </div>
					</div>
				</div>
			<?php } else { ?>
				<div class="category_wrap">
					<div class="category_title tooltipped inactive" id="category_<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
" data-catid="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
" data-collapsed="1" data-position="top" data-delay="50" data-tooltip="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_desc'];?>
">
						<?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>

						<i class="fa fa-toggle-off toggleCategory" data-categoryid="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"></i>
					</div>
					<div id="boardBontent_<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
" style="display: none;">
						<?php
$_from = $_smarty_tpl->tpl_vars['boards']->value[$_smarty_tpl->tpl_vars['category']->value['category_id']];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_board_3_saved_item = isset($_smarty_tpl->tpl_vars['board']) ? $_smarty_tpl->tpl_vars['board'] : false;
$_smarty_tpl->tpl_vars['board'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['board']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['board']->value) {
$_smarty_tpl->tpl_vars['board']->_loop = true;
$__foreach_board_3_saved_local_item = $_smarty_tpl->tpl_vars['board'];
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
$_smarty_tpl->tpl_vars['board'] = $__foreach_board_3_saved_local_item;
}
if ($__foreach_board_3_saved_item) {
$_smarty_tpl->tpl_vars['board'] = $__foreach_board_3_saved_item;
}
?>
					</div>
					<div class="mobileBoardsWrap">
						<div class="collection">
							<a href="#!" class="collection-item mobileCategoryTitle inactive" id="mobileCat_<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
" data-categoryid="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>
</a>
							<div id="mobileBoardContent_<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
" style="display: none;">
								<?php
$_from = $_smarty_tpl->tpl_vars['boards']->value[$_smarty_tpl->tpl_vars['category']->value['category_id']];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_board_4_saved_item = isset($_smarty_tpl->tpl_vars['board']) ? $_smarty_tpl->tpl_vars['board'] : false;
$_smarty_tpl->tpl_vars['board'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['board']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['board']->value) {
$_smarty_tpl->tpl_vars['board']->_loop = true;
$__foreach_board_4_saved_local_item = $_smarty_tpl->tpl_vars['board'];
?>
									<a href="#!" class="collection-item"><?php echo $_smarty_tpl->tpl_vars['board']->value['board_name'];?>
<span class="new badge">4</span></a>
								<?php
$_smarty_tpl->tpl_vars['board'] = $__foreach_board_4_saved_local_item;
}
if ($__foreach_board_4_saved_item) {
$_smarty_tpl->tpl_vars['board'] = $__foreach_board_4_saved_item;
}
?>
							</div>
						 </div>
					</div>
				</div>
			<?php }?>
		<?php
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_0_saved_local_item;
}
if ($__foreach_category_0_saved_item) {
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_0_saved_item;
}
?>
	</div>
</div><?php }
}
