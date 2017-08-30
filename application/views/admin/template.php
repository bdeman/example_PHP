<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Urban Care</title>
		<?=HTML::style(URL::base().'assets/style/admin_style.css')."\n"?>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    </head>
    <body>
		<div id="wrapper">
			<?php if(Auth::instance()->logged_in()) { ?>
			<div id="header">
				
				<div id="info_login"><p>Ingelogd als: <?=Auth::instance()->get_user()->username?> | <a href="<?=URL::base()?>admin/logout">Log uit</a></p></div>
				
			</div>
			
			<div id="navbar">
			
				<ul id="topnav">
					<!--<li><a href="<?php URL::BASE(); ?>">Home</a></li>-->
					<li>
						<a href="#">Voor clienten</a>
						<ul>
							<li><a href="<?= URL::BASE(); ?>admin/home">Home</a></li>
							<li><a href="<?= URL::BASE(); ?>admin/voor_wie">Voor wie</a></li>
							<li><a href="<?= URL::BASE(); ?>admin/hoe_werkt_het">Hoe werkt het</a></li>
							
							<li><a href="<?= URL::BASE(); ?>admin/medewerkers">Medewerkers</a></li>
							
							<li><a href="<?= URL::BASE(); ?>admin/organisatie">Organisatie</a></li>
							
							<li><a href="<?= URL::BASE(); ?>admin/daarom">Daarom Urban Care</a></li>
							
							<li><a href="<?= URL::BASE(); ?>admin/vergoeding">Tarieven en vergoedingen</a></li>
							
							<li><a href="<?= URL::BASE(); ?>admin/online_hulp">Online hulpverlening</a></li>
							
							<!--<li><a href="<?= URL::BASE(); ?>admin/visie">Links</a></li>-->
							<li><a href="<?= URL::BASE(); ?>admin/links">Links</a></li>
						</ul>
					</li>
					<li>
						<a href="#">Nieuws</a>
						<ul>
							<li><a href="<?= URL::BASE(); ?>admin/all_news">Berichten</a></li>
							
							<li><a href="<?= URL::BASE(); ?>admin/new_news">Plaatsen</a></li>
							
							<li><a href="<?= URL::BASE(); ?>admin/agenda">Agenda</a></li>
							<li><a href="<?= URL::BASE(); ?>admin/nieuwsbrief">Brief</a></li>
						</ul>
						
						
					</li>
					
					
					<li><a href="<?= URL::BASE(); ?>admin/faq">F.a.q.</a></li>
					
					<li>
						<a href="#">Voor hulpverleners</a>
						<ul>
							<li><a href="<?= URL::BASE(); ?>admin/werkwijze">Werkwijze</a></li>
							<li><a href="<?= URL::BASE(); ?>admin/doorverwijzing">Doorverwijzing</a></li>
							<li><a href="<?= URL::BASE(); ?>admin/samenwerking">Samenwerking</a></li>
							<li><a href="<?= URL::BASE(); ?>admin/vacatures">Vacatures</a></li>
						</ul>
					</li>
					<li>
						<a href="#">Contact</a>
						<ul>
							<li><a href="<?= URL::BASE(); ?>admin/contact">Formulier</a></li>
							<!--<li><a href="<?php #URL::BASE(); ?>admin/consultinformatie">Consultinformatie</a></li>-->
						</ul>
					</li>
					
					
					<li>
						<a href="<?= URL::BASE(); ?>admin/clienten">Clienten</a>
					</li>
					
					<li>
						<a href="<?= URL::BASE(); ?>admin/plaatjes">Plaatjes</a>
					</li>
					
					<li>
						<a href="<?= URL::BASE(); ?>admin/forum">Forum</a>
						<ul>
							<li><a href="<?= URL::BASE(); ?>admin/forum_link">Wijzig Forum link</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
			
			<div id="page_title">
				Home.
			</div>
			
			<?php } ?>

			<div id="content">
				<?php if(isset($content)) {
					echo $content;
				} ?>
			</div>
			
				
			<div class="push"></div>
			
		</div>
		
		<div id="footer">
			<p>Admin paneel.</p>
		</div>
		
		

    </body>
</html>