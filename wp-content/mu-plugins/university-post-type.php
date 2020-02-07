<?php

function university_post_types(){
  //campus custom post
  register_post_type('campus',array(
    'supports'=>array('title','editor','excerpt'),

    'rewrite'=>array('slug'=>'campuses'),
    'has_archive'=>true,
    'public'=>true,
    'labels'=>array(
        'name'=>'campuses',
        'add_new_item'=>'Add New Campus',
        'edit_item'=>'Edit campus',
        'all_items'=>'All Campuses',
        'singular_name'=>'Capmus'
    ),
    'menu_icon'=>'dashicons-location-alt'
  ));
  //Even custom post type
    register_post_type('event',array(
        'supports'=>array('title','editor','excerpt'),

        'rewrite'=>array('slug'=>'events'),
        'has_archive'=>true,
        'public'=>true,
        'labels'=>array(
            'name'=>'Events',
            'add_new_item'=>'Add New Event',
            'edit_item'=>'Edit event',
            'all_items'=>'All Events',
            'singular_name'=>'Event'
        ),
        'menu_icon'=>'dashicons-calendar-alt'
      ));
      //program custom post type
      register_post_type('program',array(
        'supports'=>array('title','editor'),

        'rewrite'=>array('slug'=>'programs'),
        'has_archive'=>true,
        'public'=>true,
        'labels'=>array(
            'name'=>'Programs',
            'add_new_item'=>'Add New Program',
            'edit_item'=>'Edit program',
            'all_items'=>'All Programs',
            'singular_name'=>'Program'
        ),
        'menu_icon'=>'dashicons-awards'
      ));

      //Professor custon post 
      register_post_type('professor',array(
        'supports'=>array('title','editor','thumbnail'), 
        'public'=>true,
        'labels'=>array(
            'name'=>'Professors',
            'add_new_item'=>'Add New Prodessor',
            'edit_item'=>'Edit professor',
            'all_items'=>'All Professors',
            'singular_name'=>'Professor'
        ),
        'menu_icon'=>'dashicons-welcome-learn-more'
      ));
      
}

add_action('init','university_post_types');?>