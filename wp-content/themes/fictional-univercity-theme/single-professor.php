<?php 
get_header();
while(have_posts()){
    the_post();
    page_banner();?>
      
  <div class="container container--narrow page-section">
        <div class="generic-content">
         <div  class="row group">

             <div class="one-third">
                 <?php the_post_thumbnail('professorpotrit');?>
         </div>

         <div class="two-thirds">
           <?php the_content(); ?>
         </div>

        </div>

      </div>
      <?php 
      $relateprograms=get_field('related_programs');
      if($relateprograms){
        echo '<hr class="section-break">';
        echo '<h2 class="headline headline--medium">subject(s) taught</h2>';
        echo '<ul class="link-list min-list">';
        foreach($relateprograms as $program){?>
          <li><a href="<?php echo get_the_permalink($program);?>"><?php echo get_the_title($program)?></a></li>
        
  
       <?php  };
       echo '<ul>';

      }?>
  </div>
   
   <?php

}
get_footer();?>