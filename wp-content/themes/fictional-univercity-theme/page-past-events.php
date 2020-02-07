<?php 
get_header();
page_banner(array(
  'title'=>'Past Events !',
  'subtitle'=>'A Recape of our Past events'
));?>

 <div class="container container--narrow page-section">
    <?php 

$today= date('Ymd');
var_dump($today);
$pastEvents= new WP_Query(array(
    'paged'=>get_query_var('paged',1),
   'post_type'=>'event',
   'meta_key'=>'event_date',
  'orderby'=>'meta_value_num',
  'order'=>'ASC',
  'meta_query'=>array(
    array(
      'key'=>'event_date',
      'compare'=>'>=',
      'value'=>'$today',
      'type'=>'numeric'
    )
    )
));
var_dump($postEvents);
    while( $pastEvents->have_posts()){
        $pastEvents->the_post();
        get_template_part('template-patrs/content-enent');
    }?>
      
    <?php 
    echo paginate_links(array(
        'total'=>$pastEvents->max_num_pages
    ));
    ?>
  </div>
<?php get_footer();?>