<div class="block start race">
	<div class="title">Выбор фракции</div>
	<div class="content">
		<? if ($error != ''): ?>
			<div class="errormessage"><?=$error ?></div>
		<? endif; ?>
		<form action="" method="POST" id="tabs">
			<? foreach (_getText('race') AS $i => $name): if (!$name) continue; ?>
				<input type="radio" name="race" value="<?=$i ?>" id="f_<?=$i ?>" <?=(is($_POST, 'race') == $i ? 'checked' : '') ?>>
				<label for="f_<?=$i ?>" class="avatar">
					<img src="<?=RPATH ?><?= DPATH ?>images/race<?=$i ?>.gif" alt=""><br>
					<h3><?=$name ?></h3>
					<span>
						<?=_getText('info', 700+$i) ?>
					</span>
				</label>
			<? endforeach; ?>
			<br>
			<input type="submit" name="save" value="Продолжить">
			<br><br>
		</form>
	</div>
</div>