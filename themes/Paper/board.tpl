<div class="wrapper">
	<div class="container">
		<div class="category_wrap">
			{if !empty($boardInfo['board_desc'])}
				<div class="category_title tooltipped" data-position="top" data-delay="50" data-tooltip="{$boardInfo['board_desc']}">
			{else}
				<div class="category_title">
			{/if}
				{$boardInfo['board_name']}
			</div>
			{foreach $subboards as $board}
				<div class="boardWrap">
					<div class="icon"><i class="fa fa-check-circle"></i></div>
					{if empty($board['board_desc'])}
						<div class="titleWithDesc">
							<h4 class="withDesc">
								<a href="index.php?page=board&id={$board['board_id']}">
									{$board['board_name']}
								</a>
							</h4>
							<p>{$language['total_posts']} {$board['board_posts']} {$language['total_visits']} {$board['board_visits']}</p>
						</div>
					{else}
						<div class="titleWithDesc">
							<h4 class="withDesc">
								<a href="index.php?page=board&id={$board['board_id']}" class="tooltipped" data-position="right" data-delay="50" data-tooltip="{$board['board_desc']}">
									{$board['board_name']}
								</a>
							</h4>
							<p>{$language['total_posts']} {$board['board_posts']} {$language['total_visits']} {$board['board_visits']}</p>
						</div>
					{/if}
					<div class="boardStat">
						<img src="{$board['avatar']}" onclick="toggleUserCard({$board['board_last_poster']});">
						<p>
							<strong><a href="index.php?page=thread&id={$board['board_last_post']}">{$board['board_last_post_title']}</a></strong><br/>
							<a href="#!" onclick="toggleUserCard({$board['board_last_poster']});">{$board['name']}</a>
						</p>
					</div>
				</div>
			{/foreach}
			<div class="mobileBoardsWrap">
				<div class="collection">
					<a href="#!" class="collection-item mobileCategoryTitle">{$boardInfo['board_name']}</a>
					<div id="mobileBoardContent_{$category['category_id']}">
						{foreach $subboards as $board}
							<a href="index.php?page=board&id={$board['board_id']}" class="collection-item">{$board['board_name']}<span class="new badge">4</span></a>
						{/foreach}
					</div>
				</div>
			</div>
		</div>
		<div>
			
		</div>
	</div>
</div>