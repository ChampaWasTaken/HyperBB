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
	{foreach $userMenu as $item => $link}
		<a href="{$link}" class="waves-effect waves-dark"><li>{$item}</li></a>
	{/foreach}
</ul>
<div class="wrapper">
	<div class="nav-wrapper navBarStatic headerMenu hide-on-med-and-down">
		<ul>
			{foreach $userMenu as $item => $link}
				<a href="{$link}" class="waves-effect waves-dark"><li>{$item}</li></a>
			{/foreach}
		</ul>
	</div>
</div>
<!--<div class="linktree">
	<div class="wrapper">
		<a href="index.php" class="breadcrumb" title="Vi ste ovdje:"><i class="fa fa-home"></i> Zara Network</a>
		<a href="index.php" class="breadcrumb" title="Vi ste ovdje:">das</a>
	</div>
</div>-->
