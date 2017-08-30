<div id="support_ticket_view">
<?php
foreach($ticket as $tick) {
?>
	<p><div class="ticket_label">Naam:</div> <?=ucfirst($tick->firstname) . ' '. $tick->lastname?></p>
	<p><div class="ticket_label">Straat & Postcode: </div><?=ucfirst($tick->street)?></p>
	<p><div class="ticket_label">Plaats: </div><?=ucfirst($tick->city)?></p>
	<p><div class="ticket_label">Postcode: </div><?=$tick->postalcode?></p>
	<p><div class="ticket_label">Telefoon nummer: </div><?=$tick->phone_number?></p>
	<p><div class="ticket_label">Email: </div><a href="mailto:<?=$tick->email?>"><?=$tick->email?></a></p>
	<p><div class="ticket_label">Skype: </div><?=$tick->skype_username?></p>
	<p><div class="ticket_label">Geslacht: </div><?=$tick->gender?></p>
	<p><div class="ticket_label">Geboorte datum: </div><?=$tick->birthdate?></p>
	<p><div class="ticket_label">Hulpvraag ligt op: </div><?=$tick->help_type_area?></p>
	
	<p><div class="ticket_label">De vraag samengevat: </div><?=$tick->help_question?></p>
	<p><div class="ticket_label">Discipline: </div><?=$tick->help_type?></p>
	<p><div class="ticket_label">In behandeling: </div><?= ($tick->in_threatment == 1) ? 'Ja' : 'nee'?></p>
	<p><div class="ticket_label">Hoe gevonden?: </div><?=$tick->found_how?></p>
	
	
<?php
}
?>
</div>