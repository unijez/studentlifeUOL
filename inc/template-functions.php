<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package WordPress
 * @subpackage studentlifeUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

// Allows custom navigation
 register_nav_menu( 'main', 'Main Menu' );

// Search Function
//function collegeBlog_search_form( $form ) {
//	$form =
//	'<form role="search" method="get" id="searchform" class="site-header__search--form" action="' . esc_url( home_url( '/' ) ). '" >
//		<div class="search-container">
//			<button type="submit" id="searchsubmit">
//				<i class="far fa-search"></i>
//			</button>
//		</div>
//	</form>';
//
//	return $form;
//}
//add_filter( 'get_search_form', 'collegeBlog_search_form', 100 );

// DISABLE WORDPRESS COMMENTS JS
function itsg_disable_comment_js(){
    wp_deregister_script( 'comment-reply' );
}
add_action( 'init', 'itsg_disable_comment_js' );

// Edit length of excerpt
//function wpdocs_custom_excerpt_length( $length ) {
//    return 28;
//}
//add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    if($more[strlen($more) - 1] == '.') {
      return '..';
    } else {
      return '...';
    }
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// Add Excerpts for Pages
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

// Single Post Image Function: only allows appropriately sized images
/*function header_post_image() {
	global $post;
	$image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'hero-header', false);
	if ($image_url[0] != null) {
		list($img_width, $img_height, $img_type, $img_attr) = getimagesize($image_url[0]);
	}
	if ($image_url[0] == "") {
			return false;
	} else {
			if($img_width < 1280 && $img_height < 600) {
				return false;
			} else {
				return $image_url[0];
			}
	}
}*/

function header_post_image() {
  global $wp_query;


  $imgdata = wp_get_attachment_image_src( get_post_thumbnail_id($wp_query->post->ID ), 'hero-header' );
  return $imgdata[0];
}

function title_trim($title, $limit, $isset) {
  if((strlen($title) > $limit) && $isset == true) {
    echo substr($title, 0, ($limit-3)).'...';
  } else if ((strlen($title) < $limit) || $isset == false) {
    echo $title;
  }
}

// Default Image Function: adds default image when no preset thumbnail is found
function default_image($thumbnail) {
	if ( has_post_thumbnail() ) {

	        global $post;
	      	$post_url = get_permalink($post->ID);
	      	$page_title = get_the_title();


	      	$article_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $thumbnail );


	 		printf(
	 				'<img class="lazyload post-intro__content--image" data-srcset="%1$s" data-src="%1$s" src="%1$s"  data-width="%2$s" data-height="%3$s" alt="%4$s" >',
	 		    esc_url( $article_image_url[0] ),
	 		    $article_image_url[1],
	 		    $article_image_url[2],
	 		   $page_title
	 		);


	    } else {
		?><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" /><?php
	}
}




function get_image_result($output) {
	if ($output == false) {
		echo "<div class='backup-slide'></div>";
	}
}

// Custom comment form
add_filter( 'comment_form_defaults', 'remove_textarea' );
function remove_textarea($defaults)
{
    $defaults['comment_field'] = '';
    return $defaults;
}

function custom_comment_fields( $fields ) {

  $commenter = wp_get_current_commenter();
  $req       = get_option( 'require_name_email' );
  $aria_req  = $req ? "aria-required='true'" : '';

  $fields['author'] =
  	'<p class="comment-form-author">
  		<input id="author" name="author" type="text" placeholder="Your name*" size="30" ' . $aria_req . ' />
  	</p>';

  $fields['email'] =
  	'<p class="comment-form-email">
  		<input id="email" name="email" type="email" placeholder="Your e-mail address*" size="30" ' . $aria_req . ' />
  	</p>';

  $fields['comment_field'] =
    '<p class="comment-form-comment">
      <textarea id="comment" name="comment" placeholder="Enter your comment here*" cols="45" rows="8" '.$aria_req.'></textarea>
    </p>';

  return $fields;
}
add_filter( 'comment_form_default_fields', 'custom_comment_fields' );

