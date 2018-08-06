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
      <?php the_post_thumbnail('full', array('class' => 'card-img-left feature-image flex-auto d-none d-md-block'));?>
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
      <?php if (has_post_thumbnail()):?>
        <div class="post-list-img-holder">
          <?php the_post_thumbnail('large', array('class' => 'card-img-left feature-list-image flex-auto d-none d-md-block')); ?> 
        </div>
      <?php endif;?>
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
  <?php
    $categories =  get_categories();
    $loop = 0;
  ?>
  <?php
    // print_r($categories);
  ?>
  <?php foreach($categories as $cat): ;?>
    <?php if($loop === 3): break;?>
    <?php endif;?>
    <div class="col-md-12">
      <div class="section-title p-2 row">
        <div class="col-7">
          <h3 class="section-title-text">
            <span><?php echo $cat->name;?></span>
          </h3>
        </div>
        <div class="col-5">
          <span class="lihat-semua-kategori">
            <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>">+ Lihat Semua</a>
          </span>
        </div>
      </div>
      <div class="feature-list-item-wrapper row p-2 mt-2 mb-2">
        <?php $getPostArgs = array( 'posts_per_page' => 3, 'category' => array($cat->cat_ID));?>
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
  <?php
    $loop++;
    endforeach;
  ?>
</div>

<!-- // Todo: get random post list -->


<?php get_footer(); ?>
