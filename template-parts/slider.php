<div class="main-slider">
  <?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'post__not_in' => get_option( 'sticky_posts' ),
    'tax_query' => array(
            array(
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms' => array( 'post-format-video' ),
            'operator' => 'NOT IN'
            )
    ),
//			'meta_query' => array(
//											array(
//			'compare' => 'EXISTS'
//			),)
  );

  $recent_posts = new WP_Query( $args );

  if( $recent_posts->have_posts() ): ?>

    <?php background_video(); ?>

    <div class="hero-header">

      <?php while ($recent_posts->have_posts() ) : $recent_posts->the_post() ?>



      <div class="slick-slide heading-image">


		<div class="slide-overlay site-module no-upper no-lower">

			<div class="module-inner-wrap ">


					<div class="columns-wrap site-module flex-controlled no-upper no-lower">


						<div class="overlay-slide column column--2-of-3 column--medium-2-of-3 column--small-1-of-1 clear ">
						    <h5 class="slide-category">
						      <?php list_categories();?>
						    </h5>
						      <h2 class="slide-title">
							  	 <a href="<?php the_permalink() ?>">
							  <?php the_title(); ?>
							  	 </a>
							  </h2>

						    <h5 class="slide-date">
								<i class="calendar-icon fal fa-calendar-alt"></i><time class="news-post-date date-published" datetime="<?php the_time('d/m/Y') ?>"><?php echo get_the_date(); ?></time>
						    </h5>
						</div> <!--overlay-slide-->


					</div> <!--columns-wrap-->


			</div> <!--module-inner-wrap-->



		</div> <!--slide-overlay-->




      </div>
      <?php
      endwhile;
      wp_reset_query();
      ?>
    </div>
  <?php else : ?>

  <h2>Ooops, no posts here!</h2>

  <?php endif; wp_reset_query(); ?>
</div>
