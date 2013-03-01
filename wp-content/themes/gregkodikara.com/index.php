<?php wp_enqueue_script("jquery"); ?>
<?php get_header(); ?>

<div class="main-body">
	<div class="home-page page">
		<h1>Success is not the key to happiness...</h1>
		<h2>Happiness is the key to success.</h2>
	</div>
	<div class="about-page page">
	
	</div>
	<div class="spin-menu work-page page">
		<div class="spin-box" parentStyleId="item_1" id="menu_item_1"><div></div></div>
		<div class="spin-box" parentStyleId="item_2" id="menu_item_2"><div></div></div>
		<div class="spin-box" parentStyleId="item_3" id="menu_item_3"><div></div></div>
		<div class="spin-box" parentStyleId="item_4" id="menu_item_4"><div></div></div>
	</div>
	<div class="contact-page page">

	</div>

	<div class="blog-page main-box content-box page">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?> <!-- the LOOP --> <div class="post" id="post-<?php the_ID(); ?>"> <!-- assigning post ID (dynamic) to every post so that you can control every single post --> <div class="date"><?php the_time('M', '', ''); ?> <?php the_time('d', '', ''); ?></div> <!-- article published date & month --><h3 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3> <!-- the article title - linked so you can click and get into the article --><?php comments_popup_link(__('( 0 ) Comments'), __('( 1 ) Comment'), __('( % ) Comments')); ?> <!-- number shows the number of comments on that particular aticle --> <div class="storycontent"><?php the_content(__('more...')); ?></div> <!-- the content of the article --></div><?php comments_template(); ?> <!-- will inclued the comments.php file (displayed only when inside an article) - see below for the file--><?php endwhile; else: ?> <!-- end of the LOOP --> <p><?php _e('Sorry, no posts matched your criteria.'); ?></p> <!-- if LOOP fails, this text will be displayed --> <?php endif; ?> <!-- end if the LOOP fails -->

	</div>

</div>


<?php get_footer(); ?>