function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
      <div class="comment-author vcard">

						<?php echo get_avatar($comment,$default='<path_to_url>' ); ?>

						<ul>
							<li>
								<?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
							</li>
							<li>
								<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s'), get_comment_date('F j, Y')) ?></a><?php edit_comment_link() ?>
									<span class="comments-bullet">&#8226;</span>
									<div class="reply">
						         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
						      </div>
								</div>
							</li>
						</ul>

		  </div> <!--comment-author-->

	     <div class="comment__content">

	      <?php comment_text() ?>

	     </div> <!--comment__content-->

     </div>
   </li>
     <?php
}


function list_categories($altID = null, $limit = null) {
  if($altID == null) {
  global $post;
  $cats = get_the_category($post->ID);
  } else {
  $cats = get_the_category($altID);
  }
  $catsSize = count($cats);
  for($i = 0; $i < $catsSize; $i++) {
    echo '<a href="' . get_category_link($cats[$i]->term_id) . '">' . strtoupper($cats[$i]->name) . '</a>';
    if($limit != null) {
      if($i == $limit-1) { break; }
    }
    if($i != $catsSize-1) {
     echo ", ";
    }
  }
}

function download_thumbnail() {

  preg_match('/src="(.+?)"/', get_field('youtube_link'), $matches); //Pull the URL of the video out of the iframe generated by ACF
  preg_match("/embed\/(.+)\?/", $matches[1], $vid_id); //Pull the ID of the video from the URL

  $download_url = "https://img.youtube.com/vi/".$vid_id[1]."/maxresdefault.jpg"; //Use the standard youtube link to get the max res thumbnail

  $uploads = wp_upload_dir();
  $path = $uploads['path']."/"; //Get the upload path

  $filename = $vid_id[1].'.jpg'; //Set the filename as the ID of the video

  $save_as = $path.$filename; //Full path of the created file

  if(!file_exists($save_as)) { //Check if file exists
    $ch = curl_init($download_url); //Initialize the PHP cURL to the youtube page

    $fp = fopen($save_as, 'wb'); //Start the path link

    curl_setopt($ch, CURLOPT_FILE, $fp); //Download the image to the path link
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_exec($ch);
    curl_close($ch);
    fclose($fp);

    $filetype = wp_check_filetype( basename( $save_as ), null ); //Check the file type

    $attachment = array( //Create neccessary wordpress data to the image
    'guid'           => $uploads['url'] . '/' . basename( $save_as ),
    'post_mime_type' => $filetype['type'],
    'post_title'     => preg_replace( '/\.[^.]+$/', '', basename( $save_as ) ),
    'post_content'   => '',
    'post_status'    => 'inherit'
    );

    $attach_id = wp_insert_attachment( $attachment, $save_as, get_the_ID() ); //Add neccessary wordpress data to the image
    require_once( ABSPATH . 'wp-admin/includes/image.php' ); //Make sure that the image gets registered as an image


//    $attach_data = wp_generate_attachment_metadata( $attach_id, $save_as ); //Generate more meta data
//    wp_update_attachment_metadata( $attach_id, $attach_data ); //Attatch the meta data

    set_post_thumbnail( get_the_ID(), $attach_id ); //Set image as the featured image
  }
}

function remove_attrs($html, $url, $args) {
  $attrs = ['allow="autoplay; encrypted-media"', 'frameborder="0"'];
  $replacewith = ['',''];

  return str_replace($attrs, $replacewith, $html);
}
add_filter( 'oembed_result', 'remove_attrs', 10, 3 );



//

/**
 * Single Post Format
 *
 * @since  1.0.0
 * @access public
 * @return void
 */

add_action('template_include', 'load_single_template');
function load_single_template($template) {
  $new_template = '';

  // single post template
  if( is_single() ) {
    global $post;

    // template for post with video format
    if ( has_post_format( 'video' )) {
      // use template file single-video.php for video format
      $new_template = locate_template(array('single-video.php' ));
    }

  }
  return ('' != $new_template) ? $new_template : $template;
}



