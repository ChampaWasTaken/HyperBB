<div class="cover" style="background: url('{$user['cover']}'); background-size: cover; background-position: center;"></div>
<a href="index.php?page=profile&id={$userId}"><img src="{$user['avatar']}" class="avatar z-depth-2"></a>
<h2><a href="index.php?page=profile&id={$userId}">{$user['name']}</a></h2>
<table class="bordered">
	<tbody>
		<tr>
			<td>{$language['user_group']}</td>
            <td>Administrator</td>
		</tr>
		<tr>
			<td>{$language['post_count']}</td>
            <td>{$user['posts']}</td>
		</tr>
		<tr>
			<td>{$language['reg_date']}</td>
            <td>{$user['register_date']|date_format}</td>
		</tr>
	</tbody>
</table>
<div class="pmsection">
	<a class="waves-effect waves-light btn"><i class="fa fa-envelope left"></i>{$language['private_mes']}</a>
</div>