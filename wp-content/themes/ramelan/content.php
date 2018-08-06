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
<div id="other-post" class="row">
  <div class="col-md-12">
      <div class="section-title p-2 row">
        <div class="col-7">
          <h3 class="section-title-text">
            <span>Yang mungkin Anda Suka:</span>
          </h3>
        </div>
      </div>
      <div class="feature-list-item-wrapper row p-2 mt-2 mb-2">
        <?php $getPostArgs = array( 'posts_per_page' => 3, 'category' => array($cat[0]->cat_ID));?>
        <?php $getPosts = get_posts($getPostArgs); ;?>
        <?php foreach ( $getPosts as $post ) : setup_postdata( $post ); ?>
        <div class="col-md-4 mb-2 feature-list-item">
          <div class="card">
            <div class="card-body">
              <span class="d-inline-block mb-0 category-post">
                <?php $cat = get_the_category() ;?>
                <?php echo $cat[0]->cat_name ;?>
              </span>
              <h3 class="mb-0 mt-2 mb-2">
                <a class="text-dark " href="<?php the_permalink();?>"><?php the_title(); ?></a>
              </h3>
              <a class="read-more pt-1 pb-1 mt-2 mb-2" href="<?php the_permalink();?>">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <?php endforeach; 
          wp_reset_postdata();?>
      </div>
    </div>
</div>