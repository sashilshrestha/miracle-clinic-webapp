<?php get_header() ?>
<?php
$arrId = [get_the_ID()];
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
?>
<main id="blogs-inner">
	<header class="page--header">
		<div class="container mx-auto !items-start">
			<h1>
				<?php the_title() ?>
			</h1>
			<p><?php echo get_the_date() ?></p>
		</div>
	</header>
	<section>
		<div class="container mx-auto">
			<img src="<?php echo $thumb_url[0]; ?>" alt="" class="main-image">
			<div class="content grid grid-cols-12 gap-12 pt-6">
				<div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 xl:col-span-6 2xl:col-span-8">
					<?php
					if (!empty(get_field('article_link'))) {
					?>
						<div class="mt-5">
							<a href="<?php echo get_field('article_link') ?>" class="btn btn-primary !text-dark" target="_blank">Read Full Article Here</a>
						</div>
					<?php
					} else {
						the_content();
					?>
					<?php
					}
					?>
				</div>
				<div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 xl:col-span-6 2xl:col-span-4">
					<aside>
						<div class="share-post">
							<span class="font-bold mr-2 text-xl">Share on:</span>
							<a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt=""></a>
							<a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.png" alt=""></a>
							<a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.png" alt=""></a>
						</div>
						<div class="other-posts">
							<?php
							$args = array(
								'post_type' => 'post',
								'post_status' => 'publish',
								'posts_per_page' => 7,
								'order' => 'DESC',
								'orderby' => 'publish_date',
								'post__not_in' => $arrId,
							);
							$newsposts = new WP_Query($args);

							while ($newsposts->have_posts()) :
								$newsposts->the_post();

								$thumb_id = get_post_thumbnail_id();
								$thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
							?>
								<div class="post-card">
									<img src="<?php echo $thumb_url[0]; ?>" alt="" class="rounded-md mr-4">
									<div class="post-description">
										<h5 class="text text-sm"><?php the_title() ?></h5>
										<a href="<?php the_permalink() ?>">Read More >></a>
										<!-- <p class="!text-xs">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas quisquam et laudantium porro officiis laborum!</p> -->
									</div>
								</div>
							<?php
							endwhile;
							wp_reset_postdata();
							?>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer() ?>