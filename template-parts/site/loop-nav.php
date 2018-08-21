<?php
/**
 * Loop Navigtions
 *
* @package WordPress
* @subpackage studentlifeUOL
* @author     Jez Thompson <jthompson@lincoln.ac.uk>
* @since 1.0
* @version 1.0
 */

?>

<?php if ( is_singular() ) : // If viewing a single post page. ?>

<?php 
//Is there a next or previous post?
$prev_link = get_previous_post_link();
$next_link = get_next_post_link();

//Get the next or previous link url
$previous = get_previous_post();
$next = get_next_post();


 ?>
 
<?php if ($prev_link || $next_link): ?> 

<nav class="page-nav site-module">
	
	<ul class="module-inner-wrap level-elements <?php if ($next_link ):?>page-nav__single-next<?php endif; ?> <?php if ($prev_link ):?>page-nav__single-prev<?php endif; ?>">

		
		<?php if ($prev_link) : ?>
		<li class="level-item  level-left  column--1-of-3 mobile-full-width">
		
					
								<span class="main-btn block-button block-button-icon">
								
								<span class=" icon-left light-blue"><i class="fas fa-arrow-left"></i></span>
								
								<a class="main-btn more-button" href="<?php echo $previous->guid ?>">Previous Post</a>
								</span>
						
				
		</li>
		
		<?php else : //Empty cell for position purposes ?>
		
			<li class="level-item  level-left  column--1-of-3 mobile-full-width"></li>
		
		<?php endif; ?>
		
	
		<li class="level-item  has-text-centered media-pages column--1-of-3"><?php current_paged(); ?></li>
		
			<?php if ($next_link) : ?>
			
			<li class="level-item  level-right column--1-of-3 mobile-full-width">
					
						<span class="main-btn block-button block-button-icon">
						
						<a class="main-btn more-button" href="<?php echo $next->guid ?>">Next Post</a>
						
						 <span class="icon-right light-blue"><i class="fas fa-arrow-right"></i></span>
						</span>
			
					
			</li>
			
			<?php else : //Empty cell for position purposes ?>
			
				<li class="level-item  level-right column--1-of-3 mobile-full-width">
			
			
			<?php endif; ?>
 	</ul>
 </nav>
 
 
<?php endif; ?>
	


<?php elseif ( is_home() ||  is_search() || is_post_type_archive() || is_archive()  ) :  ?>
	
		
		<?php if ( $wp_query->max_num_pages > 1 ) : ?>
		
		<?php 
			$prev_link = get_previous_posts_link(__('&laquo; Older Entries'));
			$next_link = get_next_posts_link(__('Newer Entries &raquo;'));
			$next_link_url =  get_next_posts_page_link();	//next url
			$prev_link_url =  get_previous_posts_page_link(); //prev url
		?>
		

		<nav class="page-nav site-module no-left no-right">
			
			<ul class="module-inner-wrap level-elements <?php if ($next_link ):?>page-nav__single-prev<?php endif; ?> <?php if ($prev_link ):?>page-nav__single-next<?php endif; ?>">
		
				<?php if ($next_link ):?>
				<li class="level-item  level-left  column--1-of-3 mobile-full-width">
		
					<a class="more-button main-btn block-button block-button-icon" href="<?php echo($next_link_url); ?>">
						
						<span class=" icon-left light-blue"><i class="fas fa-arrow-left"></i></span>
						
						
						Older Posts
						
					</a>
			
						
				
				</li>
				
				<?php else : //Empty cell for position purposes ?>
				
					<li class="level-item  level-left  column--1-of-3 mobile-full-width"></li>
				<?php endif; ?>
				
				<li class="level-item  has-text-centered  column--1-of-3"><?php current_paged(); ?></li>
				
				<?php if ($prev_link ):?>
				
				<li class="level-item  level-right column--1-of-3 mobile-full-width">
						
						<a class="more-button main-btn block-button block-button-icon" href="<?php echo($prev_link_url); ?>">
							
						Newer Posts
							
							 <span class="icon-right light-blue"><i class="fas fa-arrow-right"></i></span>
						
						</a>
						
				
						
				</li>
				
				<?php else : //Empty cell for position purposes ?>
				
					<li class="level-item  level-right column--1-of-3 mobile-full-width">
				
				<?php endif; ?>
		 	</ul>
		 </nav>
		 
		 
		<?php endif; ?>
		
	
		
		
	
<?php endif;  ?>


