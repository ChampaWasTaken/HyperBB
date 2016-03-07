<script src="{$themePath}Javascript/boards.js"></script>
<div class="wrapper">
	<div class="container">
		{foreach $categories as $category}
			{if !isset($catShuffle[$category['category_id']])}
				<div class="category_wrap">
					<div class="category_title tooltipped" id="category_{$category['category_id']}" data-position="top" data-delay="50" data-tooltip="{$category['category_desc']}">
						{$category['category_name']}
						<i class="fa fa-toggle-on toggleCategory" data-categoryid="{$category['category_id']}"></i>
					</div>
					<div id="boardBontent_{$category['category_id']}">
						{foreach $boards[$category['category_id']] as $board}
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
					</div>
					<div class="mobileBoardsWrap">
						<div class="collection">
							<a href="#!" class="collection-item mobileCategoryTitle" id="mobileCat_{$category['category_id']}" data-categoryid="{$category['category_id']}">{$category['category_name']}</a>
								<div id="mobileBoardContent_{$category['category_id']}">
									{foreach $boards[$category['category_id']] as $board}
										<a href="#!" class="collection-item">{$board['board_name']}<span class="new badge">4</span></a>
									{/foreach}
								</div>
						 </div>
					</div>
				</div>
			{else}
				<div class="category_wrap">
					<div class="category_title tooltipped inactive" id="category_{$category['category_id']}" data-catid="{$category['category_id']}" data-collapsed="1" data-position="top" data-delay="50" data-tooltip="{$category['category_desc']}">
						{$category['category_name']}
						<i class="fa fa-toggle-off toggleCategory" data-categoryid="{$category['category_id']}"></i>
					</div>
					<div id="boardBontent_{$category['category_id']}" style="display: none;">
						{foreach $boards[$category['category_id']] as $board}
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
					</div>
					<div class="mobileBoardsWrap">
						<div class="collection">
							<a href="#!" class="collection-item mobileCategoryTitle inactive" id="mobileCat_{$category['category_id']}" data-categoryid="{$category['category_id']}">{$category['category_name']}</a>
							<div id="mobileBoardContent_{$category['category_id']}" style="display: none;">
								{foreach $boards[$category['category_id']] as $board}
									<a href="#!" class="collection-item">{$board['board_name']}<span class="new badge">4</span></a>
								{/foreach}
							</div>
						 </div>
					</div>
				</div>
			{/if}
		{/foreach}
	</div>
</div>