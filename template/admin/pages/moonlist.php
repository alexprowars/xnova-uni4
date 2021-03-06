<div class="util-btn-margin-bottom-5">
	<a href="/admin/mode/moonlist/action/add/">
		<button type="button" class="btn blue btn-sm">Создать</button>
	</a>
</div>
<div class="clearfix"></div>
<div class="table-responsive">
	<table class="table table-striped table-hover table-advance">
		<thead>
			<tr>
				<th>ID</th>
				<th>Название луны</th>
				<th>ID планеты</th>
				<th>Галактика</th>
				<th>Система</th>
				<th>Планета</th>
			</tr>
		</thead>
		<? foreach ($parse['moons'] AS $u): ?>
			<tr>
				<td><?=$u['id'] ?></td>
				<td><?=$u['name'] ?></td>
				<td><?=$u['parent_planet'] ?></td>
				<td><?=$u['galaxy'] ?></td>
				<td><?=$u['system'] ?></td>
				<td><?=$u['planet'] ?></td>
			</tr>
		<? endforeach; ?>
	</table>
</div>
<div class="row">
	<div class="col-md-5 col-sm-12">
		<? if (count($parse['moons']) == 1): ?>
			В игре одна луна
		<? else: ?>
			В игре <?=count($parse['moons']) ?> лун
		<? endif; ?>
	</div>
</div>