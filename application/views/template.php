<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Urban Care - <?=(isset($title) ? $title : '')?></title>
		<?=HTML::style(URL::base().'assets/style/style.css')."\n"?>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				
				//font size
				var originalFontSize = $('#content').css('font-size');
				
				//alert(originalFontSize);
				// Reset Font Size
				$(".resetFont").click(function(){
					$('#content').css('font-size', originalFontSize);
				});
				
				// Increase Font Size
				$(".increaseFont").click(function() {
					var currentFontSize = $('#content').css('font-size');
					var currentFontSizeNum = parseFloat(currentFontSize, 10);
					var newFontSize = currentFontSizeNum*1.2;
					//alert(newFontSize);
					
					$('#content').css('font-size', newFontSize);
					
					return false;
				});
				
				// Decrease Font Size
				$(".decreaseFont").click(function() {
					var currentFontSize = $('#content').css('font-size');
					var currentFontSizeNum = parseFloat(currentFontSize, 10);
					var newFontSize = currentFontSizeNum*0.8;
					//alert(newFontSize);
					
					$('#content').css('font-size', newFontSize);
					
					return false;
				});

			});
		</script>
    </head>
    <body>
		<div id="wrapper">
			<div id="header">
				<a href="<?= URL::BASE(); ?>"><div id="logo"></div></a>
				<div id="textsize"><a href="#" class="increaseFont">A+</a> <a href="#" class="decreaseFont">A-</a> <a href="#" class="resetFont">Reset</a></div>
				<ul id="topnav">
					<!--<li><a href="<?php URL::BASE(); ?>">Home</a></li>-->
					<li>
						<a href="<?= URL::BASE(); ?>">Voor clienten</a>
						<ul>
							<li><a href="<?= URL::BASE(); ?>page/voor_wie">Voor wie</a></li>
							<li><a href="<?= URL::BASE(); ?>page/hoe_werkt_het">Hoe werkt het</a></li>
							
							<li><a href="<?= URL::BASE(); ?>page/medewerkers">Onze hulpverleners</a></li>
							
							<li><a href="<?= URL::BASE(); ?>page/organisatie">Organisatie</a></li>
							
							<li><a href="<?= URL::BASE(); ?>page/daarom">Daarom Urban Care</a></li>
							
							<li><a href="<?= URL::BASE(); ?>page/vergoeding">Tarieven en vergoedingen</a></li>
							
							<li><a href="<?= URL::BASE(); ?>page/online_hulp">Online hulpverlening</a></li>
							
							<!--<li><a href="<?= URL::BASE(); ?>page/visie">Links</a></li>-->
							<li><a href="<?= URL::BASE(); ?>page/links">Links</a></li>
						</ul>
					</li>
					<li>
						<a href="<?= URL::BASE(); ?>article/all_news">Nieuws</a>
						<ul>
							<li><a href="<?= URL::BASE(); ?>article/all_news">Berichten</a></li>
							<li><a href="<?= URL::BASE(); ?>page/agenda">Agenda</a></li>
							<li><a href="<?= URL::BASE(); ?>page/nieuwsbrief">Brief</a></li>
						</ul>
						
						
					</li>
					
					
					<li><a href="<?= URL::BASE(); ?>page/faq">F.a.q.</a></li>
					
					<li>
						<a href="<?= URL::BASE(); ?>">Voor hulpverleners</a>
						<ul>
							<li><a href="<?= URL::BASE(); ?>page/werkwijze">Werkwijze</a></li>
							<li><a href="<?= URL::BASE(); ?>page/doorverwijzing">Doorverwijzing</a></li>
							<li><a href="<?= URL::BASE(); ?>page/samenwerking">Samenwerking</a></li>
							<li><a href="<?= URL::BASE(); ?>page/vacatures">Vacatures</a></li>
							
							<li><a href="<?= URL::BASE(); ?>admin/login">Log in</a></li>
						</ul>
					</li>
					<li>
						<a href="<?= URL::BASE(); ?>contact">Contact</a>
						<ul>
							<li><a href="<?= URL::BASE(); ?>contact">Formulier</a></li>
							<!--<li><a href="<?php #URL::BASE(); ?>page/consultinformatie">Consultinformatie</a></li>-->
						</ul>
					</li>
					
				</ul>
				
				<div id="search">
					<form method="get" action="<?=URL::base()?>search">
					<input id="searchbox" type="text" name="q" placeholder="Zoekterm">
					<!--<input type="submit" value="zoek" class="verstuurzoek">-->
					</form>
				</div>
			</div>

			<div id="content">
				<?php if(isset($content)) {
					echo $content;
				} ?>
			
			</div>
			
				
			<div class="push"></div>
			
		</div>
		
		<div id="footer">
			<p>&copy;Bart de Man</p>
		</div>
		
		

    </body>
</html>