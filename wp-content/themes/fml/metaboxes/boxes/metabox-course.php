<?php
   global $url_path;
  $prefix = "_fmlaw_";
  
  $config3 = array(
    'id'             => 'course_meta_box',          // meta box id, unique per meta box
    'title'          => 'Course',          // meta box title
    'pages'          => array('course'),      // post types, accept custom post types as well, default is array('post'); optional
    'context'        => 'normal',            // where the meta box appear: normal (default), advanced, side; optional
    'priority'       => 'low',            // order of meta box: high (default), low; optional
    'fields'         => array(),            // list of meta fields (can be added by field arrays)
    'local_images'   => false,          // Use local or hosted images (meta box images for add/remove)
    'use_with_theme' => $url_path          //change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
  );
  
  
  /*
   * Initiate your 3rd meta box
   */
  $course =  new AT_Meta_Box($config3);
  //first field of the group has 'group' => 'start' and last field has 'group' => 'end'
  
  $course->addText($prefix.'price',array('name'=>'Price'));
  $course->addText($prefix.'more',array('name'=>'Read More'));
   //
     /*
   * To Create a reapeater Block first create an array of fields
   * use the same functions as above but add true as a last param
   */
  $repeater_fields[] = $course->addText($prefix.'coursename',array('name'=> 'Course Name '),true);
  /*
   * Then just add the fields to the repeater block
   */
  //repeater block
  $course->addRepeaterBlock($prefix.'repeatable_course',array(
    'inline'   => true, 
    'name'     => 'This Course Block ',
    'fields'   => $repeater_fields, 
    'sortable' => true
  ));
  
  /*
   * Don't Forget to Close up the meta box Declaration 
   */
  //Finish Meta Box Declaration 
  $course->Finish();
?>