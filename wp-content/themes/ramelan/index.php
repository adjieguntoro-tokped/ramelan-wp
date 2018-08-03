<?php get_header(); ?>
 <!-- Big Feature Post -->
 <div class="row mb-2">
  <div class="col-md-12">
    <div class="card flex-md-row mb-4 box-shadow h-md-250 feature">
      <div class="card-body d-flex p-5 flex-column align-items-start">
      <?php
        global $fPost;
        $feature_post = get_posts( array('posts_per_page' => 1, 'tag' => 'featured'));
        foreach ( $feature_post as $fPost ) : setup_postdata( $fPost );
      ?>
        <!-- <strong class="d-inline-block mb-2 text-success">Rahardi Ramelan</strong> -->
        <h3 class="mb-0 feature-title-post mt-2 mb-2">
          <a class="text-dark " href="#"><?php the_title(); ?></a>
        </h3>
        <!-- <div class="mb-1 text-muted">Nov 11</div> -->
        <p class="card-text mb-auto feature-desc-post"><?php echo excerpt(25); ?></p>
        <a class="feature-readmore-post mt-4" href="<?php the_permalink(); ?>">Baca Selengkapnya</a>
      </div>
      <?php the_post_thumbnail('full', array('class' => 'card-img-left feature-list-image flex-auto d-none d-md-block'));?>
      <?php
        endforeach;
        wp_reset_postdata();
      ?>
    </div>
  </div>
</div>
<!-- Feature List Post -->
<div class="row" id="feature-list">
  <div class="col-md-8">
    <div class="section-title p-2">
      <h3 class="section-title-text">
        <span>Topik</span> Terbaru</h3>
    </div>
    <?php      
      global $post;
      $tag_featured = get_term_by('name', 'featured', 'post_tag');      
      $args = array( 'posts_per_page' => 5, 'tag__not_in' => array( $tag_featured->term_id ) );

      $myposts = get_posts( $args );
      foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

    <div class="section-post-list mt-4">
      <div class="card flex-md-row mb-4 box-shadow h-md-250">
        <!-- <img class="card-img-left feature-list-image flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]"
          src="http://ramelan.com/data/ramelan/img/1Med.jpg" data-holder-rendered="true" style="width: 196px; height: 100%;"> -->
        <?php the_post_thumbnail('medium', array('class' => 'card-img-left feature-list-image flex-auto d-none d-md-block')); ?>       
        <div class="card-body d-flex flex-column align-items-start">
          <span class="d-inline-block mb-0 category-post">
            <?php $cat = get_the_category() ;?>
            <?php echo $cat[0]->cat_name ;?>
          </span>
          <span class="d-inline-block mb-1 section-post-date"><?php the_date(); ?></span>
          <h3 class="mb-0 mt-2 mb-2">
            <a class="text-dark " href=""><?php the_title(); ?></a>
          </h3>
          <div class="card-text mb-auto feature-desc-post">
            <?php echo excerpt(15); ?>
          </div>
          <a class="read-more pt-1 pb-1 mt-4 mb-4" href="<?php the_permalink(); ?>">
            Baca Selengkapnya
          </a>
        </div>
      </div>
    </div>

    <?php
      endforeach; 
      wp_reset_postdata()
    ;?>
  </div>
  <div class="col-md-4">
    <?php get_sidebar();?>
  </div>
</div>

<!-- // TODO:: Get posts list by random category -->
<div class="row" id="feature-list">
  <div class="col-md-12">
    <div class="section-title p-2">
      <h3 class="section-title-text">
        <span>Ekonomi</span> Rakyat</h3>
    </div>
    <div class="feature-list-item-wrapper row p-2 mt-2 mb-4">
      
      <?php query_posts('category_name=economy&posts_per_page=6'); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="col-md-4 mb-2 feature-list-item">
        <div class="card">
          <div class="card-body">
            <span class="d-inline-block mb-0 category-post">
              <?php $cat = get_the_category() ;?>
              <?php echo $cat[0]->cat_name ;?>
            </span>
            <h3 class="mb-0 mt-2 mb-2">
              <a class="text-dark " href="#"><?php the_title(); ?></a>
            </h3>
            <a class="read-more pt-1 pb-1 mt-2 mb-2" href="<?php the_permalink();?>">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
      <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>
    </div>
  </div>
</div>

<!-- // Todo: get random post list -->


<?php get_footer(); ?>
