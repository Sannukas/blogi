<div class="list-group">
	<a href="#" class="list-group-item active">
		Users
	</a>
	<?foreach($users as $user):?>
		<a href="<?=BASE_URL?>users/view/<?=$user['username']?>" class="list-group-item"><span class="badge"><?=$user['count']?></span>
			<?=$user['username']?>
		</a>
	<?endforeach?>
</div>
