<?php get_header(); ?>
<div class="row">
  <div class="col-md-12">
    <header class="p-3 archive-header">
      <h1 class="archive-title"><?php single_cat_title(); ?></h1>
      <?php
      // Display optional category description
      if ( category_description() ) : ?>
      <div class="archive-meta"><?php echo category_description(); ?></div>
      <?php endif; ?>
  </header>
  </div>
  <div class="col-md-8">
    <?php
      while ( have_posts() ) : the_post(); ?>
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
    
    <?php endwhile; ?>
  </div>
  <div class="col-md-4">
    <?php get_sidebar();?>
  </div>
</div>
<?php get_footer(); ?>