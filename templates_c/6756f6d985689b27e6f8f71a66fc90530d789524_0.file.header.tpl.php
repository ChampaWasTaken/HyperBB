<?php
/* Smarty version 3.1.29, created on 2016-03-05 23:10:56
  from "C:\xampp\htdocs\hbb\themes\Paper\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56db59709b1248_29923333',
  'file_dependency' => 
  array (
    '6756f6d985689b27e6f8f71a66fc90530d789524' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hbb\\themes\\Paper\\header.tpl',
      1 => 1457213571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56db59709b1248_29923333 ($_smarty_tpl) {
?>
<!-- Important parts, do not delete it-->
<div id="blackOut" class="blackOutMenu" style="display: none;">

	<div class="popUpBox z-depth-3" id="blackOutBox" style="display: none;">
		<button onclick="ToggleDialog(false);" class="closeButton waves-effect waves-light z-depth-1"><i class="fa fa-times"></i></button>
		<div id="blackOutBoxContent"></div>
	</div>
</div>
<div id="blackOutCard" class="blackOutMenu" style="display: none;">
	<div class="userCardProfile z-depth-3" id="userCardProfile"></div>
</div>
<!-- End of the important parts -->
<a href="#" data-activates="sideBarMobile" class="button-collapse toggleMenu hide-on-large-only"><i class="fa fa-bars"></i></a>
<header>
	<h1>Hyper Bulletin Board</h1>
	<h2>HyperBB is a powerful and highly customizable forum software</h2>
</header>
<ul class="side-nav hide-on-large-only" id="sideBarMobile">
	<?php
$_from = $_smarty_tpl->tpl_vars['userMenu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_link_0_saved_item = isset($_smarty_tpl->tpl_vars['link']) ? $_smarty_tpl->tpl_vars['link'] : false;
$__foreach_link_0_saved_key = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['link'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['link']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
$__foreach_link_0_saved_local_item = $_smarty_tpl->tpl_vars['link'];
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" class="waves-effect waves-dark"><li><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</li></a>
	<?php
$_smarty_tpl->tpl_vars['link'] = $__foreach_link_0_saved_local_item;
}
if ($__foreach_link_0_saved_item) {
$_smarty_tpl->tpl_vars['link'] = $__foreach_link_0_saved_item;
}
if ($__foreach_link_0_saved_key) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_link_0_saved_key;
}
?>
</ul>
<div class="wrapper">
	<div class="nav-wrapper navBarStatic headerMenu hide-on-med-and-down">
		<ul>
			<?php
$_from = $_smarty_tpl->tpl_vars['userMenu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_link_1_saved_item = isset($_smarty_tpl->tpl_vars['link']) ? $_smarty_tpl->tpl_vars['link'] : false;
$__foreach_link_1_saved_key = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['link'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['link']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
$__foreach_link_1_saved_local_item = $_smarty_tpl->tpl_vars['link'];
?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" class="waves-effect waves-dark"><li><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</li></a>
			<?php
$_smarty_tpl->tpl_vars['link'] = $__foreach_link_1_saved_local_item;
}
if ($__foreach_link_1_saved_item) {
$_smarty_tpl->tpl_vars['link'] = $__foreach_link_1_saved_item;
}
if ($__foreach_link_1_saved_key) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_link_1_saved_key;
}
?>
		</ul>
	</div>
</div>
<!--<div class="linktree">
	<div class="wrapper">
		<a href="index.php" class="breadcrumb" title="Vi ste ovdje:"><i class="fa fa-home"></i> Zara Network</a>
		<a href="index.php" class="breadcrumb" title="Vi ste ovdje:">das</a>
	</div>
</div>-->
<?php }
}
