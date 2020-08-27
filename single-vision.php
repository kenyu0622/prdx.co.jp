<?php get_header(); ?>

<section id="vision">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div class="pagePath -roboto pc">
	<p><a href="/">HOME</a>&nbsp;&gt;&nbsp;<a href="/vision/">こころざし探訪記一覧</a>&nbsp;&gt;&nbsp;<?php the_title(); ?></p>
</div>
<div class="vision-logo">
	<div class="logo-container">
    	<div class="logo-wrapper fadeInUp">
    		<img src="<?php echo get_template_directory_uri(); ?>/img/vision/vision_logo.png" alt="こころざし探訪記 action for vision">
    	</div>
	</div>
</div>
<div class="vision-image">
	<img src="<?php the_field('action_image'); ?>" alt="<?php the_field('action_name_full'); ?>様の画像">
</div>
<div class="vision-header">
	<div class="flex-wrapper">
    	<div class="title-box">
    		<div class="title-wrapper fadeInUp">
        		<div class="number-wrapper">
        			<h1><span># </span><?php the_field('action_number'); ?></h1>
        		</div>
        		<h2><?php the_title(); ?></h2>
        		<h3><?php the_field('action_name'); ?>様のaction</h3>
    		</div>
    	</div>
    	<div class="head-box">
    		<div class="head-container fadeInUp">
    			<h1 class=""><?php the_field('action_top_head'); ?></h1>
    			<p class=""><?php the_field('action_top_caption'); ?></p>
    		</div>
    	</div>
	</div>
</div>
<div class="vision-main">
	<div class="inner-container">
		<?php if(have_rows('action_main')): while(have_rows('action_main')): the_row(); ?>
		<h1 class="fadeInUp"><?php the_sub_field('action_main_title'); ?></h1>
		<?php if(get_sub_field('action_main_content')): ?>
		<?php the_sub_field('action_main_content'); ?>
		<?php endif; ?>
		<?php if(get_sub_field('action_main_image')): ?>
		<div class="action-image fadeInUp">
			<img src="<?php the_sub_field('action_main_image'); ?>" alt="<?php the_sub_field('action_main_title'); ?>の画像">
		</div>
		<?php endif; ?>
		<?php endwhile; endif; ?>
		<h2 class="fadeInUp">あとがき</h1>
		<div class="afterword fadeInUp"><?php the_field('action_afterword'); ?></div>
		<div class="director">（担当ディレクター：<?php the_field('action_director'); ?>）</div>
		<hr>
		<div class="url"><?php the_field('action_name_full'); ?>：<a href="<?php the_field('action_url'); ?>" target="_blank"><?php the_field('action_url'); ?></a></div>
	</div>
</div>
<div class="vision-link-wrapper">
	<a href="<?php echo get_post_type_archive_link( get_post_type() ); ?>">
		一覧に戻る<i class="fas fa-angle-right"></i>
	</a>
</div>
<?php endwhile; endif; ?>
</section>



<?php get_footer(); ?>