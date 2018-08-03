<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage ramelan
 */
?>

<div class="row">
  <div class="col-md-8">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
      </header><!-- .entry-header -->

      <div class="post-meta">
        <span class="d-inline-block mb-0 category-post">
          <?php $cat = get_the_category() ;?>
          <?php echo $cat[0]->cat_name ;?>
        </span>
        <span class="d-inline-block mb-1 section-post-date">| <?php the_date(); ?></span>
      </div>
      

      <div class="single-post-feature-image mt-3 mb-3">
        <?php
          if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail('medium_large');
          }
        ?>
      </div>
      
      <div class="featured-post-content">
        <?php the_content() ;?>
      </div>

    </article><!-- #post-## -->
  </div>
  <div class="col-md-4">
    <?php get_sidebar();?>
  </div>
</div>