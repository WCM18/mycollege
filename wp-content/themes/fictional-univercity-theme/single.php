<?php 
get_header();
while(have_posts()){
    the_post();
    page_banner();?>
    
  <div class="container container--narrow page-section">
  <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog');?>">
      <i class="fa fa-home" aria-hidden="true"></i>Blog Home</a>
       posted by<a> <?php the_author_posts_link();?></a> on <?php the_time(F.j.y);?>
        <?php echo get_the_category_list(',');?></p>
        <span class="metabox__main"></span></p>
    </div>
      <div class="generic-content">
          <?php  the_content(); ?>
      </div>
  </div>
   
   <?php

}
get_footer();?>