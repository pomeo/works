<?php get_header(); ?>
<div id="contentwrapper">
<div id="content">

	<?php if (have_posts()) :?>
		<?php $postCount=0; ?>
		<?php while (have_posts()) : the_post();?>
			<?php $postCount++;?>

	<div class="entry">
		<div class="entrytitle entry-<?php echo $postCount ;?>">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2> 
			<h3><?php the_category(', ') ?> <?php the_time('j F Y') ?></h3>
		</div>

		<div class="entrybody">
			<?php the_content('Подробнее &raquo;'); ?>
			<?php if (function_exists('the_tags')) { ?>
			<p><?php the_tags('Тэги: ', ', ', '<br />'); ?></p>
			<?php } ?>
		</div>

		<div class="entrymeta">
		<div class="postinfo">
			<?php comments_popup_link('No Comments', 'One Comment', '% Comments', 'commentmeta'); ?> <?php edit_post_link('Edit', ' | ', ''); ?>
		</div>
		</div>
	</div>

	<?php endwhile; ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Предыдущая запись') ?></div>
			<div class="alignright"><?php previous_posts_link('Следущая запись &raquo;') ?></div>
		</div>

	<?php else : ?>
		<h2>Не найдено</h2>
		<div class="entrybody">Воспользуйтесь поиском.</div>

	<?php endif; ?>
</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>