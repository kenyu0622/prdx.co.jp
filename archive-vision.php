<?php get_header(); ?>

<div id="vision-archive">
    <div class="pagePath -roboto pc">
    	<p><a href="/">HOME</a>&nbsp;&gt;&nbsp;<a href="/vision/">こころざし探訪記一覧</a></p>
    </div>
    <div class="vision-image fadeInUp">
    	<div class="image-wrapper">
    		<img src="<?php echo get_template_directory_uri(); ?>/img/vision/vision_logo_caption.png" alt="こころざし探訪記 action for vision">
    	</div>
    </div>
	<div class="inner-container">
        <div class="article-block">
        	<div class="article-wrapper">
        		<div class="flex-wrapper">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        			<div class="article fadeInUp">
        				<a class="image-box" href="<?php the_permalink(); ?>">
        					<img class="vision-thumbnail" src="<?php the_field('action_image'); ?>" alt="<?php the_field('action_name_full'); ?>様の画像">
        					<div class="title-box">
        						<div class="number-wrapper">
                        			<h1><span>#</span><?php the_field('action_number'); ?></h1>
                        		</div>
                        		<h2><?php the_title(); ?></h2>
                        		<h3><?php the_field('action_name'); ?>様のaction</h3>
        					</div>
        				</a>
        				<div class="head-box">
        					<h1><?php the_field('action_top_head'); ?></h1>
        				</div>
        				<div class="excerption-box">
        					<p><?php the_field('action_excerption'); ?></p>
        				</div>
        				<div class="link-box">
        					<a href="<?php the_permalink(); ?>">詳細はこちら<i class="fas fa-angle-right"></i></a>
        				</div>
        			</div>
        <?php endwhile; endif; ?>
        		</div>
        	</div>
        </div>
	</div>
</div>

<?php get_footer(); ?>