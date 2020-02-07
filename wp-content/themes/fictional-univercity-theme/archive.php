<?php 
get_header();
page_banner(array(
  'title'=>get_the_archive_title(),
  'subtitle'=>the_archive_description()
));?>


  <div class="container container--narrow page-section">
    <?php 
    while(have_posts()){
      the_post();?>
      <div class="post-item">
        <h2 class="headline--post-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2></div>
        <div class="metabox">
    posted by<a><?php the_author_posts_link();?></a>on <?php the_time(n.j.y)?> <?php echo get_the_category_list(',');?>
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