<?php 
get_header();
page_banner(array(
  'title'=>'Welcme to our blog !',
  'subtitle'=>'keep up with our latest news(all posts)'
));?>


  <div class="container container--narrow page-section">
    <?php 
    while(have_posts()){
      the_post();?>
      <div class="post-item">
        <h2 class="headline--post-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2></div>
        <div class="metabox">
          <p>posted by <?php the_author();?> on <?php the_time(n.j.y)?> <?php echo get_the_category_list(',');?></p>
        </div>
        <div class="generic-content">
          <?php the_excerpt();?>
          <P><a class="btn btn--blue" href="<?php the_permalink()?>"> read more &raquo;</a></P>
        </div>
    <?php } 
    echo paginate_links();
    ?>
  </div>
<?php get_footer();?>