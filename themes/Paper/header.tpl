<a href="#" data-activates="sideBarMobile" class="button-collapse toggleMenu hide-on-large-only"><i class="fa fa-bars"></i></a>
<header>
	<h1>Hyper Bulletin Board</h1>
	<h2>HyperBB is a powerful and highly customizable forum software</h2>
</header>
<ul class="side-nav hide-on-large-only" id="sideBarMobile">
	{foreach $userMenu as $item => $link}
		<a href="{$link}"><li>{$item}</li></a>
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