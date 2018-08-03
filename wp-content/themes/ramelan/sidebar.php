
<div class="section-title p-2">
  <h3 class="section-title-text">
    <span>Kategori</span>
  </h3>
</div>
<div class="category-list mt-4 d-flex flex-row">
  <?php
    $categories =  get_categories();
    foreach  ($categories as $cat):
  ?>
    <div class="category-item">
      <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>"><?php echo $cat->cat_name;?></a>
    </div>
    
  <?php endforeach;?>

</div>

<div>
  <div class="section-title p-2">
    <h3 class="section-title-text">
      <span>Paling</span> Populer
    </h3>
  </div>

  <div class="popular-post-list">
    <ol>
      <?php
        global $post;
        $args = array( 'posts_per_page' => 5 );
        $count = 1;

        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
            <li class="p-2">
              <div class="count">
                #<?php echo $count;?>
              </div>
              <div class="popular-post-item-link">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </div>
            </li>
      <?php
        $count++;
        endforeach; 
        wp_reset_postdata()
      ;?>
    </ol>
  </div>

</div>