/**
 * Display Page x of x image
 *
 * @since  1.0.0
 * @access public
 * @return void
 */


function current_paged( $var = '' ) {
    if( empty( $var ) ) {
        global $wp_query;
        if( !isset( $wp_query->max_num_pages ) )
            return;
        $pages = $wp_query->max_num_pages;
    }
    else {
        global $$var;
            if( !is_a( $$var, 'WP_Query' ) )
                return;
        if( !isset( $$var->max_num_pages ) || !isset( $$var ) )
            return;
        $pages = absint( $$var->max_num_pages );
    }
    if( $pages < 1 )
        return;
    $page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
    echo 'Page ' . $page . ' of ' . $pages;
}



/**
 * University Footer Credits
 *
 * @since  1.0.0
 * @access public
 * @return void
 */



function blog_home_offest( $query ) {
    if( !is_admin() && $query->is_main_query() && $query->is_home() ) {

     // tax_query takes a double array
        $args = array ( array (
        	  'taxonomy' => 'post_format',
        	  'field' => 'slug',
        	  'terms' => 'post-format-video',
        	  'operator' => 'NOT IN'
           ));

        //First, define your desired offset...
            $offset = 6;

            //Next, determine how many posts per page you want (we'll use WordPress's settings)
            $ppp = get_option('posts_per_page');



            //Next, detect and handle pagination...
            if ( $query->is_paged ) {

                //Manually determine page query offset (offset + current page (minus one) x posts per page)
                $page_offset = $offset + ( ($query->query_vars['paged']-1) * $ppp );

                //Apply adjust page offset
                $query->set('offset', $page_offset );

                $query->set( 'tax_query', $args );

            }
            else {

                //This is the first page. Just use the offset...
                $query->set('offset',$offset);

                $query->set( 'tax_query', $args );



            }


    }




}
add_action( 'pre_get_posts', 'blog_home_offest' );



/**
 * University Footer Credits
 *
 * @since  1.0.0
 * @access public
 * @return void
 */


 function university_links() {

 	$sccessibility = esc_url('lincoln.ac.uk/home/abouttheuniversity/accessibility/' );
 	$contacting = esc_url('lincoln.ac.uk/home/contactus/' );
 	$legal = esc_url('lincoln.ac.uk/home/abouttheuniversity/governance/universitypolicies/' );
 	$privacy = esc_url('lincoln.ac.uk/home/abouttheuniversity/governance/universitypolicies/websiteandpublicationsinformationliability/' );
 	$disclaimer = esc_url('lincoln.ac.uk/home/abouttheuniversity/governance/universitypolicies/websiteandpublicationsinformationliability/' );
 	$freedom = esc_url('secretariat.blogs.lincoln.ac.uk/information-compliance/freedom-of-information/' );

	echo('<ul class="university-links">');

	 	echo('<li><a href="' . $sccessibility. '" title="Accessibility">' . 'Accessibility'. '</a></li>');
	 	echo('<li><a href="' . $contacting. '" title="Contacting the University">' . 'Contacting the University'. '</a></li>');
	 	echo('<li><a href="' . $legal. '" title="Legal">' . 'Legal'. '</a></li>');
	 	echo('<li><a href="' . $privacy. '" title="Privacy">' . 'Privacy'. '</a></li>');
	 	echo('<li><a href="' . $disclaimer. '" title="Disclaimer">' . 'Disclaimer'. '</a></li>');
	 	echo('<li><a href="' . $freedom. '" title="Freedom of Information">' . 'Freedom of Information'. '</a></li>');

	echo('</ul>');

 }

 function background_video() {
   $video = get_field('background_video', 'option');
   ?>
   <div class="hide-extra">
   <video autoplay muted loop class="background_video">
     <source src="<?php echo $video['url']; ?>" type="video/mp4">
   </video>
  </div>
   <?php
 }
