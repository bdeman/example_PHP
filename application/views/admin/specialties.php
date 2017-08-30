<?=HTML::script(URL::base().'assets/js/tablerowhover/jquery.columnhover.js')."\n"?>
<script type="text/javascript">
$(document).ready(function() {
	$("tr").not(':first').hover(
		function () {
			$(this).css("background","#FF9900");
		}, 
		function () {
			$(this).css("background","");
		}
	);
});


</script>
<a href="<?=URL::base()?>admin/new_specialty">Maak een nieuw discipline aan</a>
<div id="admin_news_table">
	<table>
	<thead>
		<tr>
			<th>Specialty id</th>
			<th>Naam</th>
			<th>Beschrijving</th>
			<th>Bewerk/</th>
			<th>Verwijder</th>
		</tr>
	</thead>
	<?php $i = 0; ?>
	<?php foreach($specialties as $specialty): ?>
	<tr class="<?=($i++ % 2 == 0) ? 'even' : 'odd'; ?>">
			<td><?=$specialty->id?></td>
			<td><?=ucfirst($specialty->name)?></td>
			<td><?=strip_tags(text::limit_chars($specialty->description, 50))?></td>
			
			<td> 
				<a href="<?=URL::base().'admin/edit_specialty/'.$specialty->id?>" class="edit"><?=Html::image('assets/images/admin/edit_button.png')?></a>
			 
			</td>
			<td>
				<a href="<?=URL::base().'admin/delete_specialty/'.$specialty->id?>" class="edit" onclick="return confirm('Weet je zeker dat je dit item wilt verwijderen?')"><?=Html::image('assets/images/admin/delete_button.png')?></a>
			</td>
	</tr>

	<?php endforeach; ?>
	</table>

	
</div>