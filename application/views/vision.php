<div id="vision">
	<h1><?=ucfirst($article->title)?></h1> <br/>
	
	<?php
		$half = (int) ( (strlen($article->content) / 2) ); // cast to int incase str length is odd
		$left = substr($article->content, 0, $half);
		$right = substr($article->content, $half);
	?>
	
	<div id="left_content">
		<?php #$article->content ?>
		
Visie tekst

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla placerat justo in justo congue pharetra. Morbi in ligula elit, sed lacinia sapien. Etiam non mollis quam. Aenean ac mauris libero. Duis eget leo augue. Duis non lacus at nunc posuere suscipit. Aenean turpis neque, ultrices eget venenatis eget, eleifend bibendum tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce laoreet posuere aliquam. Suspendisse posuere suscipit lobortis.

Donec tristique justo sed erat dictum eu eleifend arcu aliquet. Phasellus faucibus enim sit amet ante suscipit eu ornare erat varius. Vestibulum at felis metus. Integer at sem non felis tincidunt luctus. Curabitur a eros sit amet quam dapibus adipiscing. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis turpis neque, pretium in suscipit in, tempus eu tortor. Sed a egestas augue. Sed ligula eros, scelerisque nec egestas in, iaculis sit amet erat. Nulla vel ipsum eget nisl elementum auctor pulvinar vel mi. Aliquam metus metus, dictum id interdum eget, suscipit at nisi. Donec in felis nunc, at aliquet orci. Duis molestie euismod orci et pellentesque. Sed tincidunt molestie elit eu fermentum. Mauris est nibh, auctor non pretium at, fringilla dictum augue. Morbi quis est erat, a rutrum sem.
Fusce aliquet, erat a consequat feugiat, augue tortor convallis purus, pellentesque volutpat eros felis a augue. Curabitur semper volutpat convallis. Cras vitae ante ante. Nam vehicula gravida sapien a molestie. Maecenas quis dolor at erat consectetur posuere tempus ut leo. Maecenas at eros ac lacus viverra semper. Duis eleifend consectetur justo, consectetur aliquet erat ornare vel. Pellentesque augue nisi, adipiscing eleifend sagittis eget,, vulputate eu metus. Aliquam nisl velit, euismod id facilisis a, pharetra et dolor. Donec et risus massa. Vestibulum iaculis sapien vel quam mollis condimentum porttitor ipsum congue. 
	</div>
	
	<div id="right_content">
		<?php #$right ?>
		
Phasellus nec lacus ac augue pulvinar laoreet. Nunc molestie, lacus id cursus eleifend, diam libero adipiscing ante, eget ultricies quam massa ac ligula. Ut aliquam, massa malesuada mattis sollicitudin, magna arcu rhoncus ipsum, sit amet rutrum ante massa ac quam. Vestibulum lacinia ipsum non velit porttitor egestas.

Mauris vitae placerat enim. Integer ipsum elit, scelerisque ut lobortis vitae, dignissim a eros. Nulla commodo sem eu odio ornare non rutrum enim interdum. Ut molestie euismod erat non elementum. Etiam sem libero, cursus eget consectetur sit amet, mollis id erat. Nunc adipiscing ullamcorper elementum. Donec lacinia tincidunt enim, sollicitudin venenatis purus fringilla a. Phasellus id consequat sapien. Cras ultricies, sem quis vestibulum sodales, ipsum eros tincidunt ligula, at feugiat tellus eros et tellus. Proin blandit volutpat nisi in lacinia. Praesent sodales interdum nisi nec viverra. Etiam at massa eros. Aenean mauris metus, dapibus ut tristique vitae, luctus pharetra augue. Curabitur sapien dui, blandit sit amet porttitor sed, rutrum at nisi. Pellentesque vehicula dignissim cursus. Pellentesque elementum rhoncus elementum. Suspendisse potenti.

Ut sollicitudin vestibulum turpis at rhonc "us. Sed non enim nisi. Nulla eu magna vitae tortor tincidunt tincidunt id vel tortor. Etiam a libero sagittis lectus vestibulum hendrerit nec a diam. Nulla malesuada egestas ipsum, vitae vehicula d"olor tempor sit amet. Phasellus suscipit dui eu nunc molestie dapibus. Pellentesque non libero lectus, id rhoncus leo. Nunc consectetur purus id nisl viverra dignissim rutrum lacus venenatis. Curabitur vel eros eget mi sodales dictum eget at orci. Fusce ullamcorper tortor dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean vitae sem eros, scelerisque lacinia est. Morbi justo neque, auctor consectetur convallis porttitor, porttitor a turpis. Aliquam interdum tristique lorem, vel hendrerit ipsum commodo et. Mauris et mi mi, sit amet lobortis urna. Mauris eu justo quis enim tempor euismod. Sed vel dui purus, nec dignissim quam. Mauris at sem enim, nec sagittis dui. Curabitur bibendum, tortor ut porttitor tincidunt, tortor risus commodo metus, nec placerat urna odio sed orci.

	</div>
</div>