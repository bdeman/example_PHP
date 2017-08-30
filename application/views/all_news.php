<?php foreach($articles as $article): ?>

<pre>
<?php

#var_dump($article);
?>
</pre>


	<div class="article">
		<div id="article_image">
			<?php if($article->images !== NULL) {
				$image = explode(',',$article->images);
					?>
						<a href="<?=URL::base().'article/view_news/'.$article->article_id?>"><?=Html::image('assets/images/uploads/thumbs/'.$image[0])?></a>
					<?php
				} else {
					?>
						<a href="<?=URL::base().'article/view_news/'.$article->article_id?>"><?=Html::image('assets/images/logo.png',array('width'=>'150'))?></a>
					<?php
				}
			?>
		</div>
		<h2><a href="<?=URL::base().'article/view_news/'.$article->article_id?>"><?=ucfirst($article->title)?></a></h2>
		<?=strip_tags(text::limit_chars($article->content, 50))?>
	</div>

<?php endforeach; ?>


<?=$page_links?>