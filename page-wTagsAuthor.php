<?php
/*
Template Name: Page w Tags/Author
*/
?>
<? get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <!-- Looper -->
<div id="page">
            <div id="head"><?php the_title(); ?>
            </div>
    <div id="subHead"><? if(get_post_meta($post->ID, 'Subhead', true)) { echo get_post_meta($post->ID, 'Subhead', true); } else { echo "Ups.. there was no time for a second Headline :)"; }  ?>
    </div>
    <div id="content">
				<?php the_content(); ?>
            </div>
    <div class="subelements" id="postedAtAndBy">by <?php the_author_posts_link() ?> <?php the_time('F jS, Y') ?> at <?php the_time('g:i a'); ?></div>
            <div class="subelements" id="tags">tagged: <? the_tags() ?></div>   
  </div>
    <?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
<?php get_footer(); ?>

