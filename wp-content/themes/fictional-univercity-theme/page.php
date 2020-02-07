<?php 
get_header();
while(have_posts()){
    the_post();
    page_banner();?>

  <div class="container container--narrow page-section">
    <?php 
    $theparent= wp_get_post_parent_ID(get_the_ID());
    if($theparent){ ?>
         echo "i am a child page";
         <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theparent);?>"><i class="fa fa-home" aria-hidden="true"></i><?php echo get_the_title($theparent);?></a> <span class="metabox__main"><?php the_title() ?></span></p>
    </div>
    <?php }?>
   


    <?php    
    $testarray= get_pages(array(
      'childof'=> get_the_ID()
    ));    
    if($theparent or $testarray) { ?>   
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_permalink($theparent); ?>"><?php echo get_the_title($theparent); ?></a></h2>
      <ul class="min-list">
        <?php 
        if($theparent) {
          $findthechildrendof = $theparent;
        }else{ 
          $findthechildrendof = get_the_ID();

        }
        wp_list_pages(array(
          'title_li'=> NULL,
          'child_of'=> $findthechildrendof,
          'sort_column'=>'menu_order'
        ));?>
      </ul>
    </div>
      <?php } ?>
      

    <div class="generic-content">
      <p><?php the_content();?></p>
      </div>

  </div>
   
   <?php

}
get_footer();?>