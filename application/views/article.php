<?=HTML::script(URL::base().'assets/js/fancy/fancybox/jquery.fancybox-1.3.4.pack.js')."\n"?>
<?=HTML::style(URL::base().'assets/js/fancy/fancybox/jquery.fancybox-1.3.4.css')."\n"?>

<script type="text/javascript">
$(document).ready(function() {

	$("a#fancy").fancybox({
		'transitionIn'	: 'none',
		'transitionOut'	: 'none'	
	});
});


</script>
<h1><?=ucfirst($article->title)?></h1> <br/>
<?=ucfirst($article->content)?> <br/>

<?php if($article->images !== NULL) {
	$images = explode(',',$article->images);
	foreach($images as $image) {
		?>
			<a id="fancy" href="<?=URL::base().'assets/images/uploads/large/'.$image?>">
				<img src="<?=URL::base().'assets/images/uploads/thumbs/'.$image?>" alt=""/>
			</a>
		<?php
	}
}
?>