<?php get_header(); ?>
      <div id="content" class="col-lg-9 col-md-9 col-xs-12">
<!-- START CONTENT -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<article class="post" id="post-<?php the_ID(); ?>">
    <h1><?php the_title(); ?></h1>
    <p class="postdata">Posted <?php the_time('M j, Y') ?> in <?php the_category(', ') ?></p>
    <div class="featured-image">
	<?php echo get_the_post_thumbnail($page->ID, 'large'); ?>
    </div>
    <?php the_content(''); ?> 
    <nav class="post-navigation">
        <span class="post-navigation-previous"><?php previous_post(' &laquo; %','', 'yes'); ?></span>
        <span class="post-navigation-next"><?php next_post('% &raquo; ','', 'yes'); ?></span>
    </nav>   
</article>
<?php endwhile; ?>
<?php endif; ?>
</div>
<!-- END CONTENT -->


<!-- SECONDARY SIDEBAR -->
<?php get_sidebar('secondary'); ?>

</div> <!-- END DIV MAIN -->
<!-- FOOTER -->
<?php get_footer(); ?>