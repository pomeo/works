<div id="sidebar_left" class="sidebar">

	<div id="logo">
		<h3><a href="<?php bloginfo('url') ?>/">funnytalks.ru</a></h3>
	</div>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar_left') ) : ?>	
    <h2>Рубрики</h2>    
	<ul>
    	<?php wp_list_cats('&title_li='); ?>
    </ul>
	
	<?php if (function_exists('wp_tag_cloud')) { ?>
	<h2>Тэги</h2>
	<ul><li>
	<? wp_tag_cloud(); ?>
	</li></ul>
	<?php } ?>

	<br />

<?php endif; ?>

</div>


<div id="sidebar_right" class="sidebar">
	
	<div class="search">
		<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
		<input class="searchinput" type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="search_query" />
		<input class="searchbutton" type="submit" value="Найти"  />
		</form>
	</div>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar_right') ) : ?>	
	<h2>Архив</h2>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
    
	<ul>
	<?php
	if (wp_version()=='20') { 
		echo '<h2>Ссылки</h2>';
		get_links('1','<li>','</li>','',false,'name',false);
	} 
	else {
		wp_list_bookmarks(array('title_before' => '<h2>', 'title_after' => '</h2>',	'category_before' => '', 'category_after' => ''));
	} 
	?>
	</ul>

<?php endif; ?>
</div>