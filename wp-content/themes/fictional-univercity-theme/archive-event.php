<?php 
get_header();
page_banner(array(
  'title'=>'All Events',
  'subtitle'=>'see what is going on in worlds'
));?>

 <div class="container container--narrow page-section">
    <?php 
    while(have_posts()){
      the_post();
      get_template_part('template-parts/content-event');
    }
      
      ?>
    
    <?php 
    echo paginate_links();
    ?>
    <hr class="section-break">
    <p>Looking for a recap of events?<a href="<?php site_url('/past-events') ?>">check out our past events archieve</a></p>
  </div>
<?php get_footer();?>