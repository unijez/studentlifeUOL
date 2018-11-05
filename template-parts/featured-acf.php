
<?php if(has_post_thumbnail()): ?>
  <div class="slick-slide heading-image single-page" style="background-image: url(<?php echo header_post_image() ?>)">

  <?php
  global $post;
  if(has_post_thumbnail()) {
    $imgdata = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'hero-header', false);
    $imgwidth = $imgdata[1];
//    $wanted_width = 1600;
  }
  ?>


  <div class="slide-overlay site-module no-upper no-lower">

  	<div class="module-inner-wrap ">


  			<div class="columns-wrap site-module flex-controlled no-upper no-lower">


  				<div class="overlay-slide full-colour column column--2-of-3 column--medium-2-of-3 column--small-1-of-1 clear ">
  				      <h2 class="slide-title">
  					  	 <?php the_title(); ?>
  					  </h2>

  				    <h5 class="slide-date">
  				      <?php echo get_field('featured_text'); ?>
  				    </h5>
  				</div> <!--overlay-slide-->


  			</div> <!--columns-wrap-->


  	</div> <!--module-inner-wrap-->



  </div> <!--slide-overlay-->

</div>
<?php else: ?>

  <div class="title-container maximum-width-title">
    <i class="calendar-icon fal fa-calendar-alt"></i><time class="news-post-date date-published" datetime="<?php the_time('d/m/Y') ?>"><?php the_time('jS F, Y') ?></time>
    <?php the_title( '<h1 class="page-title__inner posted">', '</h1>' ); ?>
  </div>

<?php endif; ?>
