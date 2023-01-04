<?php
function move_comment_field($fields)
{
   $comment_field = $fields['comment'];
   unset($fields['comment']);
   $fields['comment'] = $comment_field;
   return $fields;
}

add_filter('comment_form_fields', 'move_comment_field');




function halim_sabretooth_comment_placeholders($fields)
{
   $fields['author'] = str_replace(
      '<input',
      '<input placeholder="Full Name*"',
      $fields['author']
   );
   $fields['email'] = str_replace(
      '<input',
      '<input placeholder="Email*"',
      $fields['email']
   );
   $fields['url'] = str_replace(
      '<input',
      '<input placeholder="Website"',
      $fields['url']
   );
   return $fields;
}

/* Add Placehoder in comment Form Field (Comment) */
add_filter('comment_form_defaults', 'sabretooth_textarea_placeholder');

function sabretooth_textarea_placeholder($fields)
{
   $fields['comment_field'] = str_replace(
      '<textarea',
      '<textarea placeholder="Comment"',
      $fields['comment_field']
   );

   return $fields;
}

add_filter('comment_form_default_fields', 'halim_sabretooth_comment_placeholders');
