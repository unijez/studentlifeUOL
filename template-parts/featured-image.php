
<?php if(has_post_thumbnail()):
      global $post;
      $imgdata = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'hero-header', false);
      if($imgdata[1] >= 1910 && $imgdata[2] >= 625) {
        $sized = true;
      } else {
        $sized = false;
      }
 ?>
  <div class="slick-slide heading-image single-page <?php if(!$sized) { echo " empty-image-container "; } ?>" <?php if ($sized): ?> style="background-image: url(<?php echo header_post_image(); ?>) <?php endif; ?>">

    <?php if(!$sized) { get_template_part( 'template-parts/site/uol-logo', 'portrait' ); } ?>

  <div class="slide-overlay site-module no-upper no-lower">

  	<div class="module-inner-wrap ">


  			<div class="columns-wrap site-module flex-controlled no-upper no-lower">


  				<div class="overlay-slide full-colour column column--2-of-3 column--medium-2-of-3 column--small-1-of-1 clear ">
  				    <h5 class="slide-category">
  				      <?php list_categories();?>
  				    </h5>
  				      <h2 class="slide-title">
  					  	 <?php the_title(); ?>
  					  </h2>

  				    <h5 class="slide-date">
  				      <i class="calendar-icon fal fa-calendar-alt"></i><time class="news-post-date date-published" datetime="<?php the_time('d/m/Y') ?>"><?php the_time('F jS, Y') ?></time>
